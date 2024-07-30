@extends('layouts.main')
@section('title', 'Neuronafotografica - Blog')
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
        {{-- Detalle de notas --}}
        <div class="content_detalle">
            <div class="box">
                <div class="box_img">
                    <img src="{{ url($row->image) }}" alt="">
                </div>
                <h1>{!! $row->title !!}</h1>
                <p>
                    {!! $row->descripcion_small !!}
                </p>
                {!! $row->description !!}
            </div>
        </div>
    </div>
@endsection
