<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'admin'], function () {
    Route::resource('/admin/users', \App\Http\Controllers\Admin\AdminUserController::class);
    Route::resource('/admin/posts', \App\Http\Controllers\Admin\AdminPostController::class);
    Route::resource('/admin/category', \App\Http\Controllers\Admin\AdminCategoryController::class);
    Route::resource('/admin/photos', \App\Http\Controllers\Admin\AdminPhotoController::class);
    Route::resource('admin/comment', \App\Http\Controllers\Admin\AdminCommentController::class);
    Route::post('/admin/comment/{id}', [\App\Http\Controllers\Admin\AdminCommentController::class, 'actions'])->name('comment.actions');
    Route::delete('/admin/delete/media', [\App\Http\Controllers\Admin\AdminPhotoController::class, 'deleteAll'])->name('photo.delete.all');
    Route::get('/admin/dashboard', [\App\Http\Controllers\Admin\AdminDashboardController::class, 'index'])->name('dashboard.index');
});

Route::get('/', [\App\Http\Controllers\Frontend\MainController::class, 'index']);
Route::get('/post/{slug}', [\App\Http\Controllers\Frontend\PostController::class, 'show'])->name('frontend.post.show');
Route::get('/search', [\App\Http\Controllers\Frontend\PostController::class, 'search'])->name('frontend.post.search');
Route::post('/comment/{postID}', [\App\Http\Controllers\Frontend\CommentController::class, 'store'])->name('frontend.comment.store');
Route::post('/comment', [\App\Http\Controllers\Frontend\CommentController::class, 'reply'])->name('frontend.comment.reply');
