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





Route::get('/blog', function () {
    $blog_post = [
        [
            "title" => "INI adalah Judul",
            "slug" => "ini-adalah-judul",
            "author" => "Surya Putra",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti iure sequi facilis asperiores eum ratione reiciendis quaerat harum! Placeat ad sint vitae, accusamus totam ipsum itaque ducimus debitis quaerat nostrum odit libero impedit sit excepturi similique unde? Animi, id officia cupiditate, voluptas illum excepturi iure molestiae recusandae explicabo dolorum pariatur corrupti, laudantium quis incidunt impedit doloremque possimus obcaecati perspiciatis eum. Ducimus, reiciendis voluptatem? Voluptates id natus explicabo, neque consequatur provident cum? Tenetur fugit consectetur a deleniti facilis doloribus praesentium. Vitae nemo placeat, autem tempore officiis sequi necessitatibus. Culpa porro ipsum officia assumenda quaerat sapiente cupiditate excepturi fugiat aliquam et. Delectus."

        ],
        [
            "title" => "INI adalah Judul Kedua",
            "slug" => "ini-adalah-judul-kedua",
            "author" => "Pratama",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti iure sequi facilis asperiores eum ratione reiciendis quaerat harum! Placeat ad sint vitae, accusamus totam ipsum itaque ducimus debitis quaerat nostrum odit libero impedit sit excepturi similique unde? Animi, id officia cupiditate, voluptas illum excepturi iure molestiae recusandae explicabo dolorum pariatur corrupti, laudantium quis incidunt impedit doloremque possimus obcaecati perspiciatis eum. Ducimus, reiciendis voluptatem? Voluptates id natus explicabo, neque consequatur provident cum? Tenetur fugit consectetur a deleniti facilis doloribus praesentium. Vitae nemo placeat, autem tempore officiis sequi necessitatibus. Culpa porro ipsum officia assumenda quaerat sapiente cupiditate excepturi fugiat aliquam et. Delectus."

        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_post
    ]);
});


// Halaman single
Route::get('post/{slug}' , function($slug) {
    $blog_post = [
        [
            "title" => "INI adalah Judul",
            "slug" => "ini-adalah-judul",
            "author" => "Surya Putra",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti iure sequi facilis asperiores eum ratione reiciendis quaerat harum! Placeat ad sint vitae, accusamus totam ipsum itaque ducimus debitis quaerat nostrum odit libero impedit sit excepturi similique unde? Animi, id officia cupiditate, voluptas illum excepturi iure molestiae recusandae explicabo dolorum pariatur corrupti, laudantium quis incidunt impedit doloremque possimus obcaecati perspiciatis eum. Ducimus, reiciendis voluptatem? Voluptates id natus explicabo, neque consequatur provident cum? Tenetur fugit consectetur a deleniti facilis doloribus praesentium. Vitae nemo placeat, autem tempore officiis sequi necessitatibus. Culpa porro ipsum officia assumenda quaerat sapiente cupiditate excepturi fugiat aliquam et. Delectus."

        ],
        [
            "title" => "INI adalah Judul Kedua",
            "slug" => "ini-adalah-judul-kedua",
            "author" => "Pratama",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti iure sequi facilis asperiores eum ratione reiciendis quaerat harum! Placeat ad sint vitae, accusamus totam ipsum itaque ducimus debitis quaerat nostrum odit libero impedit sit excepturi similique unde? Animi, id officia cupiditate, voluptas illum excepturi iure molestiae recusandae explicabo dolorum pariatur corrupti, laudantium quis incidunt impedit doloremque possimus obcaecati perspiciatis eum. Ducimus, reiciendis voluptatem? Voluptates id natus explicabo, neque consequatur provident cum? Tenetur fugit consectetur a deleniti facilis doloribus praesentium. Vitae nemo placeat, autem tempore officiis sequi necessitatibus. Culpa porro ipsum officia assumenda quaerat sapiente cupiditate excepturi fugiat aliquam et. Delectus."

        ]
    ];
    $new_post = [];
    foreach($blog_post as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post',[
        "title" => "Single Post",
        "post" => $new_post
    ]);
});