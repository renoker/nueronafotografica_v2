@extends('cms.layouts.admin.master')

@section('title')
    NeuronaForográfica - Registros
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
    @endcomponent

    <div class="container-fluid list-products">
        <div class="row">
            <!-- Individual column searching (text inputs) Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>{{ $page }}</h5>
                        <button id="delete-selected" class="btn btn-danger btn-xs" type="button">Borrar
                            Seleccionados</button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive product-table">
                            <form id="bulk-delete-form" action="{{ route('galeriaData.bulkDestroy') }}" method="post">
                                @csrf
                                @method('DELETE')
                                <table class="display" id="basic-1">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" id="select-all"></th>
                                            <th>Fecha</th>
                                            <th>Nombre Cliente</th>
                                            <th>Email Cliente</th>
                                            <th>Foto Galería</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($list as $item)
                                            <tr>
                                                <td><input type="checkbox" name="selected_ids[]"
                                                        value="{{ $item->id }}"></td>
                                                <td>{{ $item->formatted_created_at }}</td>
                                                <td>{{ $item->name_cliente }}</td>
                                                <td>{{ $item->email_cliente }}</td>
                                                <td>
                                                    <img src="{{ asset($item->image) }}" alt=""
                                                        style="width: 200px" />
                                                </td>
                                                <td class="d-flex justify-content-between">
                                                    <form action="{{ route('galeriaData.destroy', $item) }}" method="post"
                                                        id="delete_{{ $item->id }}">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn btn-danger btn-xs" type="button"
                                                            onclick="deleteRow({{ $item->id }})"
                                                            data-original-title="btn btn-danger btn-xs"
                                                            title="">Borrar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </form>
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
        <script>
            document.getElementById('select-all').addEventListener('change', function() {
                let checkboxes = document.querySelectorAll('input[name="selected_ids[]"]');
                checkboxes.forEach((checkbox) => {
                    checkbox.checked = this.checked;
                });
            });

            document.getElementById('delete-selected').addEventListener('click', function() {
                Swal.fire({
                    title: '¿Quieres eliminar las filas seleccionadas?',
                    text: "Todos los movimientos realizados son irreversibles!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, borrar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById("bulk-delete-form").submit();
                    }
                })
            });
        </script>
    @endpush
@endsection
