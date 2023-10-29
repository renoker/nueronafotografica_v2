@extends('cms.layouts.admin.master')

@section('title')
@endsection

@push('css')
@endpush

@section('content')
    @component('cms.components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>Traducción</h3>
        @endslot
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('translateHome.index') }}">Tradución</a></li>

        <li class="breadcrumb-item active">Actualizacion</li>
    @endcomponent

    <div class="container-fluid">
        <form class="form theme-form" action="{{ route('translateHome.update', $row) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5>Español</h5>
                        </div>
                        <div class="card-body">
                            <textarea id="editor1" name="translate_es" cols="30" rows="10">
                                {{ $row->translate_es }}
                            </textarea>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5>Ingles</h5>
                        </div>
                        <div class="card-body">
                            <textarea id="editor2" name="translate_en" cols="30" rows="10">
                                {{ $row->translate_en }}
                            </textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <div class="col-sm-9 offset-sm-3 pt-4 pb-4">
                        <button class="btn btn-primary" type="submit">Actualizar</button>
                        <a href="{{ route('translateHome.index') }}"><input class="btn btn-light" type="button"
                                value="Cancelar" /></a>
                    </div>
                </div>
            </div>

        </form>
    </div>


    @push('scripts')
        <script src="{{ asset('cms_assets/js/editor/ckeditor/ckeditor.js') }}"></script>
        <script src="{{ asset('cms_assets/js/editor/ckeditor/adapters/jquery.js') }}"></script>
        <script src="{{ asset('cms_assets/js/editor/ckeditor/styles.js') }}"></script>
        <script src="{{ asset('cms_assets/js/editor/ckeditor/ckeditor.custom.js') }}"></script>
    @endpush
@endsection
