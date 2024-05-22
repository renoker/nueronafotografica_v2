@extends('cms.layouts.admin.master')

@section('title')
    NeuronaForográfica - {{ $page }}
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('cms_assets/css/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('cms_assets/css/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('cms_assets/css/rating.css') }}">
@endpush

@section('content')
    @component('cms.components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>{{ $page }}</h3>
        @endslot
        <li class="breadcrumb-item"><a href="">Home</a></li>
        <li class="breadcrumb-item active">{{ $page }}</li>
        @slot('add_row')
            <li><a href="{{ route($rutaCreate) }}" data-container="body" data-bs-toggle="popover" data-placement="top"
                    title="" data-original-title="Tables"><i data-feather="plus"></i></a></li>
        @endslot
    @endcomponent

    <div class="container-fluid list-products">
        <div class="row">
            <!-- Individual column searching (text inputs) Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>{{ $page }}</h5>
                        <span>
                            Lista
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive product-table">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Acabado Español</th>
                                        <th>Acabado Ingles</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list as $item)
                                        <tr>
                                            <td>
                                                {{ $item->id }}
                                            </td>
                                            <td>
                                                <span>{{ $item->finish_es }}</span>
                                            </td>
                                            <td>
                                                <span>{{ $item->finish_en }}</span>
                                            </td>
                                            <td class="d-flex justify-content-between">
                                                <form action="{{ route($rutaDestroy, $item) }}" method="post"
                                                    id="delete_{{ $item->id }}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger btn-xs" type="button"
                                                        onclick="deleteRow({{ $item->id }})"
                                                        data-original-title="btn btn-danger btn-xs"
                                                        title="">Borrar</button>
                                                </form>
                                                <a href="{{ route($rutaEdit, $item) }}">
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

    <script>
        const deleteRow = (id) => {
            Swal.fire({
                title: '¿Quieres eliminar esta fila?',
                text: "Todos los movimientos realizados son irreversibles!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borrar'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById("delete_" + id).submit();
                }
            })
        }
    </script>

    @push('scripts')
        <script src="{{ asset('cms_assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('cms_assets/js/rating/jquery.barrating.js') }}"></script>
        <script src="{{ asset('cms_assets/js/rating/rating-script.js') }}"></script>
        <script src="{{ asset('cms_assets/js/owlcarousel/owl.carousel.js') }}"></script>
        <script src="{{ asset('cms_assets/js/ecommerce.js') }}"></script>
        <script src="{{ asset('cms_assets/js/product-list-custom.js') }}"></script>
    @endpush
@endsection
