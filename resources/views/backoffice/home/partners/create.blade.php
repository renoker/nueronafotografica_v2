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
        <li class="breadcrumb-item"><a href="{{ route($rutaIndex) }}">{{ $page }}</a></li>
        <li class="breadcrumb-item active">Agregar</li>
    @endcomponent

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <form class="form theme-form" action="{{ route($rutaStore) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Imagen (124x124px)</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="file" name="image" />
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
