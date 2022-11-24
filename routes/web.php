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
use App\Http\Controllers\PdfController;
use App\Http\Controllers\DataPegawaiController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ImagsliderController;
use App\Http\Controllers\PpidController;
use App\Http\Controllers\SaberpungliController;
use App\Http\Controllers\formcontroller;
use App\Http\Controllers\NavbarSingleController;
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
//beranda
Route::get('/', [BerandaController::class, 'api']);
//ppid
Route::get('/ppid', [PpidController::class, 'home']);
Route::get('/form', [formcontroller::class, 'index']);
Route::post('/submitform', [formcontroller::class, 'store']);
//navbarsingle
Route::get('/navbar/{id}',[NavbarSingleController::class, 'index']);
//saber pungli
Route::get('/saberpungli', [SaberpungliController::class, 'index']);
Route::get('/formpungli', [SaberpungliController::class, 'form']);
Route::post('/submitpungli', [SaberpungliController::class, 'store']);

//singlepost
Route::get('/post/{id}', [SinglePostController::class, 'index']);
Route::post('submit/comment', [SinglePostController::class, 'store'])->name('submitcomment');
//pdfview
Route::get('/pdf/{id}', [PdfController::class, 'index']);
Route::post('submit/pdfcomment', [PdfController::class, 'store'])->name('submitpdfcomment');
//submenu view
Route::get('menu/{id}', [MenuController::class, 'index']);
//login admin
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/submitlogin', [LoginController::class, 'authenticate'])->middleware('guest');

// Route::get('/post', function () {
//     return view('post');
// });

//
Route::get('/download/{id}', [BerandaController::class, 'pdf']);
//ppid
Route::resource('/ppidadmin', PpidController::class)->middleware('auth');
//admin
Route::resource('/admin', AdminController::class)->middleware('auth');
//carousel
Route::resource('/carousel', CarouselController::class)->middleware('auth');
//post
Route::resource('/posts', PostController::class)->middleware('auth');
Route::get('/posts/delete/{id}', [PostController::class, 'destroy'])->middleware('auth');
Route::post('/posts/update/{id}', [PostController::class, 'update'])->middleware('auth');
// navbar
Route::get('/navbar', [NavbarController::class, 'index'])->middleware('auth');
Route::post('/navbar/store', [NavbarController::class, 'store'])->middleware('auth');
Route::get('/navbar/destroy{id}', [NavbarController::class, 'destroy'])->middleware('auth');
Route::get('/create/navbar', [NavbarController::class, 'baru'])->middleware('auth');
Route::get('/create/menu', [NavbarController::class, 'menu'])->middleware('auth');
Route::post('/create/menu/add', [NavbarController::class, 'storemenu'])->middleware('auth');
Route::get('/create/menusingle/add', [NavbarController::class, 'singlenavbar'])->middleware('auth');
Route::post('/create/menusingle/store', [NavbarController::class, 'storesinglenavbar'])->middleware('auth');
Route::get('/navbar/hapus/{id}', [NavbarController::class, 'hapus'])->middleware('auth');
//comment
Route::get('/comment', [CommentController::class, 'index'])->middleware('auth');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store')->middleware('auth');
Route::get('/comment/delete/{id}', [CommentController::class, 'destroy'])->middleware('auth');
Route::get('pdf/comment/delete/{id}', [CommentController::class, 'delete'])->middleware('auth');
//datapegawai
Route::resource('/datapegawai', DataPegawaiController::class)->middleware('auth');
//image slider
Route::resource('/imageslider', ImagsliderController::class)->middleware('auth');

Route::get('/laporanppid', [formcontroller::class, 'admin'])->middleware('auth');
Route::get('/laporansaber', [SaberpungliController::class, 'admin'])->middleware('auth');


