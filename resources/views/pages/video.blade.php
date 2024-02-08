@extends('layouts.main')
@section('title', 'Neuronafotografica - Blog')
@section('content')
    <div class="contente_dad">
        <div class="mosca">
            <a href="https://api.whatsapp.com/send?phone=+525519547280&text=Hola,%20necesito%20ayuda" target="_blank">
                <img src="{{ url('assets/icons/Mosca.svg') }}" alt="">
            </a>
        </div>
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
                            <h6 class="encabezado_banner">{{ $item->title }}</h6>
                            <div class="box_slider_text">
                                <h1 class="texto_principal">{{ $item->description }}</h1>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="box_galeria">
            @foreach ($list as $item)
                <a href="{{ route('gallery.cotizador', $item) }}">
                    <div class="content_galeria">
                        <div class="img" style="background-image: url({{ url($item->image) }})">
                        </div>
                        <h1>{{ $item->name }}</h1>
                        <div class="content_categoria">
                            <div class="cat">
                                <span>{{ $item->category->name }}</span>
                            </div>
                            <div class="cat">
                                <span>Tamaño</span>
                            </div>
                            <div class="cat">
                                <span>Papel</span>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
