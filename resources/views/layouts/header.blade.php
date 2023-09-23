<header id="header">
    <div class="container-header">
        <div class="logo">
            <a href="">
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
                        <a href="">
                            <p>videos</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <p>galeria</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <div class="drop_header">
                                <p>servicios</p>
                                <img src="{{ url('assets/icons/icon-park-outline_down.svg') }}" class="arrow_down"
                                    alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <p>acerca de</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <p>contacto</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <p>blog</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
{{-- gabriela.gvd@gmail.com --}}
{{-- rachel@pluralmkt.mx --}}
