<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      $users = User::factory(10)->create();
      $categories = Category::factory(4)->create();

       Post::factory(50)->recycle($users)->recycle($categories)->create();


    }
}
