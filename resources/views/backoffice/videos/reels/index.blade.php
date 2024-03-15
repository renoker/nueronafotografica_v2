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
                                        <th>Imagen</th>
                                        <th>Video</th>
                                        <th>Titulo</th>
                                        <th>Orden</th>
                                        <th>Mover</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list as $item)
                                        <tr>
                                            <td>
                                                <img src="{{ url($item->image) }}" style="width: 200px; height: 100px"
                                                    alt="">
                                            </td>
                                            <td>
                                                <iframe width="200" height="100"
                                                    src="https://www.youtube.com/embed/{{ $item->url }}"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                    allowfullscreen></iframe>
                                            </td>
                                            <td>
                                                <span>{{ $item->name }}</span>
                                            </td>
                                            <td>
                                                <span>{{ $item->order }}</span>
                                            </td>
                                            <td style="width: 30px">
                                                <div class="d-grid gap-2 col-6 mx-auto">
                                                    <button class="btn btn-outline-secondary" type="button"
                                                        onclick="upRow({{ $item->id }}, {{ $item->order }})"><i
                                                            class="icon-arrow-up"></i></button>
                                                    <button class="btn btn-outline-secondary" type="button"
                                                        onclick="downRow({{ $item->id }}, {{ $item->order }})"><i
                                                            class="icon-arrow-down"></i></button>
                                                </div>
                                            </td>
                                            <td class="d-flex justify-content-between">
                                                <form action="{{ route($rutaDestroy, $item) }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger btn-xs" type="submit"
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
        <script src="{{ asset('cms_assets/js/product-list-galeria.js') }}"></script>

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

                fetch("/backoffice/videos/move_row_video", requestOptions)
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

                fetch("/backoffice/videos/move_row_video", requestOptions)
                    .then(response => response.text())
                    .then(result => {
                        location.reload()
                    })
                    .catch(error => console.log('error', error));
            }
        </script>
    @endpush
@endsection
