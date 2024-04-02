<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminHomeSliderRequest;
use App\Http\Requests\UpdateAdminVideosSliderRequest;
use App\Models\AdminHomeSlider;
use Illuminate\Http\Request;

class AdminVideosSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $row = AdminHomeSlider::where('key', 'videos')->get();
        return view('backoffice.videos.slider.index', [
            'list' => $row
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.videos.slider.create');
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
                    return redirect()->route('sliderVideos.create')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('sliderVideos.create')->with('statusError', '¡Imagen no valida!');
            }
        }
        $row->key = 'videos';
        $row->href = 'videos.index';
        $row->es_title = $request->es_title;
        $row->es_description = $request->es_description;
        $row->es_button = $request->es_button;
        $row->en_title = $request->en_title;
        $row->en_description = $request->en_description;
        $row->en_button = $request->en_button;

        $row->save();

        return redirect()->route('sliderVideos.index')->with('statusAlta', '¡Fila creada de manera exitosa!');
    }

    /**
     * Display the specified resource.
     */
    public function show(AdminHomeSlider $sliderVideo)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminHomeSlider $slider)
    {
        return view('backoffice.videos.slider.show', [
            'row' => $slider
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdminVideosSliderRequest $request, AdminHomeSlider $sliderVideo)
    {
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png', 'webp'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/home/slider'), $imageName);
                    $sliderVideo->image = 'assets/home/slider/' . $imageName;
                } else {
                    return redirect()->route('sliderVideos.show')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('sliderVideos.show')->with('statusError', '¡Imagen no valida!');
            }
        }
        $sliderVideo->es_title = $request->es_title;
        $sliderVideo->es_description = $request->es_description;
        $sliderVideo->es_button = $request->es_button;
        $sliderVideo->en_title = $request->en_title;
        $sliderVideo->en_description = $request->en_description;
        $sliderVideo->en_button = $request->en_button;

        $sliderVideo->save();

        return redirect()->route('sliderVideos.index')->with('statusAlta', '¡Fila actualizada de manera exitosa!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminHomeSlider $sliderVideo)
    {
        $sliderVideo->delete();
        return redirect()->route('sliderVideos.index')->with('statusAlta', '¡Fila Borrada con éxito!');
    }
}
