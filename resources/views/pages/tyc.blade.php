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
        <div class="w-full">
            <div class="content_bases">
                <h1 class="h1_encabezado pt">AVISO DE PRIVACIDAD</h1>

                <h1 class="text-normal pb-5">
                    Estimados clientes de <span class="bold">NEURONA FOTOGRAFICA (NF).</span>
                </h1>

                <h1 class="text-normal pb-5">
                    En <span class="bold">NEURONA FOTOGRAFICA</span> entendemos la importancia de hacer un buen uso y
                    cuidado de los datos personales de nuestros clientes y visitantes (en adelante los <span
                        class="bold">"Titulares" </span>), por tanto, nos comprometemos a tratar sus datos personales de
                    <span class="bold"><u>manera legal y confidencial y de acuerdo con las disposiciones legales
                            vigentes.</u></span>
                </h1>

                <h1 class="text-normal pb-5">
                    Informamos a los <span class="bold">“Titulares”</span> que este <span class="bold">Aviso de
                        Privacidad</span> ha sido elaborado de conformidad con <span class="bold"><u>La Ley
                            Federal de Protección de Datos Personales en Posesión de los Particulares y su Reglamento, así
                            como con
                            los Lineamientos Generales sobre la Protección de Datos Personales.</u></span>
                </h1>

            </div>
        </div>
    </div>
@endsection
