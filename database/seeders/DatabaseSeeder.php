<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portofolio;
use App\Models\Product;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Data Dummy Portofolio Video
        Portofolio::create([
            'title' => "Acho Ansanay - I'm Okay (Official Music Video)",
            'youtube_url' => 'https://www.youtube.com/embed/dummy_id_1', // Format embed YouTube
            'category' => 'Music Video',
            'description' => 'Official music video directed and edited by Pace Film.'
        ]);

        Portofolio::create([
            'title' => "Company Profile - Industri Kreatif",
            'youtube_url' => 'https://www.youtube.com/embed/dummy_id_2',
            'category' => 'Commercial',
            'description' => 'Video profil perusahaan untuk klien B2B.'
        ]);

        // 2. Data Dummy Produk Baju
        Product::create([
            'name' => 'Pace Film Crewneck Black',
            'slug' => Str::slug('Pace Film Crewneck Black'),
            'description' => 'Crewneck eksklusif edisi kru Pace Film. Bahan katun tebal dan nyaman.',
            'price' => 250000,
            'stock' => 15,
        ]);

        Product::create([
            'name' => 'Pace Film T-Shirt Classic White',
            'slug' => Str::slug('Pace Film T-Shirt Classic White'),
            'description' => 'Kaos putih lengan pendek dengan logo Pace Film di dada kiri.',
            'price' => 150000,
            'stock' => 30,
        ]);
    }
}