<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGaleriaBlogRequest;
use App\Http\Requests\UpdateGaleriaBlogRequest;
use App\Models\GaleriaBlog;

class GaleriaBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $row = GaleriaBlog::all();
        return view('backoffice.galeria.categoria.index', [
            'list'  => $row,
            'page'  => 'Categoría',
            'rutaCreate'    => 'galeria_blog.create',
            'rutaDestroy'    => 'galeria_blog.destroy',
            'rutaEdit'    => 'galeria_blog.edit',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.galeria.categoria.create', [
            'page'  => 'Categoría',
            'rutaIndex'    => 'galeria_blog.index',
            'rutaStore'    => 'galeria_blog.store',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGaleriaBlogRequest $request)
    {
        $row = new GaleriaBlog;
        $row->category_es = $request->category_es;
        $row->category_en = $request->category_en;
        $row->save();
        return redirect()->route('galeria_blog.index')->with('statusAlta', '¡Fila agregada de manera exitosa!');
    }

    /**
     * Display the specified resource.
     */
    public function show(GaleriaBlog $galeria_blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GaleriaBlog $galeria_blog)
    {
        return view('backoffice.galeria.categoria.show', [
            'row'  => $galeria_blog,
            'page'  => 'Categorías',
            'rutaIndex'    => 'galeria_blog.index',
            'rutaUpdate'    => 'galeria_blog.update',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGaleriaBlogRequest $request, GaleriaBlog $galeria_blog)
    {
        $galeria_blog->category_es = $request->category_es;
        $galeria_blog->category_en = $request->category_en;
        $galeria_blog->save();
        return redirect()->route('galeria_blog.index')->with('statusAlta', '¡Fila actualizada de manera exitosa!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GaleriaBlog $galeria_blog)
    {
        $galeria_blog->delete();
        return redirect()->route('galeria_blog.index')->with('statusAlta', '¡Fila Borrada con éxito!');
    }
}
