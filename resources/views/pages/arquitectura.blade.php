@extends('layouts.main')
@section('title', 'Neuronafotografica - Home')
@section('scripts')
    @vite('resources/js/arquitectura.js')
    @vite('resources/js/carrusel.js')
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
                            <div class="box_slider_text">
                                <h1 class="texto_principal">{{ $item->description }}</h1>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- Bloque 1 --}}
        <div class="content_slider_nosotros">
            <div class="glide_slider">
                <div class="glide" id="slider_1">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            @foreach ($slider_general_uno as $item)
                                <li class="glide__slide">
                                    <img src="{{ url($item->image) }}" alt="" class="border_radio_20">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="content_nosotros">
                <div class="box">
                    <h6 class="h6">{{ $traslate[0]->title }}</h6>
                    <div class="txt_wp">
                        <h1 class="h1">{{ $traslate[1]->title }}</h1>
                    </div>
                    <p class="descripcion">
                        {{ $traslate[2]->title }}
                    </p>
                    <div class="conocer_mas">
                        <p class="button_conoce_mas">{{ $traslate[3]->title }}</p>
                        <img src="{{ url('assets/icons/arrowright.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        {{-- Slider Doble --}}
        <div class="contente_slider_doble">
            <div class="glide_slider">
                <div class="glide" id="slider_2">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            @foreach ($slider_general_dos as $item)
                                <li class="glide__slide">
                                    <img src="{{ url($item->image) }}" alt="" class="border_radio_20">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="glide_slider">
                <div class="glide" id="slider_3">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            @foreach ($slider_general_tres as $item)
                                <li class="glide__slide">
                                    <img src="{{ url($item->image) }}" alt="" class="border_radio_20">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{-- Faqs y Slider --}}
        <div class="content_slider_nosotros">
            <div class="faqs_home_content">
                <div class="item_faqs">
                    <h1 class="h1">{{ $traslate[4]->title }}</h1>
                    <p class="txt">{{ $traslate[5]->title }}</p>
                </div>
                <div class="item_faqs">
                    <h1 class="h1">{{ $traslate[6]->title }}</h1>
                    <p class="txt">{{ $traslate[7]->title }}</p>
                </div>
                <div class="item_faqs">
                    <h1 class="h1">{{ $traslate[8]->title }}</h1>
                    <p class="txt">{{ $traslate[9]->title }}</p>
                </div>
                <div class="item_faqs">
                    <h1 class="h1">{{ $traslate[10]->title }}</h1>
                    <p class="txt">{{ $traslate[11]->title }}</p>
                </div>
            </div>
            <div class="glide_slider">
                <div class="glide" id="slider_4">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            @foreach ($slider_general_cuatro as $item)
                                <li class="glide__slide">
                                    <img src="{{ url($item->image) }}" alt="" class="border_radio_20">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{-- Preguntas y Slider --}}
        <div class="content_slider_nosotros">
            <div class="glide_slider_big">
                <div class="glide" id="preguntas">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            @foreach ($slider_general_cinco as $item)
                                <li class="glide__slide">
                                    <img src="{{ url($item->image) }}" alt="" class="border_radio_20">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="faqs_home_content_big">
                <div class="item_faqs">
                    <h1 class="h1">{{ $traslate[12]->title }}</h1>
                    <p class="txt">{{ $traslate[13]->title }}</p>
                </div>
                <div class="item_faqs">
                    <h1 class="h1">{{ $traslate[14]->title }}</h1>
                    <p class="txt">{{ $traslate[15]->title }}</p>
                </div>
                <div class="item_faqs">
                    <h1 class="h1">{{ $traslate[16]->title }}</h1>
                    <p class="txt">{{ $traslate[17]->title }}</p>
                </div>
                <div class="item_faqs">
                    <h1 class="h1">{{ $traslate[18]->title }}</h1>
                    <p class="txt">{{ $traslate[19]->title }}</p>
                </div>
                <div class="item_faqs">
                    <h1 class="h1">{{ $traslate[20]->title }}</h1>
                    <p class="txt">{{ $traslate[21]->title }}</p>
                </div>
            </div>
        </div>
        {{-- Contactanos --}}
        <div class="content_contacto_doble">
            <div class="box_contacto">
                <form action="{{ route('contact.store') }}" method="post">
                    @method('POST')
                    @csrf
                    <div class="h1_contacto">{{ $traslateContact[0]->title }}</div>
                    <input type="text" name="name" placeholder="{{ $traslateContact[1]->title }}"
                        value="{{ old('name') }}">
                    <input type="email" name="email" id="" placeholder="{{ $traslateContact[2]->title }}"
                        value="{{ old('email') }}">
                    <input type="tel" name="phone" id="" placeholder="{{ $traslateContact[3]->title }}"
                        value="{{ old('phone') }}">
                    <textarea name="message" id="" cols="30" rows="10"
                        placeholder="{{ $traslateContact[4]->title }}">
                        {{ old('message') }}
                    </textarea>
                    <button type="submit">{{ $traslateContact[5]->title }}</button>
                </form>
            </div>
            <div class="glide_slider_big">
                <div class="glide" id="contacto">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            @foreach ($slider_general_seis as $item)
                                <li class="glide__slide">
                                    <img src="{{ url($item->image) }}" class="zoom border_radio_20" alt="">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
