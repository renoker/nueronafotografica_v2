@extends('layouts.main')
@section('title', 'Neuronafotografica - Home')
@section('scripts')
    @vite('resources/js/publicitaria.js')
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
                    <h6 class="encabezado_banner">Te ayudamos a destacar los mejores ángulos y diseño de interiores</h6>
                    <div class="box_slider_text">
                        <h1 class="texto_principal">Arquitectura e interiorismo</h1>
                        <div class="conocer_mas">
                            <p class="button_conoce_mas">Conocer más</p>
                            <img src="{{ url('assets/icons/arrowright.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Bloque 1 --}}
        <div class="content_slider_nosotros">
            <div class="glide_slider">
                <div class="glide" id="slider_1">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide">
                                <img src="{{ url('assets/images/slider_1.png') }}" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="{{ url('assets/images/slider_2.png') }}" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
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
        </div>

        {{-- Imagen grander - Faqs y Slider --}}
        <div class="content_slider_fq">
            <div class="parte_dos">
                <div class="glide_slider">
                    <div class="glide" id="slider_3">
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides">
                                <li class="glide__slide">
                                    <img src="{{ url('assets/images/slider_1.png') }}" alt="">
                                </li>
                                <li class="glide__slide">
                                    <img src="{{ url('assets/images/slider_2.png') }}" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="faqs_home_content">
                    <div class="item_faqs">
                        <h1 class="h1">Arquitectura e Interiorismo</h1>
                        <p class="txt">Te ayudamos a destacar los mejores ángulos y diseño de interiores con las
                            diferentes
                            herramientas que te ofrecemos.</p>
                    </div>
                    <div class="item_faqs">
                        <h1 class="h1">Recorrido virtual 360</h1>
                        <p class="txt">Desarrollamos el proyecto acorde a tus necesidades, para incrementar tus ventas.
                        </p>
                    </div>
                    <div class="item_faqs">
                        <h1 class="h1">Vuelo drone en interior o exterior</h1>
                        <p class="txt">Para los clientes las tomas captadas con drones les brindan imágenes más
                            fidedignas de
                            la propiedad</p>
                    </div>
                    <div class="item_faqs">
                        <h1 class="h1">Fotográfia y video</h1>
                        <p class="txt">Servicio orientado a proyectos habitacionales, lugares recreativos, hoteles,
                            centros
                            comerciales, que requieran mostrar sus espacios para promoción, venta o renta y hospedaje.</p>
                    </div>
                </div>
            </div>
            <div class="parte_imagen">
                <div class="glide_slider_full">
                    <div class="glide" id="slider_2">
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides">
                                <li class="glide__slide">
                                    <img src="{{ url('assets/images/utileria_10.jpeg') }}" alt="">
                                </li>
                                <li class="glide__slide">
                                    <img src="{{ url('assets/images/utileria_10.jpeg') }}" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Preguntas y Slider --}}
        <div class="content_slider_nosotros">
            <div class="glide_slider_big">
                <div class="glide" id="slider_4">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <li class="glide__slide">
                                <img src="{{ url('assets/images/edificio.jpeg') }}" alt="">
                            </li>
                            <li class="glide__slide">
                                <img src="{{ url('assets/images/edificio.jpeg') }}" alt="">
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
