<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DashboardController;

// Route to show the list of posts (index)
Route::get('/', [PostController::class, 'index'])->name('posts.index'); // Correct route for index page

// Route for displaying a specific post (showing the details of the post)
Route::get('/post/{id}', [PostController::class, 'show'])->name('posts.show'); // Correct route for show page

// Login routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login'); // Show login page
    Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login'); // Handle login form submission
});

// Dashboard route - Only authenticated users can access
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard'); // Correct route for dashboard

// Protected profile routes (only accessible by authenticated users)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Logout route - Only authenticated users can log out
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});

// Comment route - Store comments on posts
Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store'); // Route for posting a comment

require __DIR__.'/auth.php';
