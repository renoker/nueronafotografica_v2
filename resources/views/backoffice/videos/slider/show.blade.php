@extends('cms.layouts.admin.master')

@section('title')
    Base inputs
    Nuerona
@endsection

@push('css')
@endpush

@section('content')
    @component('cms.components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>Slider - Actualizar</h3>
        @endslot
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('sliderVideos.index') }}">Slider</a></li>
        <li class="breadcrumb-item active">Actualizar</li>
    @endcomponent

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Imagen</h5>
                    </div>
                    <form class="form theme-form" action="{{ route('sliderVideos.update', $row) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Imagen actual</label>
                                        <div class="col-sm-9">
                                            <img src="{{ asset($row->image) }}" style="width: 400px" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Imagen Slider</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="file" name="image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-header pb-0 pt-0">
                            <h5>Información Español</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Titulo</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="es_title" type="text" placeholder="Titulo"
                                                value="{{ $row->es_title }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Texto botón</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="es_button" type="text"
                                                placeholder="Texto botón" value="{{ $row->es_button }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label">Descripción</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="es_description" rows="5" cols="5" placeholder="Descripción">
                                        {{ $row->es_description }}
                                    </textarea>
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
                                        <label class="col-sm-3 col-form-label">Titulo</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="en_title" type="text" placeholder="Titulo"
                                                value="{{ $row->en_title }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Texto botón</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="en_button" type="text"
                                                placeholder="Texto botón" value="{{ $row->en_button }}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-3 col-form-label">Descripción</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="en_description" rows="5" cols="5" placeholder="Descripción">
                                        {{ $row->en_description }}
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="col-sm-9 offset-sm-3">
                                <button class="btn btn-primary" type="submit">Actualizar</button>
                                <a href="{{ route('sliderVideos.index') }}"><input class="btn btn-light" type="button"
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
