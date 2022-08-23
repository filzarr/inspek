<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
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

Route::get('/', [BerandaController::class, 'api']);
Route::get('/post', function () {
    return view('post');
});

//admin
Route::resource('/admin', AdminController::class);

//post
Route::resource('/posts', PostController::class);

//comment
Route::get('/comment', [CommentController::class, 'index']);
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
