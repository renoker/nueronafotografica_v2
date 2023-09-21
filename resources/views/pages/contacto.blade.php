@extends('layouts.main')
@section('title', 'Neuronafotografica - Contacto')
@section('scripts')
    @vite('resources/js/contacto.js')
@endsection
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
        <div class="content_slider_triple">
            <div class="glide_slider">
                <div class="glide" id="slider_1">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide">
                                <img src="{{ url('assets/images/utileria_14.png') }}" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="{{ url('assets/images/utileria_14.png') }}" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="glide_slider">
                <div class="glide" id="slider_2">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide">
                                <img src="{{ url('assets/images/utileria_14.png') }}" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="{{ url('assets/images/utileria_14.png') }}" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="glide_slider">
                <div class="glide" id="slider_3">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide">
                                <img src="{{ url('assets/images/utileria_14.png') }}" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="{{ url('assets/images/utileria_14.png') }}" alt="">
                            </li>
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
                            <li class="glide__slide">
                                <img src="{{ url('assets/images/utileria_14.png') }}" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="{{ url('assets/images/utileria_14.png') }}" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{-- Contactanos --}}
        <div class="content_contacto_doble">
            <div class="box_contacto">
                <div class="h1_contacto">Contáctanos</div>
                <input type="text" placeholder="Nombre">
                <input type="email" name="" id="" placeholder="Correo">
                <input type="tel" name="" id="" placeholder="Teléfono">
                <textarea name="" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
                <button type="submit">Enviar</button>
            </div>
            <div class="faqs_home_content">
                <div class="item_faqs">
                    <h1 class="h1">Misión</h1>
                    <p class="txt"></p>
                </div>
                <div class="item_faqs">
                    <h1 class="h1">Valores</h1>
                    <p class="txt"></p>
                </div>
                <div class="item_faqs">
                    <h1 class="h1">Visión</h1>
                    <p class="txt"></p>
                </div>
                <div class="item_faqs">
                    <h1 class="h1">¿Qué significa nuestro nombre Neurona Fotográfica?</h1>
                    <p class="txt"></p>
                </div>
            </div>
        </div>
    </div>
@endsection
