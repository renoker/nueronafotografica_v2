<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSizeRequest;
use App\Http\Requests\UpdateSizeRequest;
use App\Models\Size;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $row = Size::all();
        return view('backoffice.galeria.tamanio.index', [
            'list'  => $row,
            'page'  => 'Tamaños',
            'rutaCreate'    => 'size.create',
            'rutaDestroy'    => 'size.destroy',
            'rutaEdit'    => 'size.edit',
        ]);
        // $size = Size::all();
        // return Response(['response' => $size, 'count' => count($size)], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.galeria.tamanio.create', [
            'page'  => 'Tamaños',
            'rutaIndex'    => 'size.index',
            'rutaStore'    => 'size.store',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSizeRequest $request)
    {
        $row = new Size;
        $row->size = $request->size;
        $row->save();
        return redirect()->route('size.index')->with('statusAlta', '¡Fila agregada de manera exitosa!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Size $size)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Size $size)
    {
        return view('backoffice.galeria.tamanio.show', [
            'row'  => $size,
            'page'  => 'Tamaños',
            'rutaIndex'    => 'size.index',
            'rutaUpdate'    => 'size.update',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSizeRequest $request, Size $size)
    {
        $size->size = $request->size;
        $size->save();
        return redirect()->route('size.index')->with('statusAlta', '¡Fila actualizada de manera exitosa!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Size $size)
    {
        $size->delete();
        return redirect()->route('size.index')->with('statusAlta', '¡Fila Borrada con éxito!');
    }
}
