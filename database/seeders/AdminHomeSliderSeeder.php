<?php

namespace Database\Seeders;

use App\Models\AdminHomeSlider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminHomeSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdminHomeSlider::create([
            'key'               => 'home',
            'image'             => "assets/home/slider/utileria_1.png",
            'es_title'          => "Te ayudamos a destacar los mejores ángulos y diseño de interiores",
            'es_description'    => 'Arquitectura e interiorismo',
            'es_button'         => 'Conocer más',
            'en_title'          => "We help you highlight the best angles and interior design",
            'en_description'    => 'Architecture and interior design',
            'en_button'         => 'Learn more',
            'href'              => 'arquitectura.index'
        ]);

        AdminHomeSlider::create([
            'key'               => 'arquitectura',
            'image'             => "assets/home/slider/utileria_1.png",
            'es_title'          => "Te ayudamos a destacar los mejores ángulos y diseño de interiores",
            'es_description'    => 'Arquitectura e interiorismo',
            'es_button'         => 'Conocer más',
            'en_title'          => "We help you highlight the best angles and interior design",
            'en_description'    => 'Architecture and interior design',
            'en_button'         => 'Learn more',
            'href'              => 'arquitectura.index'
        ]);

        AdminHomeSlider::create([
            'key'               => 'construccion',
            'image'             => "assets/home/slider/construccion.png",
            'es_title'          => "Mejoramos tu pocisionamiento en el sector de la Construcción a través de herramientas audivisuales de alto impacto",
            'es_description'    => 'Construcción',
            'es_button'         => 'Conocer más',
            'en_title'          => "We improve your positioning in the Construction sector through high-impact audiovisual tools",
            'en_description'    => 'Construction',
            'en_button'         => 'Learn more',
            'href'              => 'construccion.index'
        ]);
    }
}
