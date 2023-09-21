@extends('layouts.main')
@section('title', 'Neuronafotografica - Blog')
@section('content')
    <div class="contente_dad">
        {{-- Bloque 1 --}}
        <div class="content_slider_nosotros">
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
            <div class="content_logo_neurona">
                <img src="{{ url('assets/icons/Tarjeta_Logo.png') }}" alt="">
            </div>
        </div>
        {{-- Detalle de notas --}}
        <div class="content_detalle">
            <div class="box">
                <div class="box_img">
                    <img src="{{ url('assets/images/blog_1.jpeg') }}" alt="">
                </div>
                <h1>Explora el fascinante mundo de la fotografía: Inspiración y consejos para llevar tu pasión al siguiente
                    nivel</h1>
                <p>
                    Todos queremos mejorar en lo que hacemos, y más cuando se trata de algo que nos apasiona; en este caso,
                    la fotografía. Es por eso que te presentamos una serie de consejos que te servirán para llevar tu pasión
                    al siguiente nivel. Queremos que todos nuestros usuarios tengan el potencial de convertirse en la mejor
                    versión de sí mismos dentro del mundo de la fotografía.
                    <br><br>
                    Primero lo primero: siempre lleva la cámara contigo. Las mejores fotos se buscan, pero también suceden
                    cuando no lo esperamos. Como dicen por ahí, que la inspiración te agarre trabajando. Piensa en lo que
                    quieres decir y pregúntate por qué: ¿por qué esa foto? ¿Por qué esa foto? ¿Por qué ese momento? ¿Por qué
                    esa iluminación o por qué ese sujeto? Todas esas preguntas son indispensables para saber qué es lo que
                    quieres capturar y qué quieres generar en los espectadores.
                </p>
                <div class="box_img">
                    <img src="{{ url('assets/images/blog_1.jpeg') }}" alt="">
                </div>
                <p>
                    No todo es el sujeto, el ambiente es igual de importante: no sólo centres tus esfuerzos en lograr a tu
                    sujeto u objeto en una toma ideal, también date cuenta de lo que hay alrededor. El ambiente es parte del
                    encuadre al igual que de la narrativa. Enmarca tus fotos de manera natural con el entorno, cuenta una
                    historia. No dejes en el olvido tus fotos viejas: puede que pienses que tus fotos actuales son mejores
                    que las anteriores, por lo mucho que has aprendido y practicado, pero hay fotos que son como los vinos,
                    con el tiempo terminan siendo perfectas.
                    <br><br>
                    Es más sentimiento que técnica: no te esfuerces tanto en alcanzar la perfección técnica, es un
                    ejercicio fútil; mejor, piensa en la fotografía como una forma de expresarte, de compartirle al mundo tu
                    visión. El arte se trata de honestidad y no hay nada más honesto que lo imperfecto.
                </p>
            </div>
        </div>
    </div>
@endsection
