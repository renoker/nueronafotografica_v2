@extends('cms.layouts.admin.master')

@section('title')
    NeuronaForográfica - Banner desplegable
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('cms_assets/css/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('cms_assets/css/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('cms_assets/css/rating.css') }}">
@endpush

@section('content')
    @component('cms.components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>Banner desplegable</h3>
        @endslot
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item active">Banner desplegable</li>
        @slot('add_row')
            <li><a href="{{ route('despregable.create') }}" data-container="body" data-bs-toggle="popover" data-placement="top"
                    title="" data-original-title="Tables"><i data-feather="plus"></i></a></li>
        @endslot
    @endcomponent

    <div class="container-fluid list-products">
        <div class="row">
            <!-- Individual column searching (text inputs) Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Lista - Banner desplegable</h5>
                        <span>
                            Home
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive product-table">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Titulo</th>
                                        <th>Titulo botón</th>
                                        <th>Fecha</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list as $item)
                                        <tr>
                                            <td>
                                                <img src="{{ asset($item->image) }}" alt="" />
                                            </td>
                                            <td>
                                                <span>{{ $item->es_title }}</span>
                                            </td>
                                            <td>{{ $item->es_button }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td class="d-flex justify-content-between">
                                                <form action="{{ route('despregable.destroy', $item) }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger btn-xs" type="submit"
                                                        data-original-title="btn btn-danger btn-xs"
                                                        title="">Borrar</button>
                                                </form>
                                                <a href="{{ route('despregable.edit', $item) }}">
                                                    <button class="btn btn-primary btn-xs" type="button"
                                                        data-original-title="btn btn-danger btn-xs"
                                                        title="">Editar</button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Individual column searching (text inputs) Ends-->
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('cms_assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('cms_assets/js/rating/jquery.barrating.js') }}"></script>
        <script src="{{ asset('cms_assets/js/rating/rating-script.js') }}"></script>
        <script src="{{ asset('cms_assets/js/owlcarousel/owl.carousel.js') }}"></script>
        <script src="{{ asset('cms_assets/js/ecommerce.js') }}"></script>
        <script src="{{ asset('cms_assets/js/product-list-custom.js') }}"></script>
    @endpush
@endsection
