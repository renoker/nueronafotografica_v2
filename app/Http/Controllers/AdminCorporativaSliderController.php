<?php

namespace App\Http\Controllers;

use App\Models\AdminHomeSlider;
use Illuminate\Http\Request;

class AdminCorporativaSliderController extends Controller
{
    public function index()
    {
        $row = AdminHomeSlider::where('key', 'corporativa')->get();
        return view('backoffice.corporativa.slider.index', [
            'list'  => $row,
            'page'  => 'Slider',
            'rutaCreate'    => 'sliderCorporativa.create',
            'rutaDestroy'    => 'sliderCorporativa.destroy',
            'rutaEdit'    => 'sliderCorporativa.edit',
        ]);
    }

    public function create()
    {
        return view('backoffice.corporativa.slider.create', [
            'page'  => 'Slider',
            'rutaIndex'    => 'sliderCorporativa.index',
            'rutaStore'    => 'sliderCorporativa.store',
        ]);
    }

    // 34.227.28.196

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
                    return redirect()->route('sliderCorporativa.create')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('sliderCorporativa.create')->with('statusError', '¡Imagen no valida!');
            }
        }
        $row->key = 'corporativa';
        $row->href = 'corporativa.index';
        $row->es_title = $request->es_title;
        $row->es_description = $request->es_description;
        $row->es_button = $request->es_button;
        $row->en_title = $request->en_title;
        $row->en_description = $request->en_description;
        $row->en_button = $request->en_button;

        $row->save();

        return redirect()->route('sliderCorporativa.index')->with('statusAlta', '¡Fila creada de manera exitosa!');
    }

    public function edit(AdminHomeSlider $slider)
    {
        return view('backoffice.corporativa.slider.show', [
            'row' => $slider,
            'page'  => 'Slider',
            'rutaIndex'    => 'sliderCorporativa.index',
            'rutaUpdate'    => 'sliderCorporativa.update',
        ]);
    }

    public function update(Request $request, AdminHomeSlider $sliderCorporativa)
    {
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png', 'webp'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/home/slider'), $imageName);
                    $sliderCorporativa->image = 'assets/home/slider/' . $imageName;
                } else {
                    return redirect()->route('sliderCorporativa.show')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('sliderCorporativa.show')->with('statusError', '¡Imagen no valida!');
            }
        }
        $sliderCorporativa->es_title = $request->es_title;
        $sliderCorporativa->es_description = $request->es_description;
        $sliderCorporativa->es_button = $request->es_button;
        $sliderCorporativa->en_title = $request->en_title;
        $sliderCorporativa->en_description = $request->en_description;
        $sliderCorporativa->en_button = $request->en_button;

        $sliderCorporativa->save();

        return redirect()->route('sliderCorporativa.index')->with('statusAlta', '¡Fila actualizada de manera exitosa!');
    }

    public function destroy(AdminHomeSlider $slider)
    {
        $slider->delete();
        return redirect()->route('sliderCorporativa.index')->with('statusAlta', '¡Fila Borrada con éxito!');
    }
}
