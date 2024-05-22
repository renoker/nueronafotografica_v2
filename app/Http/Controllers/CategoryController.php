<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $row = Category::all();
        return view('backoffice.categorias.index', [
            'list'  => $row,
            'page'  => 'Categorías Generales',
            'rutaCreate'    => 'category.create',
            'rutaDestroy'    => 'category.destroy',
            'rutaEdit'    => 'category.edit',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.categorias.create', [
            'page'  => 'Categorías Generales',
            'rutaIndex'    => 'category.index',
            'rutaStore'    => 'category.store',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $row = new Category;
        $row->name = $request->name;
        $row->is_active = 1;
        $row->save();
        return redirect()->route('category.index')->with('statusAlta', '¡Fila agregada de manera exitosa!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('backoffice.categorias.show', [
            'row'  => $category,
            'page'  => 'Categorías Generales',
            'rutaIndex'    => 'category.index',
            'rutaUpdate'    => 'category.update',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->name = $request->name;
        $category->save();
        return redirect()->route('category.index')->with('statusAlta', '¡Fila actualizada de manera exitosa!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with('statusAlta', '¡Fila Borrada con éxito!');
    }
}
