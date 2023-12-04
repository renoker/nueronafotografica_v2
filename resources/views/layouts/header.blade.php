<header id="header">
    <input type="hidden" id="url" value="{{ url('') }}">
    <div class="container-header">
        <div class="logo">
            <a href="{{ url('/home') }}">
                <img src="{{ url('assets/icons/logo.png') }}" alt="">
            </a>
        </div>
        <div class="side-right">
            <div class="content-redes-header">
                <div class="box_redes_header">
                    <a href="">
                        <img src="{{ url('assets/icons/Instagram.svg') }}" alt="">
                    </a>
                    <a href="">
                        <img src="{{ url('assets/icons/Youtube.svg') }}" alt="">
                    </a>
                    <a href="">
                        <img src="{{ url('assets/icons/bi_plus.svg') }}" alt="">
                    </a>
                </div>
                <div class="idioma_header">
                    <a href="{{ route('changeLang', 'lang=en') }}">
                        <p class="txt_idioma">En</p>
                    </a>
                    <p class="txt_idioma">|</p>
                    <a href="{{ route('changeLang', 'lang=es') }}">
                        <p class="txt_idioma">Es</p>
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
                                <li class="li_menu_header">
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
                        <a href="">
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
