<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/{id}', function ($id) {
    // Find the post by its ID
    $post = \App\Models\Post::findOrFail($id);  // This will throw a 404 if the post is not found
    return view('posts.show', compact('post'));  // Pass the post to the 'posts.show' view
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/register', function () {
    return view('auth.register');
})->name('register.form');

Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');

Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');
