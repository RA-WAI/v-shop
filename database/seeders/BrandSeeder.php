<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = ['Apple','Samsung','Sony','Lenovo','LG','Panasonic','Xiaomi'];

        foreach ($brands as $brand) {
            Brand::factory()->state([
                'name' => $brand,
                'slug' => Str::lower($brand),
            ])->create();
        }
    }
}
