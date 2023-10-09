<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminHomeDespegableRequest;
use App\Http\Requests\UpdateAdminHomeDespegableRequest;
use App\Models\AdminHomeDespegable;

class AdminHomeDespegableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $row = AdminHomeDespegable::all();
        return view('backoffice.home.desplegable.index', [
            'list' => $row
        ]);
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
    public function store(StoreAdminHomeDespegableRequest $request)
    {
        $row = new AdminHomeDespegable;

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/home/desplegable'), $imageName);
                    $row->image = 'assets/home/desplegable/' . $imageName;
                } else {
                    return redirect()->route('desplegable.create')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('desplegable.create')->with('statusError', '¡Imagen no valida!');
            }
        }
        $row->es_title = $request->es_title;
        $row->es_button = $request->es_button;
        $row->en_title = $request->en_title;
        $row->en_button = $request->en_button;

        $row->save();

        return redirect()->route('despregable.index')->with('statusAlta', '¡Fila creada de manera exitosa!');
    }

    /**
     * Display the specified resource.
     */
    public function show(AdminHomeDespegable $adminHomeDespegable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminHomeDespegable $despregable)
    {
        return view('backoffice.home.desplegable.show', [
            'row' => $despregable
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdminHomeDespegableRequest $request, AdminHomeDespegable $despregable)
    {
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/home/desplegable'), $imageName);
                    $despregable->image = 'assets/home/desplegable/' . $imageName;
                } else {
                    return redirect()->route('desplegable.show')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('desplegable.show')->with('statusError', '¡Imagen no valida!');
            }
        }
        $despregable->es_title = $request->es_title;
        $despregable->es_button = $request->es_button;
        $despregable->en_title = $request->en_title;
        $despregable->en_button = $request->en_button;

        $despregable->save();

        return redirect()->route('despregable.index')->with('statusAlta', '¡Fila actualizada de manera exitosa!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminHomeDespegable $despregable)
    {
        $despregable->delete();
        return redirect()->route('despregable.index')->with('statusAlta', '¡Fila Borrada con éxito!');
    }
}
