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
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label"
                                            for="exampleFormControlSelect7">Categorías</label>
                                        <div class="col-sm-9">
                                            <select class="form-select digits" id="exampleFormControlSelect7"
                                                name="galeria_blog_id">
                                                @foreach ($categorias as $item)
                                                    <option value="{{ $item->id }}"
                                                        @if ($item->id == $row->galeria_blog_id) selected="selected" @endif>
                                                        {{ $item->category_es }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label"
                                            for="exampleFormControlSelect7">Tamaños</label>
                                        <div class="col-sm-9">
                                            <select class="form-select digits" id="exampleFormControlSelect7"
                                                name="size_id">
                                                @foreach ($tamanios as $item)
                                                    <option value="{{ $item->id }}"
                                                        @if ($item->id == $row->size_id) selected="selected" @endif>
                                                        {{ $item->size }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label"
                                            for="exampleFormControlSelect7">Acabados</label>
                                        <div class="col-sm-9">
                                            <select class="form-select digits" id="exampleFormControlSelect7"
                                                name="finish_id">
                                                @foreach ($acabados as $item)
                                                    <option value="{{ $item->id }}"
                                                        @if ($item->id == $row->finish_id) selected="selected" @endif>
                                                        {{ $item->finish_en }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="exampleFormControlSelect7">Tipo de
                                            papel</label>
                                        <div class="col-sm-9">
                                            <select class="form-select digits" id="exampleFormControlSelect7"
                                                name="paper_id">
                                                @foreach ($papeles as $item)
                                                    <option value="{{ $item->id }}"
                                                        @if ($item->id == $row->paper_id) selected="selected" @endif>
                                                        {{ $item->paper_es }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Imagen actual</label>
                                        <div class="col-sm-9">
                                            <img src="{{ asset($row->image) }}" style="width: 200px" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Imagen (400x400px)</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="file" name="image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Fondo actual</label>
                                        <div class="col-sm-9">
                                            <img src="{{ asset($row->fondo) }}" style="width: 200px" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Fondo (1029x734px)</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="file" name="fondo" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Nombre de la foto</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="name" type="text"
                                                value="{{ $row->name }}" placeholder="Nombre de la obra" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Precio de la foto</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="precio" type="number"
                                                value="{{ $row->precio }}" placeholder="Precio de la foto" />
                                        </div>
                                    </div>
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
