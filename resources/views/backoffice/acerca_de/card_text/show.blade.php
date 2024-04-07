@extends('cms.layouts.admin.master')

@section('title')
    {{ $page }}
@endsection

@push('css')
@endpush

@section('content')
    @component('cms.components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>{{ $page }} - Actualizar</h3>
        @endslot
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route($rutaIndex) }}">{{ $page }} </a></li>
        <li class="breadcrumb-item active">Actualizar</li>
    @endcomponent

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <form class="form theme-form" action="{{ route($rutaUpdate, $row) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                        </div>
                        <div class="card-header pb-0 pt-0">
                            <h5>Información Español</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Nombre</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="name_es" type="text" placeholder="Nombre"
                                                value="{{ $row->name_es }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Ocupación</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="ocupacion_es" type="text"
                                                placeholder="Ocupación" value="{{ $row->ocupacion_es }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label">Descripción</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="description_es" rows="5" cols="5" placeholder="Descripción">{{ $row->description_es }}</textarea>
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
                                        <label class="col-sm-3 col-form-label">Nombre</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="name_en" type="text" placeholder="Nombre"
                                                value="{{ $row->name_en }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Ocupación</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="ocupacion_en" type="text"
                                                placeholder="Ocupación" value="{{ $row->ocupacion_en }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label">Descripción</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="description_en" rows="5" cols="5" placeholder="Descripción">{{ $row->description_en }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="col-sm-9 offset-sm-3">
                                <button class="btn btn-primary" type="submit">Actualizar</button>
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
