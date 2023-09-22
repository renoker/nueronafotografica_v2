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
                        <form action="{{ route('admin.login') }}" method="POST" class="theme-form login-form">
                            @method('POST')
                            @csrf
                            <h4>Inicio de Sesión</h4>
                            <h6>NeuronaFotodráfica</h6>
                            <div class="form-group">
                                <label>Usuario</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="icon-email"></i></span>
                                    <input class="form-control" type="text" name="username" value="neurona"
                                        required="" placeholder="test@neuronafotografica.com" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Contraseña</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="icon-lock"></i></span>
                                    <input class="form-control" type="password" name="password" required=""
                                        value="admin" placeholder="*********" />
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
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">Iniciar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @push('scripts')
    @endpush
@endsection
