<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFinishRequest;
use App\Http\Requests\UpdateFinishRequest;
use App\Models\Finish;

class FinishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $row = Finish::all();
        return view('backoffice.galeria.acabado.index', [
            'list'  => $row,
            'page'  => 'Acabados',
            'rutaCreate'    => 'finish.create',
            'rutaDestroy'    => 'finish.destroy',
            'rutaEdit'    => 'finish.edit',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.galeria.acabado.create', [
            'page'  => 'Acabados',
            'rutaIndex'    => 'finish.index',
            'rutaStore'    => 'finish.store',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFinishRequest $request)
    {
        $row = new Finish;
        $row->finish = $request->finish;
        $row->save();
        return redirect()->route('finish.index')->with('statusAlta', '¡Fila agregada de manera exitosa!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Finish $finish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Finish $finish)
    {
        return view('backoffice.galeria.acabado.show', [
            'row'  => $finish,
            'page'  => 'Acabados',
            'rutaIndex'    => 'finish.index',
            'rutaUpdate'    => 'finish.update',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFinishRequest $request, Finish $finish)
    {
        $finish->finish = $request->finish;
        $finish->save();
        return redirect()->route('finish.index')->with('statusAlta', '¡Fila actualizada de manera exitosa!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Finish $finish)
    {
        $finish->delete();
        return redirect()->route('finish.index')->with('statusAlta', '¡Fila Borrada con éxito!');
    }
}
