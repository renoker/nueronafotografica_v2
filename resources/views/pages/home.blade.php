@extends('layouts.main')
@section('title', 'Neuronafotografica - Home')
@section('scripts')
    @vite('resources/js/home.js')
    <script>
        const despliegaBanner = (id) => {
            var banner = document.getElementById('img_' + id)
            var onclick = banner.getAttribute("onclick");
            if (typeof(onclick) != "function") {
                banner.setAttribute('onclick', 'plegarBanner(' + id + ');');
            }
            banner.classList.add('active')
        }

        const plegarBanner = (id) => {
            var banner = document.getElementById('img_' + id)
            var onclick = banner.getAttribute("onclick");
            if (typeof(onclick) != "function") {
                banner.setAttribute('onclick', 'despliegaBanner(' + id + ');');
            }
            banner.classList.remove('active')
        }
    </script>
@endsection
@section('content')
    <div class="contente_dad">
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
        {{-- bloque 2 --}}
        <div class="content_slider_nosotros">
            <div class="faqs_home_content">
                <div class="item_faqs">
                    <h1 class="h1">Arquitectura e Interiorismo</h1>
                    <p class="txt">Te ayudamos a destacar los mejores ángulos y diseño de interiores con las diferentes
                        herramientas que te ofrecemos.</p>
                </div>
                <div class="item_faqs">
                    <h1 class="h1">Recorrido virtual 360</h1>
                    <p class="txt">Desarrollamos el proyecto acorde a tus necesidades, para incrementar tus ventas.</p>
                </div>
                <div class="item_faqs">
                    <h1 class="h1">Vuelo drone en interior o exterior</h1>
                    <p class="txt">Para los clientes las tomas captadas con drones les brindan imágenes más fidedignas de
                        la propiedad</p>
                </div>
                <div class="item_faqs">
                    <h1 class="h1">Fotográfia y video</h1>
                    <p class="txt">Servicio orientado a proyectos habitacionales, lugares recreativos, hoteles, centros
                        comerciales, que requieran mostrar sus espacios para promoción, venta o renta y hospedaje.</p>
                </div>
            </div>
            <div class="glide_slider">
                <div class="glide" id="slider_2">
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
        </div>
        <div class="contente_banner_desplegables">
            <div class="banner_desplegable" id="img_1" onclick="despliegaBanner(1)"
                style="background-image: url({{ url('assets/images/utileria_4.jpeg') }})">
                <div class="content_text_banner">
                    <h1 class="h1">Arquitectura e interiorismo</h1>
                    <div class="conocer_mas">
                        <p class="button_conoce_mas">Conocer más</p>
                        <img src="{{ url('assets/icons/arrowright.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="contente_banner_desplegables">
            <div class="banner_desplegable" id="img_3" onclick="despliegaBanner(3)"
                style="background-image: url({{ url('assets/images/utileria_5.jpeg') }})">
                <div class="content_text_banner">
                    <h1 class="h1">Construcción</h1>
                    <div class="conocer_mas">
                        <p class="button_conoce_mas">Conocer más</p>
                        <img src="{{ url('assets/icons/arrowright.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="contente_banner_desplegables">
            <div class="banner_desplegable" id="img_2" onclick="despliegaBanner(2)"
                style="background-image: url({{ url('assets/images/utileria_3.jpeg') }})">
                <div class="content_text_banner">
                    <h1 class="h1">Corporativa</h1>
                    <div class="conocer_mas">
                        <p class="button_conoce_mas">Conocer más</p>
                        <img src="{{ url('assets/icons/arrowright.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="contente_banner_desplegables">
            <div class="banner_desplegable" id="img_4" onclick="despliegaBanner(4)"
                style="background-image: url({{ url('assets/images/utileria_6.png') }})">
                <div class="content_text_banner">
                    <h1 class="h1">Publicitaria</h1>
                    <div class="conocer_mas">
                        <p class="button_conoce_mas">Conocer más</p>
                        <img src="{{ url('assets/icons/arrowright.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        {{-- Bloque 3 --}}
        <div class="content_slider_nosotros_small">
            <div class="small_nosotros">
                <h1 class="h1">Nuestros colaboradores</h1>
                <h6 class="p">Impactamos a tus clientes con la innovación y calidad de Neurona Fotográfica, a través
                    de imágenes únicas que quedaran grabadas en su mente y te ayudaran a lograr tus objetivos de negocio.
                </h6>
            </div>
            <div class="slider_bullets">
                <div class="box_slider">
                    <div class="glide" id="empresas">
                        <div class="glide__track" data-glide-el="track">
                            <ul class="glide__slides">
                                <li class="glide__slide">
                                    <div class="content_equipo">
                                        <a href="">
                                            <img src="{{ url('assets/icons/prudental.png') }}" class="logo_company"
                                                alt="">
                                        </a>
                                        <a href="">
                                            <img src="{{ url('assets/icons/dhl.png') }}" class="logo_company"
                                                alt="">
                                        </a>
                                        <a href="">
                                            <img src="{{ url('assets/icons/bonjur.png') }}" class="logo_company"
                                                alt="">
                                        </a>
                                        <a href="">
                                            <img src="{{ url('assets/icons/vim.png') }}" class="logo_company"
                                                alt="">
                                        </a>
                                        <a href="">
                                            <img src="{{ url('assets/icons/peonia.png') }}" class="logo_company"
                                                alt="">
                                        </a>
                                        <a href="">
                                            <img src="{{ url('assets/icons/sobremesa.png') }}" class="logo_company"
                                                alt="">
                                        </a>
                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="content_equipo">
                                        <a href="">
                                            <img src="{{ url('assets/icons/kw.png') }}" class="logo_company"
                                                alt="">
                                        </a>
                                        <a href="">
                                            <img src="{{ url('assets/icons/usa.png') }}" class="logo_company"
                                                alt="">
                                        </a>
                                        <a href="">
                                            <img src="{{ url('assets/icons/apotext.png') }}" class="logo_company"
                                                alt="">
                                        </a>
                                        <a href="">
                                            <img src="{{ url('assets/icons/tiny.png') }}" class="logo_company"
                                                alt="">
                                        </a>
                                        <a href="">
                                            <img src="{{ url('assets/icons/core.png') }}" class="logo_company"
                                                alt="">
                                        </a>
                                        <a href="">
                                            <img src="{{ url('assets/icons/vape.png') }}" class="logo_company"
                                                alt="">
                                        </a>
                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="content_equipo">
                                        <a href="">
                                            <img src="{{ url('assets/icons/craft.png') }}" class="logo_company"
                                                alt="">
                                        </a>
                                        <a href="">
                                            <img src="{{ url('assets/icons/andaz.png') }}" class="logo_company"
                                                alt="">
                                        </a>
                                        <div></div>
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
        </div>
        {{-- Contactanos --}}
        <div class="content_contacto_doble">
            <div class="box_contacto">
                <form action="{{ route('contact.store') }}" method="post">
                    @method('POST')
                    @csrf
                    <div class="h1_contacto">Contáctanos</div>
                    <input type="text" name="name" placeholder="Nombre" value="{{ old('name') }}">
                    <input type="email" name="email" id="" placeholder="Correo"
                        value="{{ old('email') }}">
                    <input type="tel" name="phone" id="" placeholder="Teléfono"
                        value="{{ old('phone') }}">
                    <textarea name="message" id="" cols="30" rows="10" placeholder="Mensaje">
                        {{ old('message') }}
                    </textarea>
                    <button type="submit">Enviar</button>
                </form>
            </div>
            <div class="glide_slider_big">
                <div class="glide" id="slider_3">
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
