<?php

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostCommentController;

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

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('post');

Route::post('/posts/{post:slug}/comments', [PostCommentController::class, 'store'])->name('store-comment');


// ->where('post', '[0-9]+');
// ->where('post', '[0-9A-z_\-]+');

// Route::get('/categories/{category:slug}', function (Category $category) {
    // DB::listen(function ($query){
    //     logger($query->sql);
    // });

//     return view('posts', [
//         'posts' => $category->posts,
//         'currentCategory' => $category,
//         'categories' => Category::all()
//     ]);
// })->name('categories');

// Route::get('/authors/{author:username}', function (User $author) {  
//     return view('posts.index', [
//         'posts' => $author->posts
//     ]);
// })->name('author');
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register-form');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register-store');
Route::get('/login', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('/sessions', [SessionsController::class, 'store'])->middleware('guest')->name('create-sessions');
Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');
