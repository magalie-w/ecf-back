<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
        $categories = Category::factory() 
        ->count(5)
        ->create();

        Color::factory()
        ->count(5)
        ->create();

        $products = Product::factory()
        ->count(10)
        ->create(function () use ($categories) {
            return ['category_id' => $categories->random()];
        });


    }
}
