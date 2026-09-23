<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Wisata Alam',
        ]);

        Category::create([
            'name' => 'Kuliner',
        ]);

        Category::create([
            'name' => 'Sejarah',
        ]);

        Category::create([
            'name' => 'Buatan',
        ]);
    }
}