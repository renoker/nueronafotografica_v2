@extends('cms.layouts.admin.master')

@section('title')
    NeuronaForográfica - {{ $page }}
@endsection

@push('css')
@endpush

@section('content')
    @component('cms.components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>{{ $page }} - Agregar</h3>
        @endslot
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route($rutaIndex) }}">{{ $page }}</a></li>
        <li class="breadcrumb-item active">Agregar</li>
    @endcomponent

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card pt-5">
                    <form class="form theme-form" action="{{ route($rutaStore) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="card-header pb-0 pt-0">
                            <h5>Información Español</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Acabado Español</label>
                                        <div class="col-sm-9">
                                            <input class="form-control"
                                                name="@extends('cms.layouts.admin.master')

@section('title')
    NeuronaForográfica - {{ $page }}
@endsection

@push('css')
@endpush

@section('content')
    @component('cms.components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>{{ $page }} - Agregar</h3>
        @endslot
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route($rutaIndex) }}">{{ $page }}</a></li>
        <li class="breadcrumb-item active">Agregar</li>
    @endcomponent

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card pt-5">
                    <form class="form theme-form" action="{{ route($rutaStore) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="card-header pb-0 pt-0">
                            <h5>Información Español</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Papel Español</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="finish_es" type="text"
                                                placeholder="Papel Español" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-header pb-0 pt-0">
                            <h5>Información Ingles</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Papel Ingles</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="finish_en" type="text"
                                                placeholder="Papel Ingles" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="col-sm-9 offset-sm-3">
                                <button class="btn btn-primary" type="submit">Crear</button>
                                <a href="{{ route($rutaIndex) }}"><input class="btn btn-light" type="button"
                                        value="Cancelar" /></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @push('scripts')
    @endpush
@endsection
"
                                                type="text" placeholder="Acabado Español" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-header pb-0 pt-0">
                            <h5>Información Ingles</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Acabado Ingles</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="paper_en" type="text"
                                                placeholder="Acabado Ingles" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="col-sm-9 offset-sm-3">
                                <button class="btn btn-primary" type="submit">Crear</button>
                                <a href="{{ route($rutaIndex) }}"><input class="btn btn-light" type="button"
                                        value="Cancelar" /></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @push('scripts')
    @endpush
@endsection
