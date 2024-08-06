@extends('cms.layouts.admin.master')

@section('title')
    {{ $page }} - Agregar
@endsection

@push('css')
@endpush

@section('content')
    @component('cms.components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>{{ $page }} - Agregar</h3>
        @endslot
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('slider.index') }}">{{ $page }}</a></li>
        <li class="breadcrumb-item active">Agregar</li>
    @endcomponent

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Imagen</h5>
                    </div>
                    <form class="form theme-form" action="{{ route('adminNotas.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label"
                                            for="exampleFormControlSelect7">Categorias</label>
                                        <div class="col-sm-9">
                                            <select class="form-select digits" id="exampleFormControlSelect7"
                                                name="categoria_blog_id">
                                                @foreach ($categorias as $item)
                                                    <option value="{{ $item->id }}">{{ $item->category_es }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Minuatura</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="file" name="miniatura" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Imagen</label>
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
                                            <input class="form-control" name="es_title" type="text"
                                                placeholder="Titulo" />
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
                                                placeholder="Texto botón" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Descripción Corta</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="es_description_small" rows="5" cols="5" placeholder="Descripción"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Descripción</label>
                                        <div class="col-sm-9">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <textarea id="editor1" name="es_description" cols="30" rows="10"></textarea>
                                                    </div>
                                                </div>
                                            </div>
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
                                        <label class="col-sm-3 col-form-label">Titulo</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="en_title" type="text"
                                                placeholder="Titulo" />
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
                                                placeholder="Texto botón" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Descripción Corta</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="en_description_small" rows="5" cols="5" placeholder="Descripción"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Descripción</label>
                                        <div class="col-sm-9">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <textarea id="editor2" name="en_description" cols="30" rows="10"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="col-sm-9 offset-sm-3">
                                <button class="btn btn-primary" type="submit">Crear</button>
                                <a href="{{ route('slider.index') }}"><input class="btn btn-light" type="button"
                                        value="Cancelar" /></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @push('scripts')
        <script src="{{ asset('cms_assets/js/editor/ckeditor/ckeditor.js') }}"></script>
        <script src="{{ asset('cms_assets/js/editor/ckeditor/adapters/jquery.js') }}"></script>
        <script src="{{ asset('cms_assets/js/editor/ckeditor/styles.js') }}"></script>
        <script src="{{ asset('cms_assets/js/editor/ckeditor/ckeditor.custom.js') }}"></script>
    @endpush
@endsection
