<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Photo;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $post = Post::count();
        $category = Category::count();
        $photo = Photo::count();
        $user = User::count();
        $users = User::orderby('created_at', 'desc')->limit(5)->get();
        $posts = Post::orderby('created_at', 'desc')->limit(5)->get();
        return view('admin.dashboard.index', compact(['post', 'category', 'photo', 'user', 'users', 'posts']));
    }
}
