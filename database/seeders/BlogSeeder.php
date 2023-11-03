<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'category_id'          => 1,
            'miniatura'             => "assets/blog/blog_1.png",
            'image'                 => "assets/blog/blog_big.png",
            'es_title'              => "Explora el fascinante mundo de la fotografía: Inspiración y consejos para llevar tu pasión al siguiente nivel",
            'es_description_small'  => 'La fotografía es un lenguaje universal que nos permite contar historias, capturar emociones y congelar momentos en el tiempo. En nuestro blog, te sumergirás en un mundo de inspiración fotográfica. Exploraremos técnicas...',
            'es_description'        => 'Todos queremos mejorar en lo que hacemos, y más cuando se trata de algo que nos apasiona; en este caso, la fotografía. Es por eso que te presentamos una serie de consejos que te servirán para llevar tu pasión al siguiente nivel. Queremos que todos nuestros usuarios tengan el potencial de convertirse en la mejor versión de sí mismos dentro del mundo de la fotografía. </br></br> Primero lo primero: siempre lleva la cámara contigo. Las mejores fotos se buscan, pero también suceden cuando no lo esperamos. Como dicen por ahí, que la inspiración te agarre trabajando.Piensa en lo que quieres decir y pregúntate por qué: ¿por qué esa foto? ¿Por qué esa foto? ¿Por qué ese momento? ¿Por qué esa iluminación o por qué ese sujeto? Todas esas preguntas son indispensables para saber qué es lo que quieres capturar y qué quieres generar en los espectadores.',
            'es_button'             => 'Conocer más',
            'en_title'              => "Explore the fascinating world of photography: Inspiration and tips to take your passion to the next level",
            'en_description_small'  => 'Photography is a universal language that allows us to tell stories, capture emotions and freeze moments in time. On our blog, you will immerse yourself in a world of photographic inspiration. We will explore techniques...',
            'en_description'        => "We all want to improve in what we do, and even more so when it is something we are passionate about; in this case, photography. That is why we present a series of tips that will help you take your passion to the next level. We want all our users to have the potential to become the best version of themselves in the world of photography. </br></br> First things first: always carry your camera with you. The best photos are sought after, but they also happen when we don't expect it. As they say, let inspiration catch you working. Think about what you want to say and ask yourself why: why that photo? Why that photo? Why that moment? Why that lighting or why that subject? All these questions are essential to know what you want to capture and what you want to generate in viewers.",
            'en_button'             => 'Learn more',
        ]);
    }
}
