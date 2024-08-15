@extends('layouts.main')
@section('title', 'Neuronafotografica - Home')
@section('scripts')
    @vite('resources/js/corporativa.js')
    @vite('resources/js/carrusel.js')
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LfWECcqAAAAAAnEPOJocwUFtNiFre3Rl2TuuZ4T"></script>
    <script>
        grecaptcha.enterprise.ready(function() {
            grecaptcha.enterprise.execute('6LfWECcqAAAAAAnEPOJocwUFtNiFre3Rl2TuuZ4T', {
                action: 'Contacto'
            }).then(function(token) {
                document.getElementById('recaptcha-token').value = token;
            });
        });
    </script>
@endsection
@section('content')
    <div class="contente_dad">
        <div class="mosca">
            <a href="https://api.whatsapp.com/send?phone=+525541330509&text=Hola!%20podrían%20darme%20más%20información%20de%20sus%20servicios?"
                target="_blank">
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
                            <h6 class="encabezado_banner">{{ $item->description }}</h6>
                            <div class="box_slider_text">
                                <h1 class="texto_principal">{{ $item->title }}</h1>
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
                                    <img src="{{ url($item->image) }}" alt="">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="glide_slider">
                <div class="glide" id="slider_2">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            @foreach ($slider_general_dos as $item)
                                <li class="glide__slide">
                                    <img src="{{ url($item->image) }}" alt="">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- Imagen grander - Faqs y Slider --}}
        <div class="content_slider_fq">
            <div class="parte_imagen">
                <div class="glide_slider_full">
                    <div class="glide" id="slider_3">
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides">
                                @foreach ($slider_general_tres as $item)
                                    <li class="glide__slide">
                                        <img src="{{ url($item->image) }}" alt="">
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="parte_imagen">
                <div class="glide_slider_full">
                    <div class="glide" id="slider_4">
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides">
                                @foreach ($slider_general_cuatro as $item)
                                    <li class="glide__slide">
                                        <img src="{{ url($item->image) }}" alt="">
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Preguntas y Slider --}}
        <div class="content_slider_nosotros">
            <div class="faqs_home_content_big">
                <div class="item_faqs">
                    <h1 class="h1">{{ $traslate[0]->title }}</h1>
                    <p class="txt">{{ $traslate[1]->title }}</p>
                </div>
                <div class="item_faqs">
                    <h1 class="h1">{{ $traslate[2]->title }}</h1>
                    <p class="txt">{{ $traslate[3]->title }}</p>
                </div>
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
            </div>
            <div class="glide_slider_big">
                <div class="glide" id="slider_5">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            @foreach ($slider_general_cinco as $item)
                                <li class="glide__slide">
                                    <img src="{{ url($item->image) }}" alt="">
                                </li>
                            @endforeach
                        </ul>
                    </div>
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
                    <input type="hidden" name="recaptcha_token" id="recaptcha-token">
                    <button type="submit">{{ $traslateContact[5]->title }}</button>
                </form>
            </div>
            <div class="glide_slider_big">
                <div class="glide" id="contacto">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            @foreach ($slider_general_seis as $item)
                                <li class="glide__slide">
                                    <img src="{{ url($item->image) }}" class="zoom" alt="">
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
