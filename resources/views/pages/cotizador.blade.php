@extends('layouts.main')
@section('title', 'Neuronafotografica - Cotizador')
@section('scripts')
    @vite('resources/js/cotizador.js')
    @vite('resources/js/carrusel.js')
@endsection
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')
    <div class="contente_dad">
        <div class="mosca">
            <a href="https://api.whatsapp.com/send?phone=+525513581985&text=Hola,%20necesito%20ayuda" target="_blank">
                <img src="{{ url('assets/icons/Mosca.svg') }}" alt="">
            </a>
        </div>
        {{-- Bloque 1 --}}
        <div class="content_slider_nosotros">
            <div class="content_nosotros">
                <div class="box">
                    <h6 class="h6">{{ $traslate[0]->title }}</h6>
                    <div class="txt_sinwp">
                        <h1 class="h6">{{ $traslate[1]->title }}</h1>
                    </div>
                    <p class="txt_bold">{{ $traslate[2]->title }}</p>
                    <ul class="ul">
                        <li>{!! $traslate[3]->title !!}</li>
                        <li>{!! $traslate[4]->title !!}</li>
                        <li>{!! $traslate[5]->title !!}</li>
                        <li>{!! $traslate[6]->title !!}</li>
                    </ul>
                    <div class="conocer_mas">
                        <p class="button_conoce_mas">{!! $traslate[7]->title !!}</p>
                        <img src="{{ url('assets/icons/arrowright.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="content_logo_neurona">
                <img src="{{ url('assets/icons/Tarjeta_Logo.png') }}" alt="">
            </div>
        </div>
        {{-- Mecanica Cotizador --}}
        <div class="content_cotizador_user">
            <div class="content_presentacion" style="background-image: url({{ url($row->fondo) }})">
                <div class="imagen_a_vender"></div>
            </div>
        </div>

        {{-- Comentarios --}}
        <div class="content_comentarios">
            <div class="detalle_foto_venta">
                <h1 class="txt_e">Nombre de la foto</h1>
                <p class="txt">{{ $row->name }}</p>
                <h1 class="txt_e mt">Tamaño</h1>
                <p class="txt">{{ $row->size->size }}</p>
                <h1 class="txt_e mt">Material</h1>
                <p class="txt">{{ $row->finish->finish_idioma }}</p>
                <h1 class="txt_e mt">Papel</h1>
                <p class="txt">{{ $row->paper->paper_idioma }}</p>
                <h1 class="txt_e mt">Precio</h1>
                <p class="txt">${{ number_format($row->precio, 2, '.', ',') }}</p>
                <h1 class="txt_e mt">Datos cliente</h1>
                <div class="content_form_cotizador">
                    <form action="{{ route('gallery.send_cotizacion') }}" method="post">
                        @method('POST')
                        @csrf
                        <div class="box">
                            <div class="w">
                                <input type="hidden" name="id" value="{{ $row->id }}">
                                <input type="text" name="name_cliente" id="" placeholder="Nombre"
                                    class="input">
                                <input type="email" name="email_cliente" id="" placeholder="Email"
                                    class="input">
                            </div>
                            <button type="submit" class="button_cotizar">Cotizar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="imagenes_relacionadas">
                <div class="box_glide">
                    <div class="glide" id="relacionadas">
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides">
                                @for ($i = 0; $i < 5; $i++)
                                    <li class="glide__slide">
                                        <div class="content_imagen_relacionada">
                                            <img src="{{ url('assets/galeria/img3.jpeg') }}" alt="">
                                        </div>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                        <div class="glide__bullets" data-glide-el="controls[nav]">
                            <button class="glide__bullet" data-glide-dir="=0"></button>
                            <button class="glide__bullet" data-glide-dir="=1"></button>
                            <button class="glide__bullet" data-glide-dir="=2"></button>
                            <button class="glide__bullet" data-glide-dir="=3"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End comentarios --}}
    </div>
@endsection
