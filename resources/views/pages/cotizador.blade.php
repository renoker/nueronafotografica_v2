@extends('layouts.main')
@section('title', 'Neuronafotografica - Cotizador')
@section('scripts')
    @vite('resources/js/cotizador.js')
    <script>
        window.addEventListener("load", function(event) {
            size()
        });
        const size = () => {
            var myHeaders = new Headers();
            myHeaders.append("Accept", "application/json");
            myHeaders.append("X-CSRF-TOKEN", document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
            var requestOptions = {
                headers: myHeaders,
            };

            fetch("/size", requestOptions)
                .then(response => response.text())
                .then(result => {
                    const obj = JSON.parse(result);
                    var box = document.getElementById('boxSize')
                    obj.response.forEach(function(r) {
                        console.log(r);
                        const div = document.createElement("div")
                        div.classList.add('punto')
                        div.setAttribute('id', 'size_' + r.id);
                        div.addEventListener("click", function() {
                            selectSize(r.id, r.size, r.count);
                        }, false);

                        box.appendChild(div)
                    });
                })
                .catch(error => console.log('error', error));
        }

        const selectSize = (id, size, num) => {
            var punto = document.getElementById('size_' + id)
            punto.classList.add('active')
        }
    </script>
@endsection
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                <div class="item_slider" style="background-image: url({{ url($item->image) }})">
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
            <div class="content_presentacion" style="background-image: url({{ url('assets/cotizador/back.png') }})"></div>
            <div class="content_filtros">
                <div class="filtro">
                    <h6 class="encab">Tamaño</h6>
                    <div class="box_slider_points">
                        <div class="slider">
                            <img src="{{ url('assets/icons/size.png') }}" alt="">
                        </div>
                        <div class="points" id="boxSize">
                        </div>
                    </div>
                    <h6 class="medida">50 X 40 cm</h6>
                </div>
            </div>
        </div>
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
