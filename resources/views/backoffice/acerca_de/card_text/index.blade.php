@extends('cms.layouts.admin.master')
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('title')
    {{ $page }} - Listado
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
        <li class="breadcrumb-item"><a href="">{{ $page }}</a></li>
        <li class="breadcrumb-item active">Listado</li>
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
                    <div class="card-body">
                        <div class="table-responsive product-table">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>Orden</th>
                                        <th>Nombre</th>
                                        <th>Ocupación</th>
                                        <th>Descripción</th>
                                        <th>Mover</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cardText as $item)
                                        <tr>
                                            <td>
                                                <span>{{ $item->order }}</span>
                                            </td>
                                            <td>
                                                <span>{{ $item->name_es }}</span>
                                            </td>
                                            <td>{{ $item->ocupacion_es }}</td>
                                            <td>{{ $item->description_es }}</td>
                                            <td>
                                                <div class="d-grid gap-2">
                                                    <button class="btn btn-success" type="button"
                                                        onclick="upRow({{ $item->id }}, {{ $item->order }})"><i
                                                            class="icon-arrow-up"></i></button>
                                                    <button class="btn btn-success" type="button"
                                                        onclick="downRow({{ $item->id }}, {{ $item->order }})"><i
                                                            class="icon-arrow-down"></i></button>
                                                </div>
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

    @push('scripts')
        <script src="{{ asset('cms_assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('cms_assets/js/rating/jquery.barrating.js') }}"></script>
        <script src="{{ asset('cms_assets/js/rating/rating-script.js') }}"></script>
        <script src="{{ asset('cms_assets/js/owlcarousel/owl.carousel.js') }}"></script>
        <script src="{{ asset('cms_assets/js/ecommerce.js') }}"></script>
        <script src="{{ asset('cms_assets/js/product-list-custom.js') }}"></script>

        <script>
            const upRow = (id, order) => {

                var myHeaders = new Headers();
                myHeaders.append("Accept", "application/json");
                myHeaders.append("X-CSRF-TOKEN", document.querySelector('meta[name="csrf-token"]').getAttribute('content'));


                var formdata = new FormData();
                formdata.append("id", id);
                formdata.append("order", order - 1);
                formdata.append("button", 'up');

                var requestOptions = {
                    method: 'POST',
                    headers: myHeaders,
                    body: formdata,
                    redirect: 'follow'
                };

                fetch("/backoffice/move_row_card_text", requestOptions)
                    .then(response => response.text())
                    .then(result => {
                        location.reload()
                    })
                    .catch(error => console.log('error', error));
            }

            const downRow = (id, order) => {
                var myHeaders = new Headers();
                myHeaders.append("Accept", "application/json");
                myHeaders.append("X-CSRF-TOKEN", document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

                var formdata = new FormData();
                formdata.append("id", id);
                formdata.append("order", order + 1);
                formdata.append("button", 'down');

                var requestOptions = {
                    method: 'POST',
                    headers: myHeaders,
                    body: formdata,
                    redirect: 'follow'
                };

                fetch("/backoffice/move_row_card_text", requestOptions)
                    .then(response => response.text())
                    .then(result => {
                        location.reload()
                    })
                    .catch(error => console.log('error', error));
            }

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
    @endpush
@endsection
