<header id="header">
    <input type="hidden" id="url" value="{{ url('') }}">
    <div class="container-header">
        <div class="logo">
            <a href="{{ url('/home') }}">
                <img src="{{ url('assets/icons/logo.png') }}" class="logo_header" alt="">
            </a>
        </div>
        <div class="side-right">
            <div class="content-redes-header">
                <div class="box_redes_header">
                    <a href="https://www.instagram.com/Neurona.Fotografica/" target="_blank">
                        <img src="{{ url('assets/icons/Instagram.svg') }}" alt="">
                    </a>
                    <a href="https://www.youtube.com/@neuronafotografica" target="_blank">
                        <img src="{{ url('assets/icons/Youtube.svg') }}" alt="">
                    </a>
                    <div class="apaga" id="despliegue-box">
                        <a href="https://www.facebook.com/Neurona.Fotografica" target="_blank">
                            <img src="{{ url('assets/icons/face_blanco.svg') }}" class="oculto" alt="">
                        </a>
                        <a href="https://www.tiktok.com/@neuronafotografica" target="_blank">
                            <img src="{{ url('assets/icons/tik_blanco.svg') }}" class="oculto" alt="">
                        </a>
                        <a href="https://www.behance.net/contacto6936?tracking_source=search_users|neurona%20fotografica"
                            target="_blank">
                            <img src="{{ url('assets/icons/b_blanco.svg') }}" class="oculto" alt="">
                        </a>
                        <a href="https://www.linkedin.com/in/jorge-reyes-98025914/?originalSubdomain=mx"
                            target="_blank">
                            <img src="{{ url('assets/icons/lk_blanco.svg') }}" class="oculto" alt="">
                        </a>
                    </div>
                    <img src="{{ url('assets/icons/bi_plus.svg') }}" id="plus-button" alt="">
                </div>
                <div class="idioma_header">
                    <a href="{{ route('changeLang', 'lang=en') }}">
                        <img src="{{ url('assets/images/canada.png') }}" class="img_idioma" alt="">
                    </a>
                    <p class="txt_idioma">|</p>
                    <a href="{{ route('changeLang', 'lang=es') }}">
                        <img src="{{ url('assets/images/mexico.png') }}" class="img_idioma" alt="">
                    </a>
                </div>
            </div>
            <div class="content-menu-header">
                <ul>
                    <li>
                        <a>
                            <div class="drop_header" id="menu-button">
                                <p class="p">servicios</p>
                                <img src="{{ url('assets/icons/icon-park-outline_down.svg') }}" id="arrow"
                                    class="arrow_down" alt="">
                            </div>
                        </a>
                        <div class="menu_desplegable" id="header_menu">
                            <ul>
                                <li class="li_menu_header" tabindex="1">
                                    <a href="{{ route('arquitectura.index') }}">
                                        <p>Arquitectura</p>
                                    </a>
                                </li>
                                <li class="li_menu_header">
                                    <a href="{{ route('construccion.index') }}">
                                        <p>Construcción</p>
                                    </a>
                                </li>
                                <li class="li_menu_header">
                                    <a href="{{ route('corporativa.index') }}">
                                        <p>Corporativa</p>
                                    </a>
                                </li>
                                <li class="li_menu_header">
                                    <a href="{{ route('publicitaria.index') }}">
                                        <p>Publicitaria</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="@if (Route::currentRouteName() == 'videos') active @endif">
                        <a href="{{ route('video.index') }}">
                            <p class="p">videos</p>
                        </a>
                    </li>
                    <li class="@if (Route::currentRouteName() == 'gallery.index') active @endif">
                        <a href="{{ route('gallery.index') }}">
                            <p class="p">galeria</p>
                        </a>
                    </li>
                    <li class="@if (Route::currentRouteName() == 'acerca_de.index') active @endif">
                        <a href="{{ route('acerca_de.index') }}">
                            <p class="p">acerca de</p>
                        </a>
                    </li>
                    <li class="@if (Route::currentRouteName() == 'contact.index') active @endif">
                        <a href="{{ route('contact.index') }}">
                            <p class="p">contacto</p>
                        </a>
                    </li>
                    <li class="@if (Route::currentRouteName() == 'blog.index') active @endif">
                        <a href="{{ route('blog.index') }}">
                            <p class="p">blog</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
{{-- gabriela.gvd@gmail.com --}}
{{-- rachel@pluralmkt.mx --}}
