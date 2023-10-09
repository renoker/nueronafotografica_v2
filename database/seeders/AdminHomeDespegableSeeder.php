<?php

namespace Database\Seeders;

use App\Models\AdminHomeDespegable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminHomeDespegableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdminHomeDespegable::create([
            'image'             => "assets/home/desplegable/utileria_4.jpeg",
            'es_title'          => "Arquitectura e interiorismo",
            'es_button'         => 'Conocer más',
            'en_title'          => "Architecture and interior design",
            'en_button'         => 'Learn more',
        ]);

        AdminHomeDespegable::create([
            'image'             => "assets/home/desplegable/utileria_5.jpeg",
            'es_title'          => "Construcción",
            'es_button'         => 'Conocer más',
            'en_title'          => "Construction",
            'en_button'         => 'Learn more',
        ]);

        AdminHomeDespegable::create([
            'image'             => "assets/home/desplegable/utileria_3.jpeg",
            'es_title'          => "Corporativa",
            'es_button'         => 'Conocer más',
            'en_title'          => "Corporate",
            'en_button'         => 'Learn more',
        ]);

        AdminHomeDespegable::create([
            'image'             => "assets/home/desplegable/utileria_5.jpeg",
            'es_title'          => "Publicitaria",
            'es_button'         => 'Conocer más',
            'en_title'          => "Advertising",
            'en_button'         => 'Learn more',
        ]);
    }
}
