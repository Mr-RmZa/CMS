<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    public function store(Request $request, $postID)
    {
        $post = Post::findOrFail($postID);
        if ($post) {
            $comment = new Comment();
            $comment->description = $request->input('description');
            $comment->post_id = $post->id;
            $comment->status = 0;
            $comment->save();
        }
        Session::flash('add_comment', 'نظر با موفقیت اضافه شد و منتظر تایید مدیران است');
        return back();
    }
    public function reply(Request $request)
    {
        $postID = $request->input('post_id');
        $parenID = $request->input('parent_id');
        $post = Post::findOrFail($postID);
        if ($post) {
            $comment = new Comment();
            $comment->description = $request->input('description');
            $comment->parent_id = $parenID;
            $comment->post_id = $post->id;
            $comment->status = 0;
            $comment->save();
        }
        Session::flash('add_comment', 'نظر با موفقیت اضافه شد و منتظر تایید مدیران است');
        return back();
    }
}
