<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        $request->validate([
            'content' => 'required|max:500',
            'author' => 'nullable|max:100',
        ]);

        $post = Post::findOrFail($postId);

        $post->comments()->create([
            'content' => $request->input('content'),
            'author' => $request->input('author'),
        ]);

        return redirect()->route('posts.show', $postId)->with('success', 'Comment added successfully!');
    }
}
