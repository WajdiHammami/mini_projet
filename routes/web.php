<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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



//Route::resource('posts','PostController', ['except' => ['update','delete']] );

//Route::resource('posts', PostsController::class);

Route::get('/', [PostController::class, 'index'])->name('index');
Route::get('/create',[PostController::class, 'create'])->name('posts.create');
Route::get('/edit/{id}',[PostController::class, 'edit'])->name('posts.edit');
//Route::resource('/posts', PostController::class);
Route::post('/create',[PostController::class, 'store']);