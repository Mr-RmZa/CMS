<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Photo;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class AdminCommentController extends Controller
{
    public function index()
    {
        $comments = Comment::orderBy('created_at', 'desc')
            ->with('post')
            ->paginate(10);
        return view('admin.comment.index', compact(['comments']));
    }

    public function actions(Request $request, $id)
    {
        if($request->has('action')){
            $comment = Comment::findOrFail($id);
            if($request->input('action') == 'active'){
                $comment->status = 1;
                $comment->save();
                Session::flash('comment_active', 'نظر کاربر تایید شد');
            }else{
                $comment->status = 0;
                $comment->save();
                Session::flash('comment_inactive', 'نظر کاربر تایید نشد');
            }
        }
        return redirect('/admin/comment');
    }

    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        return view('admin.comment.edit', compact(['comment']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->description = $request->input('description');
        $comment->save();
        Session::flash('update_comment', 'نظر با موفقیت ویرایش شد');
        return redirect('admin/comment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        Session::flash('delete_comment', 'نظر با موفقیت حذف شد');
        return redirect('admin/comment');
    }
}
