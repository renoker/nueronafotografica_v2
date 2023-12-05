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
            <h3>Banner General - Actualizar</h3>
        @endslot
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('slider.index') }}">Banner desplegable</a></li>
        <li class="breadcrumb-item active">Actualizar</li>
    @endcomponent

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Imagen</h5>
                    </div>
                    <form class="form theme-form" action="{{ route('admadmin_slider_general.update', $row) }}"
                        method="POST" enctype="multipart/form-data">
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
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label" for="exampleFormControlSelect7">No.
                                        Slider</label>
                                    <div class="col-sm-9">
                                        <select class="form-select digits" id="exampleFormControlSelect7" name="position">
                                            <option value="1" @if ($row->position == 1) active @endif>1
                                            </option>
                                            <option value="2" @if ($row->position == 2) active @endif>2
                                            </option>
                                            <option value="3" @if ($row->position == 3) active @endif>3
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="col-sm-9 offset-sm-3">
                                <button class="btn btn-primary" type="submit">Actualizar</button>
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
    @endpush
@endsection
