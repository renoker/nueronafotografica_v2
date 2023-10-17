<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminSliderGeneralRequest;
use App\Http\Requests\UpdateAdminSliderGeneralRequest;
use App\Models\AdminSliderGeneral;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;

class AdminSliderGeneralController extends Controller
{
    // HOME
    public function indexHome()
    {
        $row_uno = AdminSliderGeneral::where('position', 1)->orderBy('order', 'asc')->get();
        $row_dos = AdminSliderGeneral::where('position', 2)->orderBy('order', 'asc')->get();
        $row_tres = AdminSliderGeneral::where('position', 3)->orderBy('order', 'asc')->get();
        return view('backoffice.home.slider_general.index', [
            'slider_uno' => $row_uno,
            'slider_dos' => $row_dos,
            'slider_tres' => $row_tres,
        ]);
    }

    public function createHome()
    {
        return view('backoffice.home.slider_general.create');
    }

    public function storeHome(StoreAdminSliderGeneralRequest $request)
    {
        $sliders = AdminSliderGeneral::where('position', $request->position)->get();
        $row = new AdminSliderGeneral;
        $row->key = 'home';
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/sliders_generales'), $imageName);
                    $row->image = 'assets/sliders_generales/' . $imageName;
                } else {
                    return redirect()->route('admin_slider_general.createHome')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('admin_slider_general.createHome')->with('statusError', '¡Imagen no valida!');
            }
        }
        $row->position = $request->position;
        $row->order = count($sliders) + 1;

        $row->save();

        return redirect()->route('admin_slider_general.indexHome')->with('statusAlta', '¡Fila creada de manera exitosa!');
    }

    /**
     * Display the specified resource.
     */
    public function show(AdminSliderGeneral $adminSliderGeneral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminSliderGeneral $adminSliderGeneral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdminSliderGeneralRequest $request, AdminSliderGeneral $adminSliderGeneral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminSliderGeneral $adminSliderGeneral)
    {
        //
    }

    public function moveRowSlider(Request $request)
    {
        if ($request->button == 'up') {
            $changePosition = AdminSliderGeneral::where('position', $request->position)->where('order', $request->order)->first();
            $changePosition->order = $request->order + 1;
            $changePosition->save();

            $row = AdminSliderGeneral::find($request->id);
            $row->order = $request->order;
            $row->save();
        } elseif ($request->button == 'down') {
            $changePosition = AdminSliderGeneral::where('position', $request->position)->where('order', $request->order)->first();
            $changePosition->order = $request->order - 1;
            $changePosition->save();

            $row = AdminSliderGeneral::find($request->id);
            $row->order = $request->order;
            $row->save();
        }
        return Response(['response' => $changePosition], 200);
    }
}
