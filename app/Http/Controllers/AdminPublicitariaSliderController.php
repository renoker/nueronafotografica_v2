<?php

namespace App\Http\Controllers;

use App\Models\AdminHomeSlider;
use Illuminate\Http\Request;

class AdminPublicitariaSliderController extends Controller
{
    public function index()
    {
        $row = AdminHomeSlider::where('key', 'publicitaria')->get();
        return view('backoffice.publicitaria.slider.index', [
            'list'  => $row,
            'page'  => 'Slider',
            'rutaCreate'    => 'sliderPublicitaria.create',
            'rutaDestroy'    => 'sliderPublicitaria.destroy',
            'rutaEdit'    => 'sliderPublicitaria.edit',
        ]);
    }

    public function create()
    {
        return view('backoffice.publicitaria.slider.create', [
            'page'  => 'Slider',
            'rutaIndex'    => 'sliderPublicitaria.index',
            'rutaStore'    => 'sliderPublicitaria.store',
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
                    return redirect()->route('sliderPublicitaria.create')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('sliderPublicitaria.create')->with('statusError', '¡Imagen no valida!');
            }
        }
        $row->key = 'publicitaria';
        $row->href = 'publicitaria.index';
        $row->es_title = $request->es_title;
        $row->es_description = $request->es_description;
        $row->es_button = $request->es_button;
        $row->en_title = $request->en_title;
        $row->en_description = $request->en_description;
        $row->en_button = $request->en_button;

        $row->save();

        return redirect()->route('sliderPublicitaria.index')->with('statusAlta', '¡Fila creada de manera exitosa!');
    }

    public function edit(AdminHomeSlider $slider)
    {
        return view('backoffice.publicitaria.slider.show', [
            'row' => $slider,
            'page'  => 'Slider',
            'rutaIndex'    => 'sliderPublicitaria.index',
            'rutaUpdate'    => 'sliderPublicitaria.update',
        ]);
    }

    public function update(Request $request, AdminHomeSlider $sliderPublicitarium)
    {
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png', 'webp'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/home/slider'), $imageName);
                    $sliderPublicitarium->image = 'assets/home/slider/' . $imageName;
                } else {
                    return redirect()->route('sliderPublicitaria.show')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('sliderPublicitaria.show')->with('statusError', '¡Imagen no valida!');
            }
        }
        $sliderPublicitarium->es_title = $request->es_title;
        $sliderPublicitarium->es_description = $request->es_description;
        $sliderPublicitarium->es_button = $request->es_button;
        $sliderPublicitarium->en_title = $request->en_title;
        $sliderPublicitarium->en_description = $request->en_description;
        $sliderPublicitarium->en_button = $request->en_button;

        $sliderPublicitarium->save();

        return redirect()->route('sliderPublicitaria.index')->with('statusAlta', '¡Fila actualizada de manera exitosa!');
    }

    public function destroy(AdminHomeSlider $slider)
    {
        $slider->delete();
        return redirect()->route('sliderPublicitaria.index')->with('statusAlta', '¡Fila Borrada con éxito!');
    }
}
