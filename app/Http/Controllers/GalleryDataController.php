<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoregalleryDataRequest;
use App\Http\Requests\UpdategalleryDataRequest;
use App\Models\galleryData;
use Illuminate\Http\Request;

class GalleryDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoregalleryDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(galleryData $galleryData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(galleryData $galleryData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdategalleryDataRequest $request, galleryData $galleryData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyGaleriaData(galleryData $gallery_data)
    {
        $gallery_data->delete();
        return redirect()->route('galeriaData.index')->with('statusAlta', '¡Fila Borrada con éxito!');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listadoGaleriaData()
    {
        $contactos = galleryData::all();
        return view('backoffice.galeria.index', [
            'list'    => $contactos,
            'page'  => 'Listado de Contactos',
        ]);
    }

    public function bulkDestroy(Request $request)
    {
        $ids = $request->input('selected_ids');
        if ($ids) {
            galleryData::whereIn('id', $ids)->delete();
        }

        return redirect()->route('galeriaData.index')->with('statusAlta', 'Registro eliminados correctamente.');
    }
}
