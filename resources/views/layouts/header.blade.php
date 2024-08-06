<header class="fixed desk" id="header">
    <input type="hidden" id="url" value="{{ url('') }}">
    <div class="container-header">
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ url('assets/images/logo_c.png') }}" class="logo_header" alt="">
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
                        <img src="{{ url('assets/images/mexico.png') }}" class="img_idioma_mex" alt="">
                    </a>
                </div>
            </div>
            <div class="content-menu-header">
                <ul>
                    <li>
                        <a>
                            <div class="drop_header" id="menu-button">
                                <p class="p">{{ $header[0]->title }}</p>
                                <img src="{{ url('assets/icons/icon-park-outline_down.svg') }}" id="arrow"
                                    class="arrow_down" alt="">
                            </div>
                        </a>
                        <div class="menu_desplegable" id="header_menu">
                            <ul>
                                <li class="li_menu_header" tabindex="1">
                                    <a href="{{ route('arquitectura.index') }}">
                                        <p>{{ $header[1]->title }}</p>
                                    </a>
                                </li>
                                <li class="li_menu_header">
                                    <a href="{{ route('construccion.index') }}">
                                        <p>{{ $header[2]->title }}</p>
                                    </a>
                                </li>
                                <li class="li_menu_header">
                                    <a href="{{ route('corporativa.index') }}">
                                        <p>{{ $header[3]->title }}</p>
                                    </a>
                                </li>
                                <li class="li_menu_header">
                                    <a href="{{ route('publicitaria.index') }}">
                                        <p>{{ $header[4]->title }}</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="@if (Route::currentRouteName() == 'videos') active @endif">
                        <a href="{{ route('video.index') }}">
                            <p class="p">{{ $header[5]->title }}</p>
                        </a>
                    </li>
                    <li class="@if (Route::currentRouteName() == 'gallery.index') active @endif">
                        <a href="{{ route('gallery.index') }}">
                            <p class="p">{{ $header[6]->title }}</p>
                        </a>
                    </li>
                    <li class="@if (Route::currentRouteName() == 'acerca_de.index') active @endif">
                        <a href="{{ route('acerca_de.index') }}">
                            <p class="p">{{ $header[7]->title }}</p>
                        </a>
                    </li>
                    <li class="@if (Route::currentRouteName() == 'contact.index') active @endif">
                        <a href="{{ route('contact.index') }}">
                            <p class="p">{{ $header[8]->title }}</p>
                        </a>
                    </li>
                    <li class="@if (Route::currentRouteName() == 'blog.index') active @endif">
                        <a href="{{ route('blog.index') }}">
                            <p class="p">{{ $header[9]->title }}</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<header class="mobile">
    <ul class="header__menu" id="header_menu_h">
        <li class="mt">
            <a>
                <div class="drop_header" id="menu-button-mob">
                    <p class="p">{{ $header[0]->title }}</p>
                    <img src="{{ url('assets/icons/icon-park-outline_down.svg') }}" id="arrow" class="arrow_down"
                        alt="">
                </div>
            </a>
            <div class="menu_desplegable" id="header_menu-mob">
                <ul>
                    <li class="li_menu_header" tabindex="1">
                        <a href="{{ route('arquitectura.index') }}">
                            <p>{{ $header[1]->title }}</p>
                        </a>
                    </li>
                    <li class="li_menu_header">
                        <a href="{{ route('construccion.index') }}">
                            <p>{{ $header[2]->title }}</p>
                        </a>
                    </li>
                    <li class="li_menu_header">
                        <a href="{{ route('corporativa.index') }}">
                            <p>{{ $header[3]->title }}</p>
                        </a>
                    </li>
                    <li class="li_menu_header">
                        <a href="{{ route('publicitaria.index') }}">
                            <p>{{ $header[4]->title }}</p>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="@if (Route::currentRouteName() == 'videos') active @endif">
            <a href="{{ route('video.index') }}">
                <p class="p">{{ $header[5]->title }}</p>
            </a>
        </li>
        <li class="@if (Route::currentRouteName() == 'gallery.index') active @endif">
            <a href="{{ route('gallery.index') }}">
                <p class="p">{{ $header[6]->title }}</p>
            </a>
        </li>
        <li class="@if (Route::currentRouteName() == 'acerca_de.index') active @endif">
            <a href="{{ route('acerca_de.index') }}">
                <p class="p">{{ $header[7]->title }}</p>
            </a>
        </li>
        <li class="@if (Route::currentRouteName() == 'contact.index') active @endif">
            <a href="{{ route('contact.index') }}">
                <p class="p">{{ $header[8]->title }}</p>
            </a>
        </li>
        <li class="@if (Route::currentRouteName() == 'blog.index') active @endif">
            <a href="{{ route('blog.index') }}">
                <p class="p">{{ $header[9]->title }}</p>
            </a>
        </li>
        <li>
            <div class="side-right">
                <div class="content-redes-header">
                    <div class="box_redes_header">
                        <a href="https://www.instagram.com/Neurona.Fotografica/" target="_blank">
                            <img src="{{ url('assets/icons/Instagram.svg') }}" alt="">
                        </a>
                        <a href="https://www.youtube.com/@neuronafotografica" target="_blank">
                            <img src="{{ url('assets/icons/Youtube.svg') }}" alt="">
                        </a>
                        <div class="apaga" id="despliegue-box-mob">
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
                        <img src="{{ url('assets/icons/bi_plus.svg') }}" id="plus-button-mob" alt="">
                    </div>
                    <div class="idioma_header">
                        <a href="{{ route('changeLang', 'lang=en') }}">
                            <img src="{{ url('assets/images/canada.png') }}" class="img_idioma" alt="">
                        </a>
                        <p class="txt_idioma">|</p>
                        <a href="{{ route('changeLang', 'lang=es') }}">
                            <img src="{{ url('assets/images/mexico.png') }}" class="img_idioma_mex" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="header_mobile">
        <div class="item"></div>
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ url('assets/images/logo_c.png') }}" alt="">
            </a>
        </div>
        <div class="item">
            <span class="toggle-button" id="menu_button_h">
                <div class="menu-bar menu-bar-top"></div>
                <div class="menu-bar menu-bar-middle"></div>
                <div class="menu-bar menu-bar-bottom"></div>
            </span>
        </div>
    </div>
</header>
<div class="space_header"></div>
{{-- gabriela.gvd@gmail.com --}}
{{-- rachel@pluralmkt.mx --}}
