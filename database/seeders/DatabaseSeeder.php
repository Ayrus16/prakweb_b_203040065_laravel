<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Surya Putra Pratama',
        //     'email' => 'surya@gmail.com',
        //     'password' => bcrypt('123'),
        // ]);
        // User::create([
        //     'name' => 'S.P.Pratama',
        //     'email' => 'sp@gmail.com',
        //     'password' => bcrypt('123'),
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Ini Judul Ke Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-pertama',
        //     'excerpt' => 'Lorem ipsum pertama',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas aliquid doloremque unde, soluta sapiente architecto voluptatum nisi repellendus dolor error laborum saepe similique placeat corporis, tempore quas praesentium culpa quam incidunt quibusdam veritatis dolore? Nisi, consequuntur delectus maiores incidunt voluptate, at maxime </p> <p>labore natus, aut ut ab? Mollitia quidem numquam repudiandae molestias, nulla, quos magni officia voluptatum quae nostrum distinctio accusamus, a corrupti reprehenderit fugiat dolores excepturi. Consequuntur ut excepturi quod voluptatum ipsum! Repellendus omnis sequi mollitia quam quis est, dolorem tempore eos tenetur illum, voluptatibus nisi eaque numquam quasi!</p> '
        // ]);
        // Post::create([
        //     'title' => 'Ini Judul Ke dua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum Kedua',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas aliquid doloremque unde, soluta sapiente architecto voluptatum nisi repellendus dolor error laborum saepe similique placeat corporis, tempore quas praesentium culpa quam incidunt quibusdam veritatis dolore? Nisi, consequuntur delectus maiores incidunt voluptate, at maxime </p> <p>labore natus, aut ut ab? Mollitia quidem numquam repudiandae molestias, nulla, quos magni officia voluptatum quae nostrum distinctio accusamus, a corrupti reprehenderit fugiat dolores excepturi. Consequuntur ut excepturi quod voluptatum ipsum! Repellendus omnis sequi mollitia quam quis est, dolorem tempore eos tenetur illum, voluptatibus nisi eaque numquam quasi!</p> '
        // ]);
        // Post::create([
        //     'title' => 'Ini Judul Ke tiga',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum Kedua',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas aliquid doloremque unde, soluta sapiente architecto voluptatum nisi repellendus dolor error laborum saepe similique placeat corporis, tempore quas praesentium culpa quam incidunt quibusdam veritatis dolore? Nisi, consequuntur delectus maiores incidunt voluptate, at maxime </p> <p>labore natus, aut ut ab? Mollitia quidem numquam repudiandae molestias, nulla, quos magni officia voluptatum quae nostrum distinctio accusamus, a corrupti reprehenderit fugiat dolores excepturi. Consequuntur ut excepturi quod voluptatum ipsum! Repellendus omnis sequi mollitia quam quis est, dolorem tempore eos tenetur illum, voluptatibus nisi eaque numquam quasi!</p> '
        // ]);
        // Post::create([
        //     'title' => 'Ini Judul Ke empat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum empat',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas aliquid doloremque unde, soluta sapiente architecto voluptatum nisi repellendus dolor error laborum saepe similique placeat corporis, tempore quas praesentium culpa quam incidunt quibusdam veritatis dolore? Nisi, consequuntur delectus maiores incidunt voluptate, at maxime </p> <p>labore natus, aut ut ab? Mollitia quidem numquam repudiandae molestias, nulla, quos magni officia voluptatum quae nostrum distinctio accusamus, a corrupti reprehenderit fugiat dolores excepturi. Consequuntur ut excepturi quod voluptatum ipsum! Repellendus omnis sequi mollitia quam quis est, dolorem tempore eos tenetur illum, voluptatibus nisi eaque numquam quasi!</p> '
        // ]);
    }
}
