@extends('layouts.main')
@section('title', 'Neuronafotografica - Home')
@section('scripts')
    @vite('resources/js/acerca_de.js')
    @vite('resources/js/carrusel.js')
@endsection
@section('content')
    <div class="mosca">
        <a href="https://api.whatsapp.com/send?phone=+525541330509&text=Hola,%20necesito%20ayuda" target="_blank">
            <img src="{{ url('assets/icons/Mosca.svg') }}" alt="">
        </a>
    </div>
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
    <div class="elfsight-app-3b7252d0-8163-4c3c-bf49-2783445e1a1c" data-elfsight-app-lazy></div>
@endsection
