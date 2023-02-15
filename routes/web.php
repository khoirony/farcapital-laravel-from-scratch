<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
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

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('post');
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

Route::get('/author/{author:username}', function (User $author) {
    DB::listen(function ($query){
        logger($query->sql);
    });
    
    return view('posts', [
        'posts' => $author->posts
    ]);
})->name('author');