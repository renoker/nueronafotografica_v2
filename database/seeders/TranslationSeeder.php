<?php

namespace Database\Seeders;

use App\Models\Translation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Contacto
        Translation::create([
            'key'           => "contactanos",
            'page'          => null,
            'section'       => 'Titulo',
            'translate_es'   => 'Contáctanos',
            'translate_en'   => 'Contact us',
        ]);

        Translation::create([
            'key'           => "contactanos",
            'page'          => null,
            'section'       => 'Input',
            'translate_es'   => 'Nombre',
            'translate_en'   => 'Name',
        ]);

        Translation::create([
            'key'           => "contactanos",
            'page'          => null,
            'section'       => 'Input',
            'translate_es'   => 'Correo',
            'translate_en'   => 'Email',
        ]);

        Translation::create([
            'key'           => "contactanos",
            'page'          => null,
            'section'       => 'Input',
            'translate_es'   => 'Teléfono',
            'translate_en'   => 'Phone',
        ]);

        Translation::create([
            'key'           => "contactanos",
            'page'          => null,
            'section'       => 'Button',
            'translate_es'   => 'Enviar',
            'translate_en'   => 'Send',
        ]);

        // Menu
        Translation::create([
            'key'           => "menu",
            'page'          => null,
            'section'       => null,
            'translate_es'   => 'videos',
            'translate_en'   => 'videos',
        ]);

        Translation::create([
            'key'           => "menu",
            'page'          => null,
            'section'       => null,
            'translate_es'   => 'galería',
            'translate_en'   => 'gallery',
        ]);

        Translation::create([
            'key'           => "menu",
            'page'          => null,
            'section'       => null,
            'translate_es'   => 'servicios',
            'translate_en'   => 'services',
        ]);

        Translation::create([
            'key'           => "menu",
            'page'          => null,
            'section'       => null,
            'translate_es'   => 'acerca de',
            'translate_en'   => 'about',
        ]);

        Translation::create([
            'key'           => "menu",
            'page'          => null,
            'section'       => null,
            'translate_es'   => 'contacto',
            'translate_en'   => 'contact',
        ]);

        Translation::create([
            'key'           => "menu",
            'page'          => null,
            'section'       => null,
            'translate_es'   => 'blog',
            'translate_en'   => 'blog',
        ]);

        // HOME
        Translation::create([
            'key'           => "home",
            'page'          => "Home",
            'section'       => "Banner",
            'translate_es'   => 'Nosotros',
            'translate_en'   => 'Us',
        ]);

        Translation::create([
            'key'           => "home",
            'page'          => "Home",
            'section'       => "Banner",
            'translate_es'   => 'Neurona Fotográfica',
            'translate_en'   => 'Neurona Fotográfica',
        ]);

        Translation::create([
            'key'           => "home",
            'page'          => "Home",
            'section'       => "Banner",
            'translate_es'   => 'Es una empresa enfocada en medios audiovisuales profesionales con más de 7 años de experiencia en el mercado Mexicano, Canadá y Estados Unidos. Impactamos a tus clientes con la innovación y calidad, a través de imágenes únicas que quedarán guardadas en su mente ayudándote a lograr tus objetivos personales, de negocio, Corporativos o Empresariales.',
            'translate_en'   => 'It is a company focused on professional audiovisual media with more than 7 years of experience in the Mexican market, Canada and the United States. We impact your clients with innovation and quality, through unique images that will remain stored in your mind helping you achieve your personal, business, corporate or Business.',
        ]);

        Translation::create([
            'key'           => "home",
            'page'          => "Home",
            'section'       => "Banner",
            'translate_es'   => 'Conocer más',
            'translate_en'   => 'Learn more',
        ]);

        Translation::create([
            'key'           => "home",
            'page'          => "Home",
            'section'       => "Tab",
            'translate_es'   => 'Arquitectura e Interiorismo',
            'translate_en'   => 'Architecture and Interior Design',
        ]);

        Translation::create([
            'key'           => "home",
            'page'          => "Home",
            'section'       => "Tab",
            'translate_es'   => 'Te ayudamos a destacar los mejores ángulos y diseño de interiores con las diferentes herramientas que te ofrecemos.',
            'translate_en'   => 'We help you highlight the best angles and interior design with the different tools we offer.',
        ]);

        Translation::create([
            'key'           => "home",
            'page'          => "Home",
            'section'       => "Tab",
            'translate_es'   => 'Recorrido virtual 360',
            'translate_en'   => '360 virtual tour',
        ]);

        Translation::create([
            'key'           => "home",
            'page'          => "Home",
            'section'       => "Tab",
            'translate_es'   => 'Desarrollamos el proyecto acorde a tus necesidades, para incrementar tus ventas.',
            'translate_en'   => 'We develop the project according to your needs, to increase your sales.',
        ]);

        Translation::create([
            'key'           => "home",
            'page'          => "Home",
            'section'       => "Tab",
            'translate_es'   => 'Fotográfia y video',
            'translate_en'   => 'Photography and video',
        ]);

        Translation::create([
            'key'           => "home",
            'page'          => "Home",
            'section'       => "Tab",
            'translate_es'   => 'Servicio orientado a proyectos habitacionales, lugares recreativos, hoteles, centros comerciales, que requieran mostrar sus espacios para promoción, venta o renta y hospedaje.',
            'translate_en'   => 'Service aimed at housing projects, recreational places, hotels, shopping centers, that require showing their spaces for promotion, sale or rental and lodging.',
        ]);

        Translation::create([
            'key'           => "home",
            'page'          => "Home",
            'section'       => "Tab",
            'translate_es'   => 'Vuelo drone en interior o exterior',
            'translate_en'   => 'Indoor or outdoor drone flight',
        ]);

        Translation::create([
            'key'           => "home",
            'page'          => "Home",
            'section'       => "Tab",
            'translate_es'   => 'Para los clientes las tomas captadas con drones les brindan imágenes más fidedignas de la propiedad',
            'translate_en'   => 'For clients, shots captured with drones provide more reliable images of the property',
        ]);

        Translation::create([
            'key'           => "home",
            'page'          => "Home",
            'section'       => "Banner",
            'translate_es'   => 'Nuestros colaboradores',
            'translate_en'   => 'Ours contributors',
        ]);

        Translation::create([
            'key'           => "home",
            'page'          => "Home",
            'section'       => "Banner",
            'translate_es'   => 'Impactamos a tus clientes con la innovación y calidad de Neurona Fotográfica, a través de imágenes únicas que quedaran grabadas en su mente y te ayudaran a lograr tus objetivos de negocio.',
            'translate_en'   => 'We impact your clients with the innovation and quality of Neurona Fotofotografia, through unique images that will remain engraved in their minds and will help you achieve your business objectives.',
        ]);
    }
}
