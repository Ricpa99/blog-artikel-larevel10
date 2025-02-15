<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(4)->create();
        Post::factory(50)->create();
        // Category::factory(4)->create();

        // User::create([
        //     'name' => 'rangga',
        //     'username' => 'rangga',
        //     'email' => 'rangga@gmail.com',
        //     'password' => bcrypt('password')
        // ]);

        Category::create([
            'title' => 'Frontend Developer',
            'slug' => 'Frontend-Developer'
        ]);

        Category::create([
            'title' => 'UI UX',
            'slug' => 'UI-UX'
        ]);

        Category::create([
            'title' => 'Backend Developer',
            'slug' => 'Backend-Developer'
        ]);

        Category::create([
            'title' => 'IT Support',
            'slug' => 'IT Support'
        ]);
        
        Category::create([
            'title' => 'Desain Grafis',
            'slug' => 'Desain Grafis'
        ]);
        // Post::create([
        //     'judul' => 'judul pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, adipisci?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit deserunt, in modi 
        //     sint recusandae doloremque ab molestiae dicta nemo repellendus.',
        //     'category_id' => 1,
        //     // 'user_id' => 1
        // ]);

        // Post::create([
        //     'judul' => 'judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, adipisci?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit deserunt, in modi 
        //     sint recusandae doloremque ab molestiae dicta nemo repellendus.',
        //     'category_id' => 1,
        //     // 'user_id' => 1
        // ]);
        // Post::create([
        //     'judul' => 'judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, adipisci?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit deserunt, in modi 
        //     sint recusandae doloremque ab molestiae dicta nemo repellendus.',
        //     'category_id' => 2,
        //     // 'user_id' => 1
        // ]);
    }
}
