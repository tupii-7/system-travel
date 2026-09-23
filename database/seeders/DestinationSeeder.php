<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Destination;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    public function run(): void
    {
        $wisataAlam = Category::where('name', 'Wisata Alam')->first();
        $kuliner = Category::where('name', 'Kuliner')->first();
        $sejarah = Category::where('name', 'Sejarah')->first();
        $buatan = Category::where('name', 'Buatan')->first();

        Destination::create([
            'category_id' => $wisataAlam->id,
            'name' => 'Pantai Slamaran',
            'description' => 'Destinasi wisata pantai dengan suasana yang cocok untuk bersantai dan menikmati pemandangan laut.',
            'ticket_price' => 5000,
            'opening_hours' => '06:00 - 18:00',
            'location' => 'Pekalongan',
            'image' => null,
        ]);

        Destination::create([
            'category_id' => $kuliner->id,
            'name' => 'Kuliner Khas Pekalongan',
            'description' => 'Tempat untuk menikmati berbagai makanan khas dan kuliner lokal Pekalongan.',
            'ticket_price' => 0,
            'opening_hours' => '10:00 - 21:00',
            'location' => 'Pekalongan',
            'image' => null,
        ]);

        Destination::create([
            'category_id' => $sejarah->id,
            'name' => 'Museum Batik',
            'description' => 'Tempat untuk mengenal sejarah, perkembangan, dan koleksi batik.',
            'ticket_price' => 5000,
            'opening_hours' => '08:00 - 16:00',
            'location' => 'Pekalongan',
            'image' => null,
        ]);

        Destination::create([
            'category_id' => $buatan->id,
            'name' => 'Taman Kota',
            'description' => 'Area rekreasi kota yang dapat digunakan untuk bersantai dan berkumpul.',
            'ticket_price' => 0,
            'opening_hours' => '06:00 - 22:00',
            'location' => 'Pekalongan',
            'image' => null,
        ]);
    }
}