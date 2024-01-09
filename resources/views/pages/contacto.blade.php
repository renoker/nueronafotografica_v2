@extends('layouts.main')
@section('title', 'Neuronafotografica - Contacto')
@section('scripts')
    @vite('resources/js/contacto.js')
@endsection
@section('content')
    <div class="contente_dad">
        <div class="mosca">
            <a href="https://api.whatsapp.com/send?phone=+525519547280&text=Hola,%20necesito%20ayuda" target="_blank">
                <img src="{{ url('assets/icons/Mosca.svg') }}" alt="">
            </a>
        </div>
        {{-- Bloque 1 --}}
        <div class="content_slider_nosotros">
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
            <div class="content_logo_neurona">
                <img src="{{ url('assets/icons/Tarjeta_Logo.png') }}" alt="">
            </div>
        </div>
        <div class="content_slider_triple">
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
        </div>
        {{-- Bullets --}}
        <div class="content_slider_bullets">
            <div class="slider_bullets">
                <div class="box_slider">
                    <div class="glide" id="slider_4">
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides">
                                <li class="glide__slide">
                                    <div class="content_info">
                                        <p>"Soy consultor de negocios, es esencial transmitir confianza, experiencia; El
                                            fotógrafo capturó la esencia de mi trabajo como consultor de negocios. Sus
                                            imágenes reflejan profesionalismo y dedicación. Recomendaría sus servicios sin
                                            ninguna duda."</p>
                                        <br>
                                        <p>
                                            <span>Alejandro Torres</span> <br>
                                            Puesto, Compañía
                                        </p>
                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="content_info">
                                        <p>"Soy consultor de negocios, es esencial transmitir confianza, experiencia; El
                                            fotógrafo capturó la esencia de mi trabajo como consultor de negocios. Sus
                                            imágenes reflejan profesionalismo y dedicación. Recomendaría sus servicios sin
                                            ninguna duda."</p>
                                        <br>
                                        <p>
                                            <span>Alejandro Torres</span> <br>
                                            Puesto, Compañía
                                        </p>
                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="content_info">
                                        <p>"Soy consultor de negocios, es esencial transmitir confianza, experiencia; El
                                            fotógrafo capturó la esencia de mi trabajo como consultor de negocios. Sus
                                            imágenes reflejan profesionalismo y dedicación. Recomendaría sus servicios sin
                                            ninguna duda."</p>
                                        <br>
                                        <p>
                                            <span>Alejandro Torres</span> <br>
                                            Puesto, Compañía
                                        </p>
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
            <div class="glide_slider">
                <div class="glide" id="slider_5">
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
@endsection
