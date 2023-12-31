@extends('cms.admin.authentication.master')

@section('title')
    Inicio de Sesión
@endsection

@push('css')
@endpush

@section('content')
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5"><img class="bg-img-cover bg-center" src="{{ asset('assets/images/blog_1.jpeg') }}"
                        alt="looginpage" /></div>
                <div class="col-xl-7 p-0">
                    <div class="login-card">
                        <form class="theme-form login-form">
                            <h4>Inicio de Sesión</h4>
                            <h6>NeuronaFotodráfica</h6>
                            <div class="form-group">
                                <label>Email</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="icon-email"></i></span>
                                    <input class="form-control" type="email" required=""
                                        placeholder="test@neuronafotografica.com" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Contraseña</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="icon-lock"></i></span>
                                    <input class="form-control" type="password" name="password" required=""
                                        placeholder="*********" />
                                    <div class="show-hide"><span class="show"> </span></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <input id="checkbox1" type="checkbox" />
                                    <label class="text-muted" for="checkbox1">Recuerdame</label>
                                </div>
                                <a class="link" href="{{ route('forget-password') }}">Forgot password?</a>
                            </div>
                            <div class="form-group"><a class="btn btn-primary btn-block" href="{{ route('index') }}"
                                    type="submit">Iniciar</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @push('scripts')
    @endpush
@endsection
