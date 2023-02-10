<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
    {
        $post = Post::with(['user', 'category', 'photo', 'comment'=>function($q) {
            $q->where('status', 1)
                ->where('parent_id', null);
        },
            'comment.replies'=>function($q) {
            $q->where('status', 1);
            }])
            ->where('slug', $slug)->first();
        $categories = Category::all();
        return view('frontend.posts.show', compact(['post', 'categories']));
    }

    public function search(Request $request)
    {
        $query = $request->input('title');
        $posts = Post::with('user', 'category', 'photo')
            ->where('status', 1)
            ->where('title', 'Like', '%'.$query.'%')
            ->orderBy('created_at', 'desc')
            ->paginate(1);
        $categories = Category::all();
        return view('frontend.posts.search', compact(['posts', 'categories', 'query']));
    }
}
