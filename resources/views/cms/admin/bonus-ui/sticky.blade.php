@extends('cms.layouts.admin.master')

@section('title')
    Sticky
    Nuerona
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('cms_assets/css/sticky.css') }}">
@endpush

@section('content')
    @component('cms.components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>Sticky</h3>
        @endslot
        <li class="breadcrumb-item">Advance</li>
        <li class="breadcrumb-item active">Sticky</li>
    @endcomponent

    <div class="container-fluid">
        <div class="row sticky-header-main">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Sticky Note <a class="btn btn-primary pull-right m-l-10" id="add_new" href="javascript:;">Add
                                New Note</a></h5>
                    </div>
                    <div class="card-body">
                        <div class="sticky-note" id="board"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('cms_assets/js/jquery.ui.min.js') }}"></script>
        <script src="{{ asset('cms_assets/js/sticky/sticky.js') }}"></script>
    @endpush
@endsection
