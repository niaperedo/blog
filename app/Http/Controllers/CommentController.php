<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentController extends Controller
{
    public function store(Post $post, Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        $post->addComment(request('body'));

        return back();
    }
}
