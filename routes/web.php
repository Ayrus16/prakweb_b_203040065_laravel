<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about',[
        "name" => "Surya Putra Pratama",
        "email" => "203040065@unpas.ac.id",
        "image" => "nophoto.jpg",
        "title" => "About"
    ]);
});





Route::get('/blog', [PostController::class, 'index']);


// Halaman single
Route::get('post/{post:slug}' , [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all() 
     ]);
});


Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'title' => "Post By Category :$category->name",
        'posts' => $category->posts->load('category','author')
     ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->post->load('category','author'),
     ]);
});