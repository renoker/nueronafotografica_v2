@extends('layouts.main')
@section('title', 'Neuronafotografica - Blog')
@section('content')
    <div class="contente_dad">
        <div class="mosca">
            <a href="https://api.whatsapp.com/send?phone=+525513581985&text=Hola,%20necesito%20ayuda" target="_blank">
                <img src="{{ url('assets/icons/Mosca.svg') }}" alt="">
            </a>
        </div>
        {{-- Bloque 1 --}}
        <div class="content_slider_nosotros">
            <div class="content_nosotros">
                <div class="box">
                    <h6 class="h6"> {!! $traslate[0]->title !!}</h6>
                    <div class="txt_wp">
                        <h1 class="h1">{!! $traslate[1]->title !!}</h1>
                    </div>
                    <p class="descripcion">
                        {!! $traslate[2]->title !!}
                    </p>
                    <a href="{{ route('acerca_de.index') }}">
                        <div class="conocer_mas">
                            <p class="button_conoce_mas">{!! $traslate[3]->title !!}</p>
                            <img src="{{ url('assets/icons/arrowright.svg') }}" alt="">
                        </div>
                    </a>
                </div>
            </div>
            <div class="content_logo_neurona">
                <img src="{{ url('assets/icons/Tarjeta_Logo.png') }}" alt="">
            </div>
        </div>
        {{-- Listado de notas --}}
        @foreach ($list as $item)
            <div class="content_nota">
                <div class="img_blog">
                    <img src="{{ url($item->miniatura) }}" alt="">
                </div>
                <div class="content_info">
                    <h1 class="h1">{!! $item->title !!}</h1>
                    <div class="txt">
                        {!! $item->descripcion_small !!}
                    </div>
                    <a href="{{ route('blog.show', [$item->id]) }}">
                        <div class="conocer_mas">
                            <p class="button_conoce_mas">{!! $item->button !!}</p>
                            <img src="{{ url('assets/icons/arrowright.svg') }}" alt="">
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
