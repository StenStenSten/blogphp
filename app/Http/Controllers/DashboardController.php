<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(10); // Fetch the latest posts
        return view('dashboard', compact('posts')); // Pass posts to the view
    }
}
