<?php

namespace Database\Seeders;

use App\Models\CardTextAcercaDe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardTextAcercaDeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CardTextAcercaDe::create([
            'description_es'    => '"Soy consultor de negocios, es esencial transmitir confianza, experiencia; El fotógrafo capturó la esencia de mi trabajo como consultor de negocios. Sus imágenes reflejan profesionalismo y dedicación. Recomendaría sus servicios sin ninguna duda."',
            'name_es'           => "Alejandro Torres",
            'ocupacion_es'      => "Puesto, Compañía",
            'description_en'    => '"I am a business consultant, it is essential to transmit confidence and experience; The photographer captured the essence of my work as a business consultant. His images reflect professionalism and dedication. I would recommend his services without any hesitation."',
            'name_en'           => "Alejandro Torres",
            'ocupacion_en'      => "Position, Company",
            'order'             => 1,
        ]);

        CardTextAcercaDe::create([
            'description_es'    => '"Soy consultor de negocios, es esencial transmitir confianza, experiencia; El fotógrafo capturó la esencia de mi trabajo como consultor de negocios. Sus imágenes reflejan profesionalismo y dedicación. Recomendaría sus servicios sin ninguna duda."',
            'name_es'           => "Alejandro Torres",
            'ocupacion_es'      => "Puesto, Compañía",
            'description_en'    => '"I am a business consultant, it is essential to transmit confidence and experience; The photographer captured the essence of my work as a business consultant. His images reflect professionalism and dedication. I would recommend his services without any hesitation."',
            'name_en'           => "Alejandro Torres",
            'ocupacion_en'      => "Position, Company",
            'order'             => 2,
        ]);

        CardTextAcercaDe::create([
            'description_es'    => '"Soy consultor de negocios, es esencial transmitir confianza, experiencia; El fotógrafo capturó la esencia de mi trabajo como consultor de negocios. Sus imágenes reflejan profesionalismo y dedicación. Recomendaría sus servicios sin ninguna duda."',
            'name_es'           => "Alejandro Torres",
            'ocupacion_es'      => "Puesto, Compañía",
            'description_en'    => '"I am a business consultant, it is essential to transmit confidence and experience; The photographer captured the essence of my work as a business consultant. His images reflect professionalism and dedication. I would recommend his services without any hesitation."',
            'name_en'           => "Alejandro Torres",
            'ocupacion_en'      => "Position, Company",
            'order'             => 3,
        ]);
    }
}
