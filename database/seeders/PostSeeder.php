<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'user_id' => 1,
            'category_id' => rand(1,5),
            'title' => 'Sarlavha',
            'short_content' => 'Qisqa mazmun',
            'content' => 'Misol content',
            'photo' => null,
        ]);
         Post::create([
            'user_id' => 1,
            'category_id' => rand(1,5),
            'title' => 'Sarlavha2',
            'short_content' => 'Qisqa mazmun2',
            'content' => 'Misol content2',
            'photo' => null,
        ]);
    }
}
