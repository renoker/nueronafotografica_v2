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
            @foreach ($slider_top as $item)
                <div class="item_slider" style="background-image: url({{ $item->image }})">
                    <div class="contenedor_informacion_banner">
                        <h6 class="encabezado_banner">{{ $item->title }}</h6>
                        <div class="box_slider_text">
                            <h1 class="texto_principal">{{ $item->description }}</h1>
                            <a href="{{ route($item->href) }}">
                                <div class="conocer_mas">
                                    <p class="button_conoce_mas">{{ $item->button }}</p>
                                    <img src="{{ url('assets/icons/arrowright.svg') }}" alt="">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
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
        </div>
        {{-- bloque 2 --}}
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
        @foreach ($desplegable as $item)
            <div class="contente_banner_desplegables">
                <div class="banner_desplegable" id="img_{{ $item->id }}"
                    onclick="despliegaBanner({{ $item->id }})" style="background-image: url({{ url($item->image) }})">
                    <div class="content_text_banner">
                        <h1 class="h1">{{ $item->title }}</h1>
                        <a href="{{ route($item->href) }}">
                            <div class="conocer_mas">
                                <p class="button_conoce_mas">{{ $item->button }}</p>
                                <img src="{{ url('assets/icons/arrowright.svg') }}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
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
                                        @for ($i = 0; $i < 6; $i++)
                                            <a href="">
                                                <img src="{{ url($partners[$i]->image) }}" class="logo_company"
                                                    alt="">
                                            </a>
                                        @endfor
                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="content_equipo">
                                        @for ($i = 5; $i < 11; $i++)
                                            <a href="">
                                                <img src="{{ url($partners[$i]->image) }}" class="logo_company"
                                                    alt="">
                                            </a>
                                        @endfor
                                    </div>
                                </li>
                                <li class="glide__slide">
                                    <div class="content_equipo">
                                        @for ($i = 11; $i < 14; $i++)
                                            <a href="">
                                                <img src="{{ url($partners[$i]->image) }}" class="logo_company"
                                                    alt="">
                                            </a>
                                        @endfor
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="glide__bullets" data-glide-el="controls[nav]">
                            @for ($i = 0; $i < $p; $i++)
                                <button class="glide__bullet" data-glide-dir="={{ $i }}"></button>
                            @endfor
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
                            @foreach ($slider_general_tres as $item)
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
