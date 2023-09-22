@extends('layouts.main')
@section('title', 'Neuronafotografica - Home')
@section('scripts')
    @vite('resources/js/acerca_de.js')
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
            <div class="item_slider" style="background-image: url({{ url('assets/images/utileria_1.png') }})">
                <div class="contenedor_informacion_banner">
                    <h6 class="encabezado_banner">Frase o línea de impacto</h6>
                    <div class="box_slider_text">
                        <h1 class="texto_principal">Nosotros</h1>
                    </div>
                </div>
            </div>
        </div>
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

        {{-- Dos imagenes grandes --}}
        <div class="content_imagenes_grandes_slider">
            <div class="glide_slider_full">
                <div class="glide" id="slider_1">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide">
                                <img src="{{ url('assets/images/utileria_11.jpeg') }}" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="{{ url('assets/images/utileria_11.jpeg') }}" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="glide_slider_full">
                <div class="glide" id="slider_2">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide">
                                <img src="{{ url('assets/images/utileria_12.png') }}" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="{{ url('assets/images/utileria_12.png') }}" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{-- Preguntas y Slider --}}
        <div class="content_slider_nosotros">
            <div class="glide_slider_big">
                <div class="glide" id="slider_3">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide">
                                <img src="{{ url('assets/images/utileria_13.png') }}" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="{{ url('assets/images/utileria_13.png') }}" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="faqs_home_content_big">
                <div class="item_faqs">
                    <h1 class="h1">1. ¿Qué proyectos abarcamos dentro de Fotografía de Arquitectura?</h1>
                    <p class="txt">Fotografía y video orientado a proyectos habitacionales, lugares recreativos,
                        hoteles, centros comerciales, que requieran mostrar sus espacios para
                        promoción, venta o renta y hospedaje.</p>
                </div>
                <div class="item_faqs">
                    <h1 class="h1">2. ¿Qué servicios visuales manejamos?</h1>
                    <p class="txt">Fotografía y video con diferentes tecnologías como cámara convencional, drone, drone
                        FPV, cámara 360 o nuestra cámara propia NeuroCam.</p>
                </div>
                <div class="item_faqs">
                    <h1 class="h1">3. ¿Cómo hago una cotización?</h1>
                    <p class="txt">Envíanos tus datos y una breve descripción del proyecto que tienes y te asesoramos
                        con el proceso a seguir</p>
                </div>
                <div class="item_faqs">
                    <h1 class="h1">4. ¿Qué formas de pago aceptamos?</h1>
                    <p class="txt">Aceptamos Transferencias bancarias, Tarjetas de Crédito y Débito, efectivo.</p>
                </div>
                <div class="item_faqs">
                    <h1 class="h1">5. ¿Cuáles son nuestros tiempos de respuesta?</h1>
                    <p class="txt">Estará en función de tu proyecto considerando pre-producción, producción y
                        post-producción. Será un “traje a la medida” para tí o tu empresa.</p>
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
            <div class="glide_slider_big">
                <div class="glide" id="contacto">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide">
                                <img src="{{ url('assets/images/rolex.png') }}" class="zoom" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection