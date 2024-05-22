<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaperRequest;
use App\Http\Requests\UpdatePaperRequest;
use App\Models\Paper;

class PaperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $row = Paper::all();
        return view('backoffice.galeria.papel.index', [
            'list'  => $row,
            'page'  => 'Papel',
            'rutaCreate'    => 'paper.create',
            'rutaDestroy'    => 'paper.destroy',
            'rutaEdit'    => 'paper.edit',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.galeria.papel.create', [
            'page'  => 'Papel',
            'rutaIndex'    => 'paper.index',
            'rutaStore'    => 'paper.store',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaperRequest $request)
    {
        $row = new Paper;
        $row->paper = $request->paper;
        $row->save();
        return redirect()->route('paper.index')->with('statusAlta', '¡Fila agregada de manera exitosa!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Paper $paper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paper $paper)
    {
        return view('backoffice.galeria.papel.show', [
            'row'  => $paper,
            'page'  => 'Papel',
            'rutaIndex'    => 'paper.index',
            'rutaUpdate'    => 'paper.update',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaperRequest $request, Paper $paper)
    {
        $paper->paper = $request->paper;
        $paper->save();
        return redirect()->route('paper.index')->with('statusAlta', '¡Fila actualizada de manera exitosa!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paper $paper)
    {
        $paper->delete();
        return redirect()->route('paper.index')->with('statusAlta', '¡Fila Borrada con éxito!');
    }
}
