<?php

namespace App\Http\Controllers;

use App\Models\AdminHomeSlider;
use Illuminate\Http\Request;

class AdminConstruccionSliderController extends Controller
{

    public function index()
    {
        $row = AdminHomeSlider::where('key', 'construccion')->get();
        return view('backoffice.construccion.slider.index', [
            'list'  => $row,
            'page'  => 'Slider',
            'rutaCreate'    => 'sliderConstruccion.create',
            'rutaDestroy'    => 'sliderConstruccion.destroy',
            'rutaEdit'    => 'sliderConstruccion.edit',
        ]);
    }

    public function create()
    {
        return view('backoffice.construccion.slider.create', [
            'page'  => 'Slider',
            'rutaIndex'    => 'sliderConstruccion.index',
            'rutaStore'    => 'sliderConstruccion.store',
        ]);
    }

    public function store(Request $request)
    {
        $row = new AdminHomeSlider;

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png', 'webp'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/home/slider'), $imageName);
                    $row->image = 'assets/home/slider/' . $imageName;
                } else {
                    return redirect()->route('sliderConstruccion.create')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('sliderConstruccion.create')->with('statusError', '¡Imagen no valida!');
            }
        }
        $row->key = 'construccion';
        $row->href = 'construccion.index';
        $row->es_title = $request->es_title;
        $row->es_description = $request->es_description;
        $row->es_button = $request->es_button;
        $row->en_title = $request->en_title;
        $row->en_description = $request->en_description;
        $row->en_button = $request->en_button;

        $row->save();

        return redirect()->route('sliderConstruccion.index')->with('statusAlta', '¡Fila creada de manera exitosa!');
    }

    public function edit(AdminHomeSlider $slider)
    {
        return view('backoffice.construccion.slider.show', [
            'row' => $slider,
            'page'  => 'Slider',
            'rutaIndex'    => 'sliderConstruccion.index',
            'rutaUpdate'    => 'sliderConstruccion.update',
        ]);
    }

    public function update(Request $request, AdminHomeSlider $sliderConstruccion)
    {
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png', 'webp'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/home/slider'), $imageName);
                    $sliderConstruccion->image = 'assets/home/slider/' . $imageName;
                } else {
                    return redirect()->route('sliderConstruccion.show')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('sliderConstruccion.show')->with('statusError', '¡Imagen no valida!');
            }
        }
        $sliderConstruccion->es_title = $request->es_title;
        $sliderConstruccion->es_description = $request->es_description;
        $sliderConstruccion->es_button = $request->es_button;
        $sliderConstruccion->en_title = $request->en_title;
        $sliderConstruccion->en_description = $request->en_description;
        $sliderConstruccion->en_button = $request->en_button;

        $sliderConstruccion->save();

        return redirect()->route('sliderConstruccion.index')->with('statusAlta', '¡Fila actualizada de manera exitosa!');
    }

    public function destroy(AdminHomeSlider $sliderConstruccion)
    {
        $sliderConstruccion->delete();
        return redirect()->route('sliderConstruccion.index')->with('statusAlta', '¡Fila Borrada con éxito!');
    }
}
