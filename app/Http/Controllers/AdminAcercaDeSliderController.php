<?php

namespace App\Http\Controllers;

use App\Models\AdminHomeSlider;
use Illuminate\Http\Request;

class AdminAcercaDeSliderController extends Controller
{
    public function index()
    {
        $row = AdminHomeSlider::where('key', 'acerca_de')->get();
        return view('backoffice.acerca_de.slider.index', [
            'list'  => $row,
            'page'  => 'Slider',
            'rutaCreate'    => 'sliderAcercaDe.create',
            'rutaDestroy'    => 'sliderAcercaDe.destroy',
            'rutaEdit'    => 'sliderAcercaDe.edit',
        ]);
    }

    public function create()
    {
        return view('backoffice.acerca_de.slider.create', [
            'page'  => 'Slider',
            'rutaIndex'    => 'sliderAcercaDe.index',
            'rutaStore'    => 'sliderAcercaDe.store',
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
                    return redirect()->route('sliderAcercaDe.create')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('sliderAcercaDe.create')->with('statusError', '¡Imagen no valida!');
            }
        }
        $row->key = 'acerca_de';
        $row->href = 'acerca_de.index';
        $row->es_title = $request->es_title;
        $row->es_description = $request->es_description;
        $row->es_button = $request->es_button;
        $row->en_title = $request->en_title;
        $row->en_description = $request->en_description;
        $row->en_button = $request->en_button;

        $row->save();

        return redirect()->route('sliderAcercaDe.index')->with('statusAlta', '¡Fila creada de manera exitosa!');
    }

    public function edit(AdminHomeSlider $slider)
    {
        return view('backoffice.acerca_de.slider.show', [
            'row' => $slider,
            'page'  => 'Slider',
            'rutaIndex'    => 'sliderAcercaDe.index',
            'rutaUpdate'    => 'sliderAcercaDe.update',
        ]);
    }

    public function update(Request $request, AdminHomeSlider $sliderAcercaDe)
    {
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png', 'webp'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/home/slider'), $imageName);
                    $sliderAcercaDe->image = 'assets/home/slider/' . $imageName;
                } else {
                    return redirect()->route('sliderAcercaDe.show')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('sliderAcercaDe.show')->with('statusError', '¡Imagen no valida!');
            }
        }
        $sliderAcercaDe->es_title = $request->es_title;
        $sliderAcercaDe->es_description = $request->es_description;
        $sliderAcercaDe->es_button = $request->es_button;
        $sliderAcercaDe->en_title = $request->en_title;
        $sliderAcercaDe->en_description = $request->en_description;
        $sliderAcercaDe->en_button = $request->en_button;

        $sliderAcercaDe->save();

        return redirect()->route('sliderAcercaDe.index')->with('statusAlta', '¡Fila actualizada de manera exitosa!');
    }

    public function destroy(AdminHomeSlider $slider)
    {
        $slider->delete();
        return redirect()->route('sliderAcercaDe.index')->with('statusAlta', '¡Fila Borrada con éxito!');
    }
}
