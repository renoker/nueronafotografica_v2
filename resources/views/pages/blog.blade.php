@extends('layouts.main')
@section('title', 'Neuronafotografica - Blog')
@section('content')
    <div class="contente_dad">
        {{-- Bloque 1 --}}
        <div class="content_slider_nosotros">
            <div class="content_nosotros">
                <div class="box">
                    <h6 class="h6">Nosotros</h6>
                    <div class="txt_wp">
                        <h1 class="h1">Neurona Fotográfica</h1>
                        <img src="{{ url('assets/icons/Mosca.svg') }}" alt="">
                    </div>
                    <p class="descripcion">
                        Es una empresa enfocada en medios audiovisuales profesionales con más de 7 años de experiencia en el
                        mercado Mexicano, Canadá y Estados Unidos.
                        <br><br>
                        Impactamos a tus clientes con la innovación y calidad, a través de imágenes únicas que quedarán
                        guardadas en su mente ayudándote a lograr tus objetivos personales, de negocio, Corporativos o
                        Empresariales.
                    </p>
                    <div class="conocer_mas">
                        <p class="button_conoce_mas">Conocer más</p>
                        <img src="{{ url('assets/icons/arrowright.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="content_logo_neurona">
                <img src="{{ url('assets/icons/Tarjeta_Logo.png') }}" alt="">
            </div>
        </div>
        {{-- Listado de notas --}}
        <div class="content_nota">
            <div class="img_blog">
                <img src="{{ url('assets/images/blog_1.jpeg') }}" alt="">
            </div>
            <div class="content_info">
                <h1 class="h1">Explora el fascinante mundo de la fotografía: Inspiración y consejos para llevar tu
                    pasión al siguiente nivel</h1>
                <div class="txt">
                    La fotografía es un lenguaje universal que nos permite contar historias, capturar emociones y congelar
                    momentos en el tiempo. En nuestro blog, te sumergirás en un mundo de inspiración fotográfica.
                    Exploraremos técnicas...
                </div>
                <div class="conocer_mas">
                    <p class="button_conoce_mas">Conocer más</p>
                    <img src="{{ url('assets/icons/arrowright.svg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="content_nota">
            <div class="img_blog">
                <img src="{{ url('assets/images/blog_1.jpeg') }}" alt="">
            </div>
            <div class="content_info">
                <h1 class="h1">Explora el fascinante mundo de la fotografía: Inspiración y consejos para llevar tu
                    pasión al siguiente nivel</h1>
                <div class="txt">
                    La fotografía es un lenguaje universal que nos permite contar historias, capturar emociones y congelar
                    momentos en el tiempo. En nuestro blog, te sumergirás en un mundo de inspiración fotográfica.
                    Exploraremos técnicas...
                </div>
                <div class="conocer_mas">
                    <p class="button_conoce_mas">Conocer más</p>
                    <img src="{{ url('assets/icons/arrowright.svg') }}" alt="">
                </div>
            </div>
        </div>
        <div class="content_nota">
            <div class="img_blog">
                <img src="{{ url('assets/images/blog_1.jpeg') }}" alt="">
            </div>
            <div class="content_info">
                <h1 class="h1">Explora el fascinante mundo de la fotografía: Inspiración y consejos para llevar tu
                    pasión al siguiente nivel</h1>
                <div class="txt">
                    La fotografía es un lenguaje universal que nos permite contar historias, capturar emociones y congelar
                    momentos en el tiempo. En nuestro blog, te sumergirás en un mundo de inspiración fotográfica.
                    Exploraremos técnicas...
                </div>
                <div class="conocer_mas">
                    <p class="button_conoce_mas">Conocer más</p>
                    <img src="{{ url('assets/icons/arrowright.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
