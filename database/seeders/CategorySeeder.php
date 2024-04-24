<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Computers', 'Phones', 'Laptops', 'TVs', 'Monitors','Wearables'];
        foreach ($categories as $category) {
            Category::factory()->state([
                'name' => $category,
                'slug' => Str::lower($category),
            ])->create();
        }
    }
}
