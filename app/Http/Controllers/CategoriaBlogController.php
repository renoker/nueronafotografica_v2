<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoriaBlogRequest;
use App\Http\Requests\UpdateCategoriaBlogRequest;
use App\Models\CategoriaBlog;

class CategoriaBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $row = CategoriaBlog::all();
        return view('backoffice.blog.categoria.index', [
            'list'  => $row,
            'page'  => 'Categoría',
            'rutaCreate'    => 'category_blog.create',
            'rutaDestroy'    => 'category_blog.destroy',
            'rutaEdit'    => 'category_blog.edit',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.blog.categoria.create', [
            'page'  => 'Categoría',
            'rutaIndex'    => 'category_blog.index',
            'rutaStore'    => 'category_blog.store',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoriaBlogRequest $request)
    {
        $row = new CategoriaBlog;
        $row->category_es = $request->category_es;
        $row->category_en = $request->category_en;
        $row->save();
        return redirect()->route('category_blog.index')->with('statusAlta', '¡Fila agregada de manera exitosa!');
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoriaBlog $categoriaBlog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoriaBlog $category_blog)
    {
        return view('backoffice.blog.categoria.show', [
            'row'  => $category_blog,
            'page'  => 'Categorías',
            'rutaIndex'    => 'category_blog.index',
            'rutaUpdate'    => 'category_blog.update',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoriaBlogRequest $request, CategoriaBlog $category_blog)
    {
        $category_blog->category_es = $request->category_es;
        $category_blog->category_en = $request->category_en;
        $category_blog->save();
        return redirect()->route('category_blog.index')->with('statusAlta', '¡Fila actualizada de manera exitosa!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoriaBlog $category_blog)
    {
        $category_blog->delete();
        return redirect()->route('category_blog.index')->with('statusAlta', '¡Fila Borrada con éxito!');
    }
}
