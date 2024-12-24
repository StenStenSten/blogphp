<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id)
    {
        // Retrieve the post by ID, or 404 if not found
        $post = Post::findOrFail($id);

        // Return the view with the post data
        return view('post.show', compact('post'));
    }
}