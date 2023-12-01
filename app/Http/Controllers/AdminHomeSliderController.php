<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminHomeSliderRequest;
use App\Http\Requests\UpdateAdminHomeSliderRequest;
use App\Models\AdminHomeSlider;

class AdminHomeSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $row = AdminHomeSlider::where('key', 'home')->get();
        return view('backoffice.home.slider.index', [
            'list' => $row
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.home.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdminHomeSliderRequest $request)
    {
        $row = new AdminHomeSlider;

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png', 'webp'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/home/slider'), $imageName);
                    $row->image = 'assets/home/slider/' . $imageName;
                } else {
                    return redirect()->route('slider.create')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('slider.create')->with('statusError', '¡Imagen no valida!');
            }
        }
        $row->key = 'home';
        $row->href = 'arquitectura.index';
        $row->es_title = $request->es_title;
        $row->es_description = $request->es_description;
        $row->es_button = $request->es_button;
        $row->en_title = $request->en_title;
        $row->en_description = $request->en_description;
        $row->en_button = $request->en_button;

        $row->save();

        return redirect()->route('slider.index')->with('statusAlta', '¡Fila creada de manera exitosa!');
    }

    /**
     * Display the specified resource.
     */
    public function show(AdminHomeSlider $slider)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminHomeSlider $slider)
    {
        return view('backoffice.home.slider.show', [
            'row' => $slider
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdminHomeSliderRequest $request, AdminHomeSlider $slider)
    {
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png', 'webp'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/home/slider'), $imageName);
                    $slider->image = 'assets/home/slider/' . $imageName;
                } else {
                    return redirect()->route('slider.show')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('slider.show')->with('statusError', '¡Imagen no valida!');
            }
        }
        $slider->es_title = $request->es_title;
        $slider->es_description = $request->es_description;
        $slider->es_button = $request->es_button;
        $slider->en_title = $request->en_title;
        $slider->en_description = $request->en_description;
        $slider->en_button = $request->en_button;

        $slider->save();

        return redirect()->route('slider.index')->with('statusAlta', '¡Fila actualizada de manera exitosa!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminHomeSlider $slider)
    {
        $slider->delete();
        return redirect()->route('slider.index')->with('statusAlta', '¡Fila Borrada con éxito!');
    }
}
