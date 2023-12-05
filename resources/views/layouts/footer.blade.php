<footer>
    <div class="box_footer">
        <div class="encabezado_logo">
            <h1 class="encabezado">Suscríbete a <br> nuestro newsletter</h1>
            <img src="{{ url('assets/icons/logo_footer.png') }}" class="logo_footer" alt="">
        </div>
        <div class="formulario_secciones">
            <div class="form_footer">
                <form action="" method="post">
                    <input type="text" placeholder="Input">
                    <button>Enviar</button>
                </form>
            </div>
            <div class="secciones_footer">
                <div class="item_footer">
                    <h1 class="h1_encab">servicios</h1>
                    <a href="{{ route('arquitectura.index') }}">
                        <p class="seccion_p">Arquitectura</p>
                    </a>
                    <a href="{{ route('construccion.index') }}">
                        <p class="seccion_p">Construcción</p>
                    </a>
                    <a href="{{ route('corporativa.index') }}">
                        <p class="seccion_p">Corporativa</p>
                    </a>
                    <a href="{{ route('publicitaria.index') }}">
                        <p class="seccion_p">Publicitaria</p>
                    </a>
                </div>
                <div class="item_footer">
                    <h1 class="h1_encab">COMUNIDAD</h1>
                    <a href="{{ route('acerca_de.index') }}">
                        <p class="seccion_p">Acerca de</p>
                    </a>
                    <a href="{{ route('contact.index') }}">
                        <p class="seccion_p">Contacto</p>
                    </a>
                    <a href="{{ route('gallery.index') }}">
                        <p class="seccion_p">Galeria</p>
                    </a>
                    <a href="{{ route('instagra_feed.index') }}">
                        <p class="seccion_p">Instagram Feed</p>
                    </a>
                </div>
                <div class="item_footer">
                    <h1 class="h1_encab">LEGAL Y CUMPLIMIENTOS</h1>
                    <a href="">
                        <p class="seccion_p">Términos y condiciones</p>
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
            <img src="{{ url('assets/icons/up.svg') }}" alt="">
        </div>
        <h1 class="aviso_priv">2023 Neurona Fotográfica All Rights Reserved - Terms & Conditions</h1>
    </div>
</footer>
