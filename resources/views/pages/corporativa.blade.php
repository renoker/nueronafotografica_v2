@extends('layouts.main')
@section('title', 'Neuronafotografica - Home')
@section('scripts')
    @vite('resources/js/corporativa.js')
@endsection
@section('content')
    <div class="contente_dad">
        {{-- Banner Principal --}}
        <div class="contente_slider">
            <div class="bullets_slider">
                <div class="bullet active"></div>
                <div class="bullet"></div>
                <div class="bullet"></div>
                <div class="bullet"></div>
            </div>
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
        {{-- Bloque 1 --}}
        <div class="content_slider_nosotros">
            <div class="content_nosotros">
                <div class="box">
                    <h6 class="h6">{{ $traslate[0]->title }}</h6>
                    <div class="txt_wp">
                        <h1 class="h1">{{ $traslate[1]->title }}</h1>
                        <img src="{{ url('assets/icons/Mosca.svg') }}" alt="">
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
        </div>

        {{-- Imagen grander - Faqs y Slider --}}
        <div class="content_slider_fq">
            <div class="parte_imagen">
                <div class="glide_slider_full">
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
            <div class="parte_dos">
                <div class="glide_slider">
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
            </div>
        </div>
        {{-- Preguntas y Slider --}}
        <div class="content_slider_nosotros">
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
            <div class="glide_slider_big">
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
                            @foreach ($slider_general_cinco as $item)
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
