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

Route::get('/',[PostController::class, 'index'])->name('posts.index');

//Route::get('posts', [PostController::class, 'index'])->name('posts.index');
//Route::get('posts/fetch', [PostController::class, 'fetch'])->name('posts.fetch');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');

