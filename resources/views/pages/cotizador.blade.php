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
            <a href="https://api.whatsapp.com/send?phone=+525519547280&text=Hola,%20necesito%20ayuda" target="_blank">
                <img src="{{ url('assets/icons/Mosca.svg') }}" alt="">
            </a>
        </div>
        {{-- Banner Principal --}}
        <div class="contente_slider">
            <input type="hidden" value="{{ $slider_top->count() }}" id="number_slider">
            <div class="bullets_slider">
                @foreach ($slider_top as $key => $value)
                    <div class="bullet @if ($key == 0) active @endif" id="punto_{{ $key }}"
                        onclick="changePunto('custom_slider', 645, {{ $key }})">
                    </div>
                @endforeach
            </div>
            <div class="custom_slide" id="custom_slider">
                @foreach ($slider_top as $item)
                    <div class="item_slider" style="background-image: url({{ $item->image }})">
                        <div class="contenedor_informacion_banner">
                            <h6 class="encabezado_banner">{{ $item->title }}</h6>
                        </div>
                    </div>
                @endforeach
            </div>
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
            <div class="content_presentacion" style="background-image: url({{ url('assets/cotizador/back.png') }})">
                <div class="imagen_a_vender"></div>
            </div>
            <div class="content_filtros">
                <div class="filtro">
                    <h6 class="encab">Tamaño</h6>
                    <div class="box_slider_points">
                        <div class="slider">
                            <img src="{{ url('assets/icons/size.png') }}" alt="">
                        </div>
                        <div class="points">
                            <div class="punto active"></div>
                        </div>
                    </div>
                    <h6 class="medida">50 X 40 cm</h6>
                </div>
                <div class="filtro">
                    <h6 class="encab">Material</h6>
                    <div class="box_slider_points">
                        <div class="slider">
                            <img src="{{ url('assets/icons/size.png') }}" alt="">
                        </div>
                        <div class="points">
                            <div class="punto active"></div>
                        </div>
                    </div>
                    <h6 class="medida">50 X 40 cm</h6>
                </div>
                <div class="filtro">
                    <h6 class="encab">Papel</h6>
                    <div class="box_slider_points">
                        <div class="slider">
                            <img src="{{ url('assets/icons/size.png') }}" alt="">
                        </div>
                        <div class="points">
                            <div class="punto active"></div>
                        </div>
                    </div>
                    <h6 class="medida">50 X 40 cm</h6>
                </div>
            </div>
        </div>
        {{-- FORM --}}
        <div class="content_form_cotizador">
            <form action="" method="post">
                <div class="box">
                    <ul>
                        <li>
                            <p class="txt">Tamaño - 60 x 40 cm</p>
                        </li>
                        <li>
                            <p class="txt">Material - 60 x 40 cm</p>
                        </li>
                        <li>
                            <p class="txt">Papel - 60 x 40 cm</p>
                        </li>
                        <li>
                            <input type="text" name="" id="" placeholder="Nombre" class="input">
                        </li>
                        <li>
                            <input type="email" name="" id="" placeholder="Email" class="input">
                        </li>
                        <li>
                            <button type="button" class="button_cotizar">Cotizar</button>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
        {{-- END FORM --}}
        {{-- Comentarios --}}
        <div class="content_comentarios">
            <div class="comentarios_box">
                <div class="box_glide">
                    <div class="glide" id="coments">
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides">
                                <li class="glide__slide">
                                    <div class="coment">
                                        <div class="img_content"></div>
                                        <div class="txt_content">
                                            <h1 class="h1">Andrea Torres</h1>
                                            <p class="name">Retrato</p>
                                            <p class="description">
                                                Sus imágenes transmiten emociones y reflejan mi personalidad de manera
                                                excepcional. ¡Estoy encantada con su talento y profesionalismo!
                                            </p>
                                            <div class="starts">
                                                <img src="{{ url('assets/icons/star-fill.png') }}" alt="">
                                                <img src="{{ url('assets/icons/star-fill.png') }}" alt="">
                                                <img src="{{ url('assets/icons/star-fill.png') }}" alt="">
                                                <img src="{{ url('assets/icons/star-fill.png') }}" alt="">
                                                <img src="{{ url('assets/icons/star-fill.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="coment">
                                        <div class="img_content"></div>
                                        <div class="txt_content">
                                            <h1 class="h1">Andrea Torres</h1>
                                            <p class="name">Retrato</p>
                                            <p class="description">
                                                Sus imágenes transmiten emociones y reflejan mi personalidad de manera
                                                excepcional. ¡Estoy encantada con su talento y profesionalismo!
                                            </p>
                                            <div class="starts">
                                                <img src="{{ url('assets/icons/star-fill.png') }}" alt="">
                                                <img src="{{ url('assets/icons/star-fill.png') }}" alt="">
                                                <img src="{{ url('assets/icons/star-fill.png') }}" alt="">
                                                <img src="{{ url('assets/icons/star-fill.png') }}" alt="">
                                                <img src="{{ url('assets/icons/star-fill.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="coment">
                                        <div class="img_content"></div>
                                        <div class="txt_content">
                                            <h1 class="h1">Andrea Torres</h1>
                                            <p class="name">Retrato</p>
                                            <p class="description">
                                                Sus imágenes transmiten emociones y reflejan mi personalidad de manera
                                                excepcional. ¡Estoy encantada con su talento y profesionalismo!
                                            </p>
                                            <div class="starts">
                                                <img src="{{ url('assets/icons/star-fill.png') }}" alt="">
                                                <img src="{{ url('assets/icons/star-fill.png') }}" alt="">
                                                <img src="{{ url('assets/icons/star-fill.png') }}" alt="">
                                                <img src="{{ url('assets/icons/star-fill.png') }}" alt="">
                                                <img src="{{ url('assets/icons/star-fill.png') }}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="glide__bullets" data-glide-el="controls[nav]">
                            <button class="glide__bullet" data-glide-dir="=0"></button>
                            <button class="glide__bullet" data-glide-dir="=1"></button>
                            <button class="glide__bullet" data-glide-dir="=2"></button>
                        </div>
                    </div>
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
