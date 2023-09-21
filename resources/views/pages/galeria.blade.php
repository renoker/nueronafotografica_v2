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
        {{--  --}}
        <div class="box_galeria">
            @for ($i = 0; $i < 15; $i++)
                <div class="content_galeria">
                    <img src="{{ url('assets/images/flores.jpeg') }}" alt="">
                    <h1>Nombre de la obra</h1>
                    <div class="content_categoria">
                        <div class="cat">
                            <span>Categoría</span>
                        </div>
                        <div class="cat">
                            <span>Categoría</span>
                        </div>
                        <div class="cat">
                            <span>Categoría</span>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
