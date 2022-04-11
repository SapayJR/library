<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Database\Factories\BookFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         Category::factory(10)->create();
         User::factory()->hasBooks(3)->count(10)->create();
         $this->call(RoleSeeder::class);
    }
}
