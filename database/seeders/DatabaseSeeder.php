<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            TranslationSeeder::class,
            AdminHomeSliderSeeder::class,
            AdminHomeDespegableSeeder::class,
            AdminHomePartnersSeeder::class,
            AdminSliderGeneralSeeder::class,
            CategorySeeder::class,
            BlogSeeder::class,
            FinishSeeder::class,
            SizeSeeder::class,
            PaperSeeder::class,
            GallerySeeder::class,
            VideoSeeder::class,
        ]);
    }
}
