<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePersonalRequest;
use App\Http\Requests\UpdatePersonalRequest;
use App\Models\Personal;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $row = Personal::all();
        return view('backoffice.acerca_de.colaborador.index', [
            'list'  => $row,
            'page'  => 'Personal',
            'rutaCreate'    => 'personal.create',
            'rutaDestroy'    => 'personal.destroy',
            'rutaEdit'    => 'personal.edit',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.acerca_de.colaborador.create', [
            'page'  => 'Personal',
            'rutaIndex'    => 'personal.index',
            'rutaStore'    => 'personal.store',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePersonalRequest $request)
    {
        $row = new Personal;

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png', 'webp'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/home/slider'), $imageName);
                    $row->image = 'assets/home/slider/' . $imageName;
                } else {
                    return redirect()->route('personal.create')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('personal.create')->with('statusError', '¡Imagen no valida!');
            }
        }

        $row->name_es = $request->name_es;
        $row->ocupacion_es = $request->ocupacion_es;
        $row->description_es = $request->description_es;
        $row->name_en = $request->name_en;
        $row->ocupacion_en = $request->ocupacion_en;
        $row->description_en = $request->description_en;
        $row->lugar = $request->lugar;

        $row->save();

        return redirect()->route('personal.index')->with('statusAlta', '¡Fila creada de manera exitosa!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Personal $personal)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personal $personal)
    {
        return view('backoffice.acerca_de.colaborador.show', [
            'row' => $personal,
            'page'  => 'Personal',
            'rutaIndex'    => 'personal.index',
            'rutaUpdate'    => 'personal.update',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersonalRequest $request, Personal $personal)
    {

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png', 'webp'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/home/slider'), $imageName);
                    $personal->image = 'assets/home/slider/' . $imageName;
                } else {
                    return redirect()->route('personal.create')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('personal.create')->with('statusError', '¡Imagen no valida!');
            }
        }

        $personal->name_es = $request->name_es;
        $personal->ocupacion_es = $request->ocupacion_es;
        $personal->description_es = $request->description_es;
        $personal->name_en = $request->name_en;
        $personal->ocupacion_en = $request->ocupacion_en;
        $personal->description_en = $request->description_en;
        $personal->lugar = $request->lugar;

        $personal->save();

        return redirect()->route('personal.index')->with('statusAlta', '¡Fila actualizada de manera exitosa!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personal $personal)
    {
        $personal->delete();
        return redirect()->route('personal.index')->with('statusAlta', '¡Fila Borrada con éxito!');
    }
}
