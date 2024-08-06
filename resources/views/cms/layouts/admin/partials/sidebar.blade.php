<header class="main-nav">
    <div class="sidebar-user text-center">
        <img class="img-90 rounded-circle" src="{{ asset('cms_assets/images/dashboard/1.png') }}" alt="" />
        <div class="badge-bottom"><span class="badge badge-primary">New</span></div>
        <a href="user-profile">
            <h6 class="mt-3 f-14 f-w-600">Jorge Reyes</h6>
        </a>
        <p class="mb-0 font-roboto">Super admin</p>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>General</h6>
                        </div>
                    </li>
                    {{-- HOME --}}
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('backoffice/home') }}"
                            href="javascript:void(0)"><i data-feather="home"></i><span>Home</span></a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('backoffice/home') }};">
                            <li><a href="{{ route('slider.index') }}" class="{{ routeActive('slider.index') }}">Banner
                                    principal</a></li>
                            <li><a href="{{ route('despregable.index') }}"
                                    class="{{ routeActive('despregable.index') }}">Banner desplegable</a></li>
                            <li><a href="{{ route('admin_slider_general.indexHome') }}"
                                    class="{{ routeActive('admin_slider_general.indexHome') }}">Sliders generales</a>
                            </li>
                            <li><a href="{{ route('translateHome.index') }}"
                                    class="{{ routeActive('translateHome.index') }}">Traducción</a></li>
                            <li><a href="{{ route('partners.index') }}"
                                    class="{{ routeActive('partners.index') }}">Partners</a></li>
                        </ul>
                    </li>
                    {{-- END HOME --}}
                    {{-- VIDEOS --}}
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('backoffice/videos') }}"
                            href="javascript:void(0)"><i data-feather="home"></i><span>Videos</span></a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('backoffice/videos') }};">
                            <li><a href="{{ route('sliderVideos.index') }}"
                                    class="{{ routeActive('sliderVideos.index') }}">Banner
                                    principal</a></li>
                    </li>
                    <li><a href="{{ route('adminVideo.index') }}"
                            class="{{ routeActive('adminVideo.index') }}">Videos</a></li>
                </ul>
                </li>
                {{-- END VIDEOS --}}
                {{-- ARQUITECTURA --}}
                <li class="dropdown">
                    <a class="nav-link menu-title {{ prefixActive('backoffice/arquitectura') }}"
                        href="javascript:void(0)"><i data-feather="home"></i><span>Arquitectura</span></a>
                    <ul class="nav-submenu menu-content"
                        style="display: {{ prefixBlock('backoffice/arquitectura') }};">
                        <li><a href="{{ route('sliderArquitectura.index') }}"
                                class="{{ routeActive('sliderArquitectura.index') }}">Banner
                                principal</a></li>
                        <li><a href="{{ route('arquitectura_slider_general.index') }}"
                                class="{{ routeActive('arquitectura_slider_general.index') }}">Sliders
                                generales</a>
                        </li>
                        <li><a href="{{ route('translateArquitectura.index') }}"
                                class="{{ routeActive('translateArquitectura.index') }}">Traducción</a></li>
                    </ul>
                </li>
                {{-- END ARQUITECTURA --}}
                {{-- CONSTRUCCION --}}
                <li class="dropdown">
                    <a class="nav-link menu-title {{ prefixActive('backoffice/construccion') }}"
                        href="javascript:void(0)"><i data-feather="home"></i><span>Construcción</span></a>
                    <ul class="nav-submenu menu-content"
                        style="display: {{ prefixBlock('backoffice/construccion') }};">
                        <li><a href="{{ route('sliderConstruccion.index') }}"
                                class="{{ routeActive('sliderConstruccion.index') }}">Banner
                                principal</a></li>
                        <li><a href="{{ route('construccion_slider_general.index') }}"
                                class="{{ routeActive('construccion_slider_general.index') }}">Sliders
                                generales</a>
                        </li>
                        <li><a href="{{ route('translateConstruccion.index') }}"
                                class="{{ routeActive('translateConstruccion.index') }}">Traducción</a></li>
                    </ul>
                </li>
                {{-- END CONSTRUCCION --}}
                {{-- CORPORATIVA --}}
                <li class="dropdown">
                    <a class="nav-link menu-title {{ prefixActive('backoffice/corporativa') }}"
                        href="javascript:void(0)"><i data-feather="home"></i><span>Corporativa</span></a>
                    <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('backoffice/corporativa') }};">
                        <li><a href="{{ route('sliderCorporativa.index') }}"
                                class="{{ routeActive('sliderCorporativa.index') }}">Banner
                                principal</a></li>
                        <li><a href="{{ route('corporativa_slider_general.index') }}"
                                class="{{ routeActive('corporativa_slider_general.index') }}">Sliders
                                generales</a>
                        </li>
                        <li><a href="{{ route('translateCorporativa.index') }}"
                                class="{{ routeActive('translateCorporativa.index') }}">Traducción</a></li>
                    </ul>
                </li>
                {{-- END CORPORATIVA --}}
                {{-- PUBLICITARIA --}}
                <li class="dropdown">
                    <a class="nav-link menu-title {{ prefixActive('backoffice/publicitaria') }}"
                        href="javascript:void(0)"><i data-feather="home"></i><span>Publicitaria</span></a>
                    <ul class="nav-submenu menu-content"
                        style="display: {{ prefixBlock('backoffice/publicitaria') }};">
                        <li><a href="{{ route('sliderPublicitaria.index') }}"
                                class="{{ routeActive('sliderPublicitaria.index') }}">Banner
                                principal</a></li>
                        <li><a href="{{ route('publicitaria_slider_general.index') }}"
                                class="{{ routeActive('publicitaria_slider_general.index') }}">Sliders
                                generales</a>
                        </li>
                        <li><a href="{{ route('translatePublicitaria.index') }}"
                                class="{{ routeActive('translatePublicitaria.index') }}">Traducción</a></li>
                    </ul>
                </li>
                {{-- END PUBLICITARIA --}}
                {{-- ACERCA DE --}}
                <li class="dropdown">
                    <a class="nav-link menu-title {{ prefixActive('backoffice/acerca_de') }}"
                        href="javascript:void(0)"><i data-feather="home"></i><span>Acerca De</span></a>
                    <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('backoffice/acerca_de') }};">
                        <li><a href="{{ route('sliderAcercaDe.index') }}"
                                class="{{ routeActive('sliderAcercaDe.index') }}">Banner
                                principal</a></li>
                        <li><a href="{{ route('acerca_de_slider_general.index') }}"
                                class="{{ routeActive('acerca_de_slider_general.index') }}">Sliders
                                generales</a>
                        </li>
                        <li><a href="{{ route('translateAcercaDe.index') }}"
                                class="{{ routeActive('translateAcercaDe.index') }}">Traducción</a></li>
                        <li><a href="{{ route('personal.index') }}"
                                class="{{ routeActive('personal.index') }}">Personal</a></li>
                        <li><a href="{{ route('card_text.index') }}"
                                class="{{ routeActive('card_text.index') }}">Tarjeta de texto</a></li>
                    </ul>
                </li>
                {{-- END ACERCA DE --}}
                {{-- CONTACTO --}}
                <li class="dropdown">
                    <a class="nav-link menu-title {{ prefixActive('backoffice/contacto') }}"
                        href="javascript:void(0)"><i data-feather="users"></i><span>Contacto</span></a>
                    <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('backoffice/contacto') }};">
                        <li><a href="{{ route('list_contact.index') }}"
                                class="{{ routeActive('list_contact.index') }}">Registros</a></li>
                        <li><a href="{{ route('contacto_slider_general.index') }}"
                                class="{{ routeActive('contacto_slider_general.index') }}">Sliders
                                generales</a>
                        </li>
                        <li><a href="{{ route('translateContacto.index') }}"
                                class="{{ routeActive('translateContacto.index') }}">Traducción</a></li>
                        <li><a href="{{ route('card_text_contact.index') }}"
                                class="{{ routeActive('card_text_contact.index') }}">Tarjeta de texto</a></li>
                    </ul>
                </li>
                {{-- END CONTACTO --}}
                {{-- BLOG --}}
                <li class="dropdown">
                    <a class="nav-link menu-title {{ prefixActive('backoffice/blog') }}" href="javascript:void(0)"><i
                            data-feather="file"></i><span>Blog</span></a>
                    <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('backoffice/blog') }};">
                        <li><a href="{{ route('adminNotas.index') }}"
                                class="{{ routeActive('adminNotas.index') }}">Notas</a>
                        </li>
                        <li><a href="{{ route('translateBlog.index') }}"
                                class="{{ routeActive('translateBlog.index') }}">Traducción</a></li>
                        <li><a href="{{ route('category_blog.index') }}"
                                class="{{ routeActive('category_blog.index') }}">Categorías</a></li>
                    </ul>
                </li>
                {{-- END BLOG --}}
                {{-- GALERIA --}}
                <li class="dropdown">
                    <a class="nav-link menu-title {{ prefixActive('backoffice/galeria') }}"
                        href="javascript:void(0)"><i data-feather="file"></i><span>Galería</span></a>
                    <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('backoffice/galeria') }};">
                        <li><a href="{{ route('backoffice_gallery.index') }}"
                                class="{{ routeActive('backoffice_gallery.index') }}">Notas</a>
                        </li>
                        <li>
                            <a href="{{ route('galeria_blog.index') }}"
                                class="{{ routeActive('galeria_blog.index') }}">Categorías</a>
                        </li>
                        <li>
                            <a href="{{ route('paper.index') }}" class="{{ routeActive('paper.index') }}">Papel</a>
                        </li>
                        <li>
                            <a href="{{ route('size.index') }}" class="{{ routeActive('size.index') }}">Tamaños</a>
                        </li>
                        <li>
                            <a href="{{ route('finish.index') }}"
                                class="{{ routeActive('finish.index') }}">Acabados</a>
                        </li>
                        <li><a href="{{ route('translateGaleria.index') }}"
                                class="{{ routeActive('translateGaleria.index') }}">Traducción</a></li>
                    </ul>
                </li>
                {{-- END GALERIA --}}
                {{-- GALERIA --}}
                {{-- <li class="dropdown">
                    <a class="nav-link menu-title {{ prefixActive('backoffice/categoria') }}"
                        href="javascript:void(0)"><i data-feather="file"></i><span>Categorias Generales</span></a>
                    <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('backoffice/categoria') }};">
                        <li><a href="{{ route('category.index') }}"
                                class="{{ routeActive('category.index') }}">Lista</a>
                        </li>
                    </ul>
                </li> --}}
                {{-- END GALERIA --}}
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
