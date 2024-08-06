@extends('layouts.main')
@section('title', 'Neuronafotografica - Blog')
@section('popups')
    <div id="popup" class="">
        <div class="opacidad">
            <div class="content_imagen_galeria">
                <div class="cerrar" onclick="quitaImagen()">X</div>
                <img src="" id="imgGaleria" alt="">
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="contente_dad">
        <div class="mosca">
            <a href="https://api.whatsapp.com/send?phone=+525541330509&text=Hola!%20podrían%20darme%20más%20información%20de%20sus%20servicios?"
                target="_blank">
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
                </div>
            </div>
            <div class="content_logo_neurona">
                <img src="{{ url('assets/icons/Tarjeta_Logo.png') }}" alt="">
            </div>
        </div>
        {{--  --}}
        <div class="box_galeria">
            @foreach ($list as $item)
                <div class="content_galeria">
                    <div class="img" style="background-image: url({{ url($item->image) }})"
                        onclick="muestraImagen('{{ url($item->image) }}')">
                    </div>
                    <a href="{{ route('gallery.cotizador', $item) }}">
                        <h1>{{ $item->name }}</h1>
                        <div class="content_categoria">
                            <div class="cat">
                                <span>{{ $item->galeria_blog->categoria_idioma }}</span>
                            </div>
                            <div class="cat">
                                <span>{{ $item->size->size }}</span>
                            </div>
                            <div class="cat">
                                <span>{{ $item->finish->finish_idioma }}</span>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function muestraImagen(imagenUrl) {
            document.getElementById('popup').classList.add("active")
            var imagen = document.getElementById('imgGaleria')
            imagen.src = imagenUrl
        };

        function quitaImagen() {
            document.getElementById('popup').classList.remove("active")
            var imagen = document.getElementById('imgGaleria')
            imagen.src = ''
        };
    </script>
@endsection
