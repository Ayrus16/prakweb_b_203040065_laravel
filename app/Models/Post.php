<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
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

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();

        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
    
}
