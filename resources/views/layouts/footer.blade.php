<footer>
    <div class="box_footer">
        <div class="encabezado_logo">
            <h1 class="encabezado">{!! $footer[0]->title !!}</h1>
            <img src="{{ url('assets/icons/logo_footer.png') }}" class="logo_footer" alt="">
        </div>
        <div class="formulario_secciones">
            <div class="form_footer">
                <form action="" method="post">
                    <input type="text" placeholder="Input">
                    <button>{{ $footer[1]->title }}</button>
                </form>
            </div>
            <div class="secciones_footer">
                <div class="item_footer">
                    <h1 class="h1_encab">{{ $footer[2]->title }}</h1>
                    <a href="{{ route('arquitectura.index') }}">
                        <p class="seccion_p">{{ $footer[3]->title }}</p>
                    </a>
                    <a href="{{ route('construccion.index') }}">
                        <p class="seccion_p">{{ $footer[4]->title }}</p>
                    </a>
                    <a href="{{ route('corporativa.index') }}">
                        <p class="seccion_p">{{ $footer[5]->title }}</p>
                    </a>
                    <a href="{{ route('publicitaria.index') }}">
                        <p class="seccion_p">{{ $footer[6]->title }}</p>
                    </a>
                </div>
                <div class="item_footer">
                    <h1 class="h1_encab">{{ $footer[7]->title }}</h1>
                    <a href="{{ route('acerca_de.index') }}">
                        <p class="seccion_p">{{ $footer[8]->title }}</p>
                    </a>
                    <a href="{{ route('contact.index') }}">
                        <p class="seccion_p">{{ $footer[9]->title }}</p>
                    </a>
                    <a href="{{ route('gallery.index') }}">
                        <p class="seccion_p">{{ $footer[10]->title }}</p>
                    </a>
                    <a href="{{ route('instagra_feed.index') }}">
                        <p class="seccion_p">{{ $footer[11]->title }}</p>
                    </a>
                </div>
                <div class="item_footer">
                    <h1 class="h1_encab">{{ $footer[12]->title }}</h1>
                    <a href="{{ route('terminos_y_condiciones.index') }}">
                        <p class="seccion_p">{{ $footer[13]->title }}</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="redes_sociales_up_footer">
            <div class="redes_footer">
                <a href="https://www.instagram.com/Neurona.Fotografica/" target="_blank">
                    <img src="{{ url('assets/icons/Instagram_n.svg') }}" alt="">
                </a>
                <a href="https://www.youtube.com/@neuronafotografica" target="_blank">
                    <img src="{{ url('assets/icons/Youtube_n.svg') }}" alt="">
                </a>
                <a href="https://www.facebook.com/Neurona.Fotografica" target="_blank">
                    <img src="{{ url('assets/icons/Facebook.svg') }}" alt="">
                </a>
                <a href="https://www.tiktok.com/@neuronafotografica" target="_blank">
                    <img src="{{ url('assets/icons/Tiktok.svg') }}" alt="">
                </a>
                <a href="https://www.behance.net/contacto6936?tracking_source=search_users|neurona%20fotografica"
                    target="_blank">
                    <img src="{{ url('assets/icons/Behance.svg') }}" alt="">
                </a>
                <a href="https://www.linkedin.com/in/jorge-reyes-98025914/?originalSubdomain=mx" target="_blank">
                    <img src="{{ url('assets/icons/Linkedin.svg') }}" alt="">
                </a>
            </div>
            <img src="{{ url('assets/icons/up.svg') }}" alt="" id="flechaTop" style="cursor: pointer;">
        </div>
        <h1 class="aviso_priv">{{ $footer[14]->title }}</h1>
    </div>
</footer>
