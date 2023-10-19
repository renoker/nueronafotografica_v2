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

        AdminHomeSlider::create([
            'key'               => 'corporativa',
            'image'             => "assets/home/slider/corporativa.png",
            'es_title'          => "Podemos acompañarte en tus convenciones dentro o fuera de México",
            'es_description'    => 'Corporativa',
            'es_button'         => 'Conocer más',
            'en_title'          => "We can accompany you at your conventions inside or outside of Mexico",
            'en_description'    => 'Corporate',
            'en_button'         => 'Learn more',
            'href'              => 'corporativa.index'
        ]);

        AdminHomeSlider::create([
            'key'               => 'publicitaria',
            'image'             => "assets/home/slider/publicitaria.png",
            'es_title'          => "Incrementamos tus ventas desarrollando la estratégia adecuada",
            'es_description'    => 'Publicitaria',
            'es_button'         => 'Conocer más',
            'en_title'          => "We increase your sales by developing the appropriate strategy",
            'en_description'    => 'Corporate',
            'en_button'         => 'Learn more',
            'href'              => 'publicitaria.index'
        ]);

        AdminHomeSlider::create([
            'key'               => 'acerca_de',
            'image'             => "assets/home/slider/acercade.png",
            'es_title'          => "Frase o línea de impacto",
            'es_description'    => 'Nosotros',
            'es_button'         => 'Conocer más',
            'en_title'          => "Phrase or line of impact",
            'en_description'    => 'Us',
            'en_button'         => 'Learn more',
            'href'              => 'acerca_de.index'
        ]);
    }
}
