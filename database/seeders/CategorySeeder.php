<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Electronics',
            'description' => 'Electronic gadgets and devices',
        ]);

        Category::create([
            'name' => 'Books',
            'description' => 'Various kinds of books',
        ]);

        Category::create([
            'name' => 'Furniture',
            'description' => 'Home and office furniture',
        ]);
    }
};