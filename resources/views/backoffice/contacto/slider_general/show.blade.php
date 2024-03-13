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
                                        <label class="col-sm-3 col-form-label">Imagen</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="file" name="image" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label" for="exampleFormControlSelect7">No.
                                            Slider</label>
                                        <div class="col-sm-9">
                                            <select class="form-select digits" id="exampleFormControlSelect7"
                                                name="position">
                                                <option value="1" @if ($row->position == 1) selected @endif>1
                                                </option>
                                                <option value="2" @if ($row->position == 2) selected @endif>2
                                                </option>
                                                <option value="3" @if ($row->position == 3) selected @endif>3
                                                </option>
                                                <option value="4" @if ($row->position == 4) selected @endif>4
                                                </option>
                                            </select>
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
