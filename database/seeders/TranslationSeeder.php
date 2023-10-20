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
            'section'       => 'Input',
            'translate_es'   => 'Mensaje',
            'translate_en'   => 'Message',
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

        // ARQUITECTURA
        Translation::create([
            'key'           => "arquitectura",
            'page'          => "Arquitectura",
            'section'       => "Banner",
            'translate_es'   => 'Nosotros',
            'translate_en'   => 'Us',
        ]);

        Translation::create([
            'key'           => "arquitectura",
            'page'          => "Arquitectura",
            'section'       => "Banner",
            'translate_es'   => 'Neurona Fotográfica',
            'translate_en'   => 'Neurona Fotográfica',
        ]);

        Translation::create([
            'key'           => "arquitectura",
            'page'          => "Arquitectura",
            'section'       => "Banner",
            'translate_es'   => 'Es una empresa enfocada en medios audiovisuales profesionales con más de 7 años de experiencia en el mercado Mexicano, Canadá y Estados Unidos. Impactamos a tus clientes con la innovación y calidad, a través de imágenes únicas que quedarán guardadas en su mente ayudándote a lograr tus objetivos personales, de negocio, Corporativos o Empresariales.',
            'translate_en'   => 'It is a company focused on professional audiovisual media with more than 7 years of experience in the Mexican market, Canada and the United States. We impact your clients with innovation and quality, through unique images that will remain stored in your mind helping you achieve your personal, business, corporate or Business.',
        ]);

        Translation::create([
            'key'           => "arquitectura",
            'page'          => "Arquitectura",
            'section'       => "Banner",
            'translate_es'   => 'Conocer más',
            'translate_en'   => 'Learn more',
        ]);

        Translation::create([
            'key'           => "arquitectura",
            'page'          => "Arquitectura",
            'section'       => "Tab",
            'translate_es'   => 'Arquitectura e Interiorismo',
            'translate_en'   => 'Architecture and Interior Design',
        ]);

        Translation::create([
            'key'           => "arquitectura",
            'page'          => "Arquitectura",
            'section'       => "Tab",
            'translate_es'   => 'Te ayudamos a destacar los mejores ángulos y diseño de interiores con las diferentes herramientas que te ofrecemos.',
            'translate_en'   => 'We help you highlight the best angles and interior design with the different tools we offer.',
        ]);

        Translation::create([
            'key'           => "arquitectura",
            'page'          => "Arquitectura",
            'section'       => "Tab",
            'translate_es'   => 'Recorrido virtual 360',
            'translate_en'   => '360 virtual tour',
        ]);

        Translation::create([
            'key'           => "arquitectura",
            'page'          => "Arquitectura",
            'section'       => "Tab",
            'translate_es'   => 'Desarrollamos el proyecto acorde a tus necesidades, para incrementar tus ventas.',
            'translate_en'   => 'We develop the project according to your needs, to increase your sales.',
        ]);

        Translation::create([
            'key'           => "arquitectura",
            'page'          => "Arquitectura",
            'section'       => "Tab",
            'translate_es'   => 'Vuelo drone en interior o exterior',
            'translate_en'   => 'Indoor or outdoor drone flight',
        ]);

        Translation::create([
            'key'           => "arquitectura",
            'page'          => "Arquitectura",
            'section'       => "Tab",
            'translate_es'   => 'Para los clientes las tomas captadas con drones les brindan imágenes  más fidedignas de la propiedad',
            'translate_en'   => 'For clients, shots captured with drones provide more reliable images of the property',
        ]);

        Translation::create([
            'key'           => "arquitectura",
            'page'          => "Arquitectura",
            'section'       => "Tab",
            'translate_es'   => 'Fotográfia y video',
            'translate_en'   => 'Photography and video',
        ]);

        Translation::create([
            'key'           => "arquitectura",
            'page'          => "Arquitectura",
            'section'       => "Tab",
            'translate_es'   => 'Servicio orientado a proyectos habitacionales, lugares recreativos, hoteles, centros comerciales, que requieran mostrar sus espacios para promoción, venta o renta y hospedaje.',
            'translate_en'   => 'Service aimed at housing projects, recreational places, hotels, shopping centers, that require showing their spaces for promotion, sale or rental and lodging.',
        ]);

        Translation::create([
            'key'           => "arquitectura",
            'page'          => "Arquitectura",
            'section'       => "Preguntas",
            'translate_es'   => '1. ¿Qué proyectos abarcamos dentro de Fotografía de Arquitectura?',
            'translate_en'   => '1. What projects do we cover within Architectural Photography?',
        ]);

        Translation::create([
            'key'           => "arquitectura",
            'page'          => "Arquitectura",
            'section'       => "Preguntas",
            'translate_es'   => 'Fotografía y video orientado a proyectos habitacionales, lugares recreativos, hoteles, centros comerciales, que requieran mostrar sus espacios para promoción, venta o renta y hospedaje.',
            'translate_en'   => 'Photography and video aimed at housing projects, recreational places, hotels, shopping centers, that require showing their spaces to promotion, sale or rental and lodging.',
        ]);

        Translation::create([
            'key'           => "arquitectura",
            'page'          => "Arquitectura",
            'section'       => "Preguntas",
            'translate_es'   => '2. ¿Qué servicios visuales manejamos?',
            'translate_en'   => '2. What visual services do we handle?',
        ]);

        Translation::create([
            'key'           => "arquitectura",
            'page'          => "Arquitectura",
            'section'       => "Preguntas",
            'translate_es'   => 'Fotografía y video con diferentes tecnologías como cámara convencional, drone, drone FPV, cámara 360 o nuestra cámara propia NeuroCam.',
            'translate_en'   => 'Photography and video with different technologies such as conventional camera, drone, drone FPV, 360 camera or our own NeuroCam camera.',
        ]);

        Translation::create([
            'key'           => "arquitectura",
            'page'          => "Arquitectura",
            'section'       => "Preguntas",
            'translate_es'   => '3. ¿Cómo hago una cotización?',
            'translate_en'   => '3. How do I make a quote?',
        ]);

        Translation::create([
            'key'           => "arquitectura",
            'page'          => "Arquitectura",
            'section'       => "Preguntas",
            'translate_es'   => 'Envíanos tus datos y una breve descripción del proyecto que tienes y te asesoramos con el proceso a seguir',
            'translate_en'   => 'Send us your information and a brief description of the project you have and we will advise you with the process to follow',
        ]);

        Translation::create([
            'key'           => "arquitectura",
            'page'          => "Arquitectura",
            'section'       => "Preguntas",
            'translate_es'   => '4. ¿Qué formas de pago aceptamos?',
            'translate_en'   => '4. What payment methods do we accept?',
        ]);

        Translation::create([
            'key'           => "arquitectura",
            'page'          => "Arquitectura",
            'section'       => "Preguntas",
            'translate_es'   => 'Aceptamos Transferencias bancarias, Tarjetas de Crédito y Débito, efectivo.',
            'translate_en'   => 'We accept bank transfers, credit and debit cards, cash.',
        ]);

        Translation::create([
            'key'           => "arquitectura",
            'page'          => "Arquitectura",
            'section'       => "Preguntas",
            'translate_es'   => '5. ¿Cuáles son nuestros tiempos de respuesta?',
            'translate_en'   => '5. What are our response times?',
        ]);

        Translation::create([
            'key'           => "arquitectura",
            'page'          => "Arquitectura",
            'section'       => "Preguntas",
            'translate_es'   => 'Estará en función de tu proyecto considerando pre-producción, producción y post-producción. Será un “traje a la medida” para tí o tu empresa.',
            'translate_en'   => 'It will depend on your project considering pre-production, production and post-production. It will be a “tailored suit” for you or your company.',
        ]);
        // CONSTRACCIÓN
        Translation::create([
            'key'           => "construccion",
            'page'          => "Construccion",
            'section'       => "Banner",
            'translate_es'   => 'Nosotros',
            'translate_en'   => 'Us',
        ]);

        Translation::create([
            'key'           => "construccion",
            'page'          => "Construccion",
            'section'       => "Banner",
            'translate_es'   => 'Neurona Fotográfica',
            'translate_en'   => 'Neurona Fotográfica',
        ]);

        Translation::create([
            'key'           => "construccion",
            'page'          => "Construccion",
            'section'       => "Banner",
            'translate_es'   => 'Es una empresa enfocada en medios audiovisuales profesionales con más de 7 años de experiencia en el mercado Mexicano, Canadá y Estados Unidos. Impactamos a tus clientes con la innovación y calidad, a través de imágenes únicas que quedarán guardadas en su mente ayudándote a lograr tus objetivos personales, de negocio, Corporativos o Empresariales.',
            'translate_en'   => 'It is a company focused on professional audiovisual media with more than 7 years of experience in the Mexican market, Canada and the United States. We impact your clients with innovation and quality, through unique images that will remain stored in your mind helping you achieve your personal, business, corporate or Business.',
        ]);

        Translation::create([
            'key'           => "construccion",
            'page'          => "Construccion",
            'section'       => "Banner",
            'translate_es'   => 'Conocer más',
            'translate_en'   => 'Learn more',
        ]);

        Translation::create([
            'key'           => "construccion",
            'page'          => "Construccion",
            'section'       => "Tab",
            'translate_es'   => 'Fotográfia y video',
            'translate_en'   => 'Photography and video',
        ]);

        Translation::create([
            'key'           => "construccion",
            'page'          => "Construccion",
            'section'       => "Tab",
            'translate_es'   => 'Servicio orientado a proyectos habitacionales, lugares recreativos, hoteles, centros comerciales, que requieran mostrar sus espacios para promoción, venta o renta y hospedaje.',
            'translate_en'   => 'Service aimed at housing projects, recreational places, hotels, shopping centers, that require showing their spaces for promotion, sale or rental and lodging.',
        ]);

        Translation::create([
            'key'           => "construccion",
            'page'          => "Construccion",
            'section'       => "Tab",
            'translate_es'   => 'Nuestra herramientas',
            'translate_en'   => 'Our tools',
        ]);

        Translation::create([
            'key'           => "construccion",
            'page'          => "Construccion",
            'section'       => "Tab",
            'translate_es'   => 'Contamos con la última tecnologÍa para la realización, edición y postproducción de vídeos de construcción. Disponemos de cámaras fijas y móviles, HD, 4 K y drones para realizar proyectos de todos los niveles.',
            'translate_en'   => 'We have the latest technology for making, editing and post-production of construction videos. We have fixed and mobile cameras, HD, 4 K and drones to carry out projects of all levels.',
        ]);

        Translation::create([
            'key'           => "construccion",
            'page'          => "Construccion",
            'section'       => "Tab",
            'translate_es'   => 'Neuro-Cam',
            'translate_en'   => 'Neuro-Cam',
        ]);

        Translation::create([
            'key'           => "construccion",
            'page'          => "Construccion",
            'section'       => "Tab",
            'translate_es'   => 'Contamos con la última tecnologÍa para la realización, edición y postproducción de vídeos de construcción. Disponemos de cámaras fijas y móviles, HD, 4 K y drones para realizar proyectos de todos los niveles.',
            'translate_en'   => 'We have the latest technology for making, editing and post-production of construction videos. We have fixed and mobile cameras, HD, 4 K and drones to carry out projects of all levels.',
        ]);

        Translation::create([
            'key'           => "construccion",
            'page'          => "Construccion",
            'section'       => "Tab",
            'translate_es'   => 'Time Lapse',
            'translate_en'   => 'Time Lapse',
        ]);

        Translation::create([
            'key'           => "construccion",
            'page'          => "Construccion",
            'section'       => "Tab",
            'translate_es'   => 'Contamos con la última tecnologÍa para la realización, edición y postproducción de vídeos de construcción. Disponemos de cámaras fijas y móviles, HD, 4 K y drones para realizar proyectos de todos los niveles.',
            'translate_en'   => 'We have the latest technology for making, editing and post-production of construction videos. We have fixed and mobile cameras, HD, 4 K and drones to carry out projects of all levels.',
        ]);

        Translation::create([
            'key'           => "construccion",
            'page'          => "Construccion",
            'section'       => "Preguntas",
            'translate_es'   => '1. ¿Qué proyectos abarcamos dentro de Fotografía de Arquitectura?',
            'translate_en'   => '1. What projects do we cover within Architectural Photography?',
        ]);

        Translation::create([
            'key'           => "construccion",
            'page'          => "Construccion",
            'section'       => "Preguntas",
            'translate_es'   => 'Fotografía y video orientado a proyectos habitacionales, lugares recreativos, hoteles, centros comerciales, que requieran mostrar sus espacios para promoción, venta o renta y hospedaje.',
            'translate_en'   => 'Photography and video aimed at housing projects, recreational places, hotels, shopping centers, that require showing their spaces to promotion, sale or rental and lodging.',
        ]);

        Translation::create([
            'key'           => "construccion",
            'page'          => "Construccion",
            'section'       => "Preguntas",
            'translate_es'   => '2. ¿Qué servicios visuales manejamos?',
            'translate_en'   => '2. What visual services do we handle?',
        ]);

        Translation::create([
            'key'           => "construccion",
            'page'          => "Construccion",
            'section'       => "Preguntas",
            'translate_es'   => 'Fotografía y video con diferentes tecnologías como cámara convencional, drone, drone FPV, cámara 360 o nuestra cámara propia NeuroCam.',
            'translate_en'   => 'Photography and video with different technologies such as conventional camera, drone, drone FPV, 360 camera or our own NeuroCam camera.',
        ]);

        Translation::create([
            'key'           => "construccion",
            'page'          => "Construccion",
            'section'       => "Preguntas",
            'translate_es'   => '3. ¿Cómo hago una cotización?',
            'translate_en'   => '3. How do I make a quote?',
        ]);

        Translation::create([
            'key'           => "construccion",
            'page'          => "Construccion",
            'section'       => "Preguntas",
            'translate_es'   => 'Envíanos tus datos y una breve descripción del proyecto que tienes y te asesoramos con el proceso a seguir',
            'translate_en'   => 'Send us your information and a brief description of the project you have and we will advise you with the process to follow',
        ]);

        Translation::create([
            'key'           => "construccion",
            'page'          => "Construccion",
            'section'       => "Preguntas",
            'translate_es'   => '4. ¿Qué formas de pago aceptamos?',
            'translate_en'   => '4. What payment methods do we accept?',
        ]);

        Translation::create([
            'key'           => "construccion",
            'page'          => "Construccion",
            'section'       => "Preguntas",
            'translate_es'   => 'Aceptamos Transferencias bancarias, Tarjetas de Crédito y Débito, efectivo.',
            'translate_en'   => 'We accept bank transfers, credit and debit cards, cash.',
        ]);

        Translation::create([
            'key'           => "construccion",
            'page'          => "Construccion",
            'section'       => "Preguntas",
            'translate_es'   => '5. ¿Cuáles son nuestros tiempos de respuesta?',
            'translate_en'   => '5. What are our response times?',
        ]);

        Translation::create([
            'key'           => "construccion",
            'page'          => "Construccion",
            'section'       => "Preguntas",
            'translate_es'   => 'Estará en función de tu proyecto considerando pre-producción, producción y post-producción. Será un “traje a la medida” para tí o tu empresa.',
            'translate_en'   => 'It will depend on your project considering pre-production, production and post-production. It will be a “tailored suit” for you or your company.',
        ]);
        // CORPORATIVA
        Translation::create([
            'key'           => "corporativa",
            'page'          => "Corporativa",
            'section'       => "Banner",
            'translate_es'   => 'Nosotros',
            'translate_en'   => 'Us',
        ]);

        Translation::create([
            'key'           => "corporativa",
            'page'          => "Corporativa",
            'section'       => "Banner",
            'translate_es'   => 'Neurona Fotográfica',
            'translate_en'   => 'Neurona Fotográfica',
        ]);

        Translation::create([
            'key'           => "corporativa",
            'page'          => "Corporativa",
            'section'       => "Banner",
            'translate_es'   => 'Es una empresa enfocada en medios audiovisuales profesionales con más de 7 años de experiencia en el mercado Mexicano, Canadá y Estados Unidos. Impactamos a tus clientes con la innovación y calidad, a través de imágenes únicas que quedarán guardadas en su mente ayudándote a lograr tus objetivos personales, de negocio, Corporativos o Empresariales.',
            'translate_en'   => 'It is a company focused on professional audiovisual media with more than 7 years of experience in the Mexican market, Canada and the United States. We impact your clients with innovation and quality, through unique images that will remain stored in your mind helping you achieve your personal, business, corporate or Business.',
        ]);

        Translation::create([
            'key'           => "corporativa",
            'page'          => "Corporativa",
            'section'       => "Banner",
            'translate_es'   => 'Conocer más',
            'translate_en'   => 'Learn more',
        ]);

        Translation::create([
            'key'           => "corporativa",
            'page'          => "Corporativa",
            'section'       => "Tab",
            'translate_es'   => 'Imagen corporativa',
            'translate_en'   => 'Corporate image',
        ]);

        Translation::create([
            'key'           => "corporativa",
            'page'          => "Corporativa",
            'section'       => "Tab",
            'translate_es'   => 'Servicio orientado a proyectos habitacionales, lugares recreativos, hoteles, centros comerciales, que requieran mostrar sus espacios para promoción, venta o renta y hospedaje.',
            'translate_en'   => 'Service aimed at housing projects, recreational places, hotels, shopping centers, that require showing their spaces for promotion, sale or rental and lodging.',
        ]);

        Translation::create([
            'key'           => "corporativa",
            'page'          => "Corporativa",
            'section'       => "Tab",
            'translate_es'   => 'Eventos Corporativos',
            'translate_en'   => 'Corporate events',
        ]);

        Translation::create([
            'key'           => "corporativa",
            'page'          => "Corporativa",
            'section'       => "Tab",
            'translate_es'   => 'Contamos con la última tecnologÍa para la realización, edición y postproducción de vídeos de construcción. Disponemos de cámaras fijas y móviles, HD, 4 K y drones para realizar proyectos de todos los niveles.',
            'translate_en'   => 'We have the latest technology for making, editing and post-production of construction videos. We have fixed and mobile cameras, HD, 4 K and drones to carry out projects of all levels.',
        ]);

        Translation::create([
            'key'           => "corporativa",
            'page'          => "Corporativa",
            'section'       => "Tab",
            'translate_es'   => 'Convenciones',
            'translate_en'   => 'Conventions',
        ]);

        Translation::create([
            'key'           => "corporativa",
            'page'          => "Corporativa",
            'section'       => "Tab",
            'translate_es'   => 'Contamos con la última tecnologÍa para la realización, edición y postproducción de vídeos de construcción. Disponemos de cámaras fijas y móviles, HD, 4 K y drones para realizar proyectos de todos los niveles.',
            'translate_en'   => 'We have the latest technology for making, editing and post-production of construction videos. We have fixed and mobile cameras, HD, 4 K and drones to carry out projects of all levels.',
        ]);

        Translation::create([
            'key'           => "corporativa",
            'page'          => "Corporativa",
            'section'       => "Tab",
            'translate_es'   => 'Retrato Corporativo',
            'translate_en'   => 'Corporate Portrait',
        ]);

        Translation::create([
            'key'           => "corporativa",
            'page'          => "Corporativa",
            'section'       => "Tab",
            'translate_es'   => 'Contamos con la última tecnologÍa para la realización, edición y postproducción de vídeos de construcción. Disponemos de cámaras fijas y móviles, HD, 4 K y drones para realizar proyectos de todos los niveles.',
            'translate_en'   => 'We have the latest technology for making, editing and post-production of construction videos. We have fixed and mobile cameras, HD, 4 K and drones to carry out projects of all levels.',
        ]);

        Translation::create([
            'key'           => "corporativa",
            'page'          => "Corporativa",
            'section'       => "Preguntas",
            'translate_es'   => '1. ¿Qué proyectos abarcamos dentro de Fotografía de Arquitectura?',
            'translate_en'   => '1. What projects do we cover within Architectural Photography?',
        ]);

        Translation::create([
            'key'           => "corporativa",
            'page'          => "Corporativa",
            'section'       => "Preguntas",
            'translate_es'   => 'Fotografía y video orientado a proyectos habitacionales, lugares recreativos, hoteles, centros comerciales, que requieran mostrar sus espacios para promoción, venta o renta y hospedaje.',
            'translate_en'   => 'Photography and video aimed at housing projects, recreational places, hotels, shopping centers, that require showing their spaces to promotion, sale or rental and lodging.',
        ]);

        Translation::create([
            'key'           => "corporativa",
            'page'          => "Corporativa",
            'section'       => "Preguntas",
            'translate_es'   => '2. ¿Qué servicios visuales manejamos?',
            'translate_en'   => '2. What visual services do we handle?',
        ]);

        Translation::create([
            'key'           => "corporativa",
            'page'          => "Corporativa",
            'section'       => "Preguntas",
            'translate_es'   => 'Fotografía y video con diferentes tecnologías como cámara convencional, drone, drone FPV, cámara 360 o nuestra cámara propia NeuroCam.',
            'translate_en'   => 'Photography and video with different technologies such as conventional camera, drone, drone FPV, 360 camera or our own NeuroCam camera.',
        ]);

        Translation::create([
            'key'           => "corporativa",
            'page'          => "Corporativa",
            'section'       => "Preguntas",
            'translate_es'   => '3. ¿Cómo hago una cotización?',
            'translate_en'   => '3. How do I make a quote?',
        ]);

        Translation::create([
            'key'           => "corporativa",
            'page'          => "Corporativa",
            'section'       => "Preguntas",
            'translate_es'   => 'Envíanos tus datos y una breve descripción del proyecto que tienes y te asesoramos con el proceso a seguir',
            'translate_en'   => 'Send us your information and a brief description of the project you have and we will advise you with the process to follow',
        ]);

        Translation::create([
            'key'           => "corporativa",
            'page'          => "Corporativa",
            'section'       => "Preguntas",
            'translate_es'   => '4. ¿Qué formas de pago aceptamos?',
            'translate_en'   => '4. What payment methods do we accept?',
        ]);

        Translation::create([
            'key'           => "corporativa",
            'page'          => "Corporativa",
            'section'       => "Preguntas",
            'translate_es'   => 'Aceptamos Transferencias bancarias, Tarjetas de Crédito y Débito, efectivo.',
            'translate_en'   => 'We accept bank transfers, credit and debit cards, cash.',
        ]);

        Translation::create([
            'key'           => "corporativa",
            'page'          => "Corporativa",
            'section'       => "Preguntas",
            'translate_es'   => '5. ¿Cuáles son nuestros tiempos de respuesta?',
            'translate_en'   => '5. What are our response times?',
        ]);

        Translation::create([
            'key'           => "corporativa",
            'page'          => "Corporativa",
            'section'       => "Preguntas",
            'translate_es'   => 'Estará en función de tu proyecto considerando pre-producción, producción y post-producción. Será un “traje a la medida” para tí o tu empresa.',
            'translate_en'   => 'It will depend on your project considering pre-production, production and post-production. It will be a “tailored suit” for you or your company.',
        ]);
        // PUBLICITARIA
        Translation::create([
            'key'           => "publicitaria",
            'page'          => "Publicitaria",
            'section'       => "Banner",
            'translate_es'   => 'Nosotros',
            'translate_en'   => 'Us',
        ]);

        Translation::create([
            'key'           => "publicitaria",
            'page'          => "Publicitaria",
            'section'       => "Banner",
            'translate_es'   => 'Neurona Fotográfica',
            'translate_en'   => 'Neurona Fotográfica',
        ]);

        Translation::create([
            'key'           => "publicitaria",
            'page'          => "Publicitaria",
            'section'       => "Banner",
            'translate_es'   => 'Es una empresa enfocada en medios audiovisuales profesionales con más de 7 años de experiencia en el mercado Mexicano, Canadá y Estados Unidos. Impactamos a tus clientes con la innovación y calidad, a través de imágenes únicas que quedarán guardadas en su mente ayudándote a lograr tus objetivos personales, de negocio, Corporativos o Empresariales.',
            'translate_en'   => 'It is a company focused on professional audiovisual media with more than 7 years of experience in the Mexican market, Canada and the United States. We impact your clients with innovation and quality, through unique images that will remain stored in your mind helping you achieve your personal, business, corporate or Business.',
        ]);

        Translation::create([
            'key'           => "publicitaria",
            'page'          => "Publicitaria",
            'section'       => "Banner",
            'translate_es'   => 'Conocer más',
            'translate_en'   => 'Learn more',
        ]);

        Translation::create([
            'key'           => "publicitaria",
            'page'          => "Publicitaria",
            'section'       => "Tab",
            'translate_es'   => 'Imagen corporativa',
            'translate_en'   => 'Corporate image',
        ]);

        Translation::create([
            'key'           => "publicitaria",
            'page'          => "Publicitaria",
            'section'       => "Tab",
            'translate_es'   => 'Servicio orientado a proyectos habitacionales, lugares recreativos, hoteles, centros comerciales, que requieran mostrar sus espacios para promoción, venta o renta y hospedaje.',
            'translate_en'   => 'Service aimed at housing projects, recreational places, hotels, shopping centers, that require showing their spaces for promotion, sale or rental and lodging.',
        ]);

        Translation::create([
            'key'           => "publicitaria",
            'page'          => "Publicitaria",
            'section'       => "Tab",
            'translate_es'   => 'Eventos Corporativos',
            'translate_en'   => 'Corporate events',
        ]);

        Translation::create([
            'key'           => "publicitaria",
            'page'          => "Publicitaria",
            'section'       => "Tab",
            'translate_es'   => 'Contamos con la última tecnologÍa para la realización, edición y postproducción de vídeos de construcción. Disponemos de cámaras fijas y móviles, HD, 4 K y drones para realizar proyectos de todos los niveles.',
            'translate_en'   => 'We have the latest technology for making, editing and post-production of construction videos. We have fixed and mobile cameras, HD, 4 K and drones to carry out projects of all levels.',
        ]);

        Translation::create([
            'key'           => "publicitaria",
            'page'          => "Publicitaria",
            'section'       => "Tab",
            'translate_es'   => 'Convenciones',
            'translate_en'   => 'Conventions',
        ]);

        Translation::create([
            'key'           => "publicitaria",
            'page'          => "Publicitaria",
            'section'       => "Tab",
            'translate_es'   => 'Contamos con la última tecnologÍa para la realización, edición y postproducción de vídeos de construcción. Disponemos de cámaras fijas y móviles, HD, 4 K y drones para realizar proyectos de todos los niveles.',
            'translate_en'   => 'We have the latest technology for making, editing and post-production of construction videos. We have fixed and mobile cameras, HD, 4 K and drones to carry out projects of all levels.',
        ]);

        Translation::create([
            'key'           => "publicitaria",
            'page'          => "Publicitaria",
            'section'       => "Tab",
            'translate_es'   => 'Retrato Corporativo',
            'translate_en'   => 'Corporate Portrait',
        ]);

        Translation::create([
            'key'           => "publicitaria",
            'page'          => "Publicitaria",
            'section'       => "Tab",
            'translate_es'   => 'Contamos con la última tecnologÍa para la realización, edición y postproducción de vídeos de construcción. Disponemos de cámaras fijas y móviles, HD, 4 K y drones para realizar proyectos de todos los niveles.',
            'translate_en'   => 'We have the latest technology for making, editing and post-production of construction videos. We have fixed and mobile cameras, HD, 4 K and drones to carry out projects of all levels.',
        ]);

        Translation::create([
            'key'           => "publicitaria",
            'page'          => "Publicitaria",
            'section'       => "Preguntas",
            'translate_es'   => '1. ¿Qué proyectos abarcamos dentro de Fotografía de Arquitectura?',
            'translate_en'   => '1. What projects do we cover within Architectural Photography?',
        ]);

        Translation::create([
            'key'           => "publicitaria",
            'page'          => "Publicitaria",
            'section'       => "Preguntas",
            'translate_es'   => 'Fotografía y video orientado a proyectos habitacionales, lugares recreativos, hoteles, centros comerciales, que requieran mostrar sus espacios para promoción, venta o renta y hospedaje.',
            'translate_en'   => 'Photography and video aimed at housing projects, recreational places, hotels, shopping centers, that require showing their spaces to promotion, sale or rental and lodging.',
        ]);

        Translation::create([
            'key'           => "publicitaria",
            'page'          => "Publicitaria",
            'section'       => "Preguntas",
            'translate_es'   => '2. ¿Qué servicios visuales manejamos?',
            'translate_en'   => '2. What visual services do we handle?',
        ]);

        Translation::create([
            'key'           => "publicitaria",
            'page'          => "Publicitaria",
            'section'       => "Preguntas",
            'translate_es'   => 'Fotografía y video con diferentes tecnologías como cámara convencional, drone, drone FPV, cámara 360 o nuestra cámara propia NeuroCam.',
            'translate_en'   => 'Photography and video with different technologies such as conventional camera, drone, drone FPV, 360 camera or our own NeuroCam camera.',
        ]);

        Translation::create([
            'key'           => "publicitaria",
            'page'          => "Publicitaria",
            'section'       => "Preguntas",
            'translate_es'   => '3. ¿Cómo hago una cotización?',
            'translate_en'   => '3. How do I make a quote?',
        ]);

        Translation::create([
            'key'           => "publicitaria",
            'page'          => "Publicitaria",
            'section'       => "Preguntas",
            'translate_es'   => 'Envíanos tus datos y una breve descripción del proyecto que tienes y te asesoramos con el proceso a seguir',
            'translate_en'   => 'Send us your information and a brief description of the project you have and we will advise you with the process to follow',
        ]);

        Translation::create([
            'key'           => "publicitaria",
            'page'          => "Publicitaria",
            'section'       => "Preguntas",
            'translate_es'   => '4. ¿Qué formas de pago aceptamos?',
            'translate_en'   => '4. What payment methods do we accept?',
        ]);

        Translation::create([
            'key'           => "publicitaria",
            'page'          => "Publicitaria",
            'section'       => "Preguntas",
            'translate_es'   => 'Aceptamos Transferencias bancarias, Tarjetas de Crédito y Débito, efectivo.',
            'translate_en'   => 'We accept bank transfers, credit and debit cards, cash.',
        ]);

        Translation::create([
            'key'           => "publicitaria",
            'page'          => "Publicitaria",
            'section'       => "Preguntas",
            'translate_es'   => '5. ¿Cuáles son nuestros tiempos de respuesta?',
            'translate_en'   => '5. What are our response times?',
        ]);

        Translation::create([
            'key'           => "publicitaria",
            'page'          => "Publicitaria",
            'section'       => "Preguntas",
            'translate_es'   => 'Estará en función de tu proyecto considerando pre-producción, producción y post-producción. Será un “traje a la medida” para tí o tu empresa.',
            'translate_en'   => 'It will depend on your project considering pre-production, production and post-production. It will be a “tailored suit” for you or your company.',
        ]);
        // ------------------------------------------------------------------------------------------ CONTACTO ------------------------------------------------------------------------------------------ 
        Translation::create([
            'key'           => "contacto",
            'page'          => "Contacto",
            'section'       => "Banner",
            'translate_es'   => 'Nosotros',
            'translate_en'   => 'Us',
        ]);

        Translation::create([
            'key'           => "contacto",
            'page'          => "Contacto",
            'section'       => "Banner",
            'translate_es'   => 'Neurona Fotográfica',
            'translate_en'   => 'Neurona Fotográfica',
        ]);

        Translation::create([
            'key'           => "contacto",
            'page'          => "Contacto",
            'section'       => "Banner",
            'translate_es'   => 'Es una empresa enfocada en medios audiovisuales profesionales con más de 7 años de experiencia en el mercado Mexicano, Canadá y Estados Unidos. Impactamos a tus clientes con la innovación y calidad, a través de imágenes únicas que quedarán guardadas en su mente ayudándote a lograr tus objetivos personales, de negocio, Corporativos o Empresariales.',
            'translate_en'   => 'It is a company focused on professional audiovisual media with more than 7 years of experience in the Mexican market, Canada and the United States. We impact your clients with innovation and quality, through unique images that will remain stored in your mind helping you achieve your personal, business, corporate or Business.',
        ]);

        Translation::create([
            'key'           => "contacto",
            'page'          => "Contacto",
            'section'       => "Banner",
            'translate_es'   => 'Conocer más',
            'translate_en'   => 'Learn more',
        ]);

        Translation::create([
            'key'           => "contacto",
            'page'          => "Contacto",
            'section'       => "Tab",
            'translate_es'   => 'Misión',
            'translate_en'   => 'Mission',
        ]);

        Translation::create([
            'key'           => "contacto",
            'page'          => "Contacto",
            'section'       => "Tab",
            'translate_es'   => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.',
            'translate_en'   => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.',
        ]);

        Translation::create([
            'key'           => "contacto",
            'page'          => "Contacto",
            'section'       => "Tab",
            'translate_es'   => 'Valores',
            'translate_en'   => 'Values',
        ]);

        Translation::create([
            'key'           => "contacto",
            'page'          => "Contacto",
            'section'       => "Tab",
            'translate_es'   => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.',
            'translate_en'   => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.',
        ]);

        Translation::create([
            'key'           => "contacto",
            'page'          => "Contacto",
            'section'       => "Tab",
            'translate_es'   => 'Visión',
            'translate_en'   => 'Vision',
        ]);

        Translation::create([
            'key'           => "contacto",
            'page'          => "Contacto",
            'section'       => "Tab",
            'translate_es'   => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.',
            'translate_en'   => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.',
        ]);

        Translation::create([
            'key'           => "contacto",
            'page'          => "Contacto",
            'section'       => "Tab",
            'translate_es'   => '¿Qué significa nuestro nombre Neurona Fotográfica?',
            'translate_en'   => 'What does our name Photographic Neuron mean?',
        ]);

        Translation::create([
            'key'           => "contacto",
            'page'          => "Contacto",
            'section'       => "Tab",
            'translate_es'   => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.',
            'translate_en'   => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.',
        ]);
        // ------------------------------------------------------------------------------------------ BLOG ------------------------------------------------------------------------------------------ 
        Translation::create([
            'key'           => "blog",
            'page'          => "Blog",
            'section'       => "Banner",
            'translate_es'   => 'Nosotros',
            'translate_en'   => 'Us',
        ]);

        Translation::create([
            'key'           => "blog",
            'page'          => "Blog",
            'section'       => "Banner",
            'translate_es'   => 'Neurona Fotográfica',
            'translate_en'   => 'Neurona Fotográfica',
        ]);

        Translation::create([
            'key'           => "blog",
            'page'          => "Blog",
            'section'       => "Banner",
            'translate_es'   => 'Es una empresa enfocada en medios audiovisuales profesionales con más de 7 años de experiencia en el mercado Mexicano, Canadá y Estados Unidos. Impactamos a tus clientes con la innovación y calidad, a través de imágenes únicas que quedarán guardadas en su mente ayudándote a lograr tus objetivos personales, de negocio, Corporativos o Empresariales.',
            'translate_en'   => 'It is a company focused on professional audiovisual media with more than 7 years of experience in the Mexican market, Canada and the United States. We impact your clients with innovation and quality, through unique images that will remain stored in your mind helping you achieve your personal, business, corporate or Business.',
        ]);

        Translation::create([
            'key'           => "blog",
            'page'          => "Blog",
            'section'       => "Banner",
            'translate_es'   => 'Conocer más',
            'translate_en'   => 'Learn more',
        ]);
    }
}
