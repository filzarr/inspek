<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SinglePostController;
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
Route::get('/post/{id}', [SinglePostController::class, 'index']);
Route::post('submit/comment', [SinglePostController::class, 'store'])->name('submitcomment');
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');
Route::post('/submitlogin', [LoginController::class, 'authenticate'])->middleware('guest');

// Route::get('/post', function () {
//     return view('post');
// });

//
Route::get('/download/{id}', [BerandaController::class, 'pdf']);
//admin
Route::resource('/admin', AdminController::class)->middleware('auth');
//carousel
Route::resource('/carousel', CarouselController::class)->middleware('auth');
//post
Route::resource('/posts', PostController::class)->middleware('auth');
Route::get('/posts/delete/{id}', [PostController::class, 'destroy'])->middleware('auth');
Route::post('/posts/update/{id}', [PostController::class, 'update'])->middleware('auth');
// navbar
Route::resource('/navbar', NavbarController::class)->middleware('auth');
Route::get('/create/menu', [NavbarController::class, 'menu'])->middleware('auth');
Route::post('/create/menu/add', [NavbarController::class, 'storemenu'])->middleware('auth');
//comment
Route::get('/comment', [CommentController::class, 'index'])->middleware('auth');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/comment/delete/{id}', [CommentController::class, 'destroy'])->middleware('auth');
