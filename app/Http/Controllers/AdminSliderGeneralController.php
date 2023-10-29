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
        $row_uno = AdminSliderGeneral::where('position', 1)->where('key', 'home')->orderBy('order', 'asc')->get();
        $row_dos = AdminSliderGeneral::where('position', 2)->where('key', 'home')->orderBy('order', 'asc')->get();
        $row_tres = AdminSliderGeneral::where('position', 3)->where('key', 'home')->orderBy('order', 'asc')->get();
        return view('backoffice.home.slider_general.index', [
            'slider_uno' => $row_uno,
            'slider_dos' => $row_dos,
            'slider_tres' => $row_tres,
            'page' => 'Slider Generales'
        ]);
    }

    public function createHome()
    {
        return view('backoffice.home.slider_general.create', [
            'page' => 'Slider Generales'
        ]);
    }

    public function storeHome(StoreAdminSliderGeneralRequest $request)
    {
        $sliders = AdminSliderGeneral::where('position', $request->position)->where('key', 'home')->get();
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

    public function editHome(AdminSliderGeneral $admin_slider_general)
    {
        return view('backoffice.home.slider_general.show', [
            'row'   => $admin_slider_general,
            'page' => 'Slider Generales'
        ]);
    }

    public function updateHome(UpdateAdminSliderGeneralRequest $request, AdminSliderGeneral $admin_slider_general)
    {
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/sliders_generales'), $imageName);
                    $admin_slider_general->image = 'assets/sliders_generales/' . $imageName;
                } else {
                    return redirect()->route('admin_slider_general.editHome')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('admin_slider_general.editHome')->with('statusError', '¡Imagen no valida!');
            }
        }
        $admin_slider_general->position = $request->position;

        $admin_slider_general->save();

        return redirect()->route('admin_slider_general.indexHome')->with('statusAlta', '¡Fila creada de manera exitosa!');
    }

    public function destroyHome(AdminSliderGeneral $adminSliderGeneral)
    {
        //
    }

    // ARQUITECTURA
    public function indexArq()
    {
        $row_uno = AdminSliderGeneral::where('position', 1)->where('key', 'arquitectura')->orderBy('order', 'asc')->get();
        $row_dos = AdminSliderGeneral::where('position', 2)->where('key', 'arquitectura')->orderBy('order', 'asc')->get();
        $row_tres = AdminSliderGeneral::where('position', 3)->where('key', 'arquitectura')->orderBy('order', 'asc')->get();
        $row_cuatro = AdminSliderGeneral::where('position', 4)->where('key', 'arquitectura')->orderBy('order', 'asc')->get();
        $row_cinco = AdminSliderGeneral::where('position', 5)->where('key', 'arquitectura')->orderBy('order', 'asc')->get();
        $row_seis = AdminSliderGeneral::where('position', 6)->where('key', 'arquitectura')->orderBy('order', 'asc')->get();
        return view('backoffice.arquitectura.slider_general.index', [
            'slider_uno' => $row_uno,
            'slider_dos' => $row_dos,
            'slider_tres' => $row_tres,
            'slider_cuatro' => $row_cuatro,
            'slider_cinco' => $row_cinco,
            'slider_seis' => $row_seis,
            'rutaCreate'    => 'arquitectura_slider_general.create',
            'rutaEdit'    => 'arquitectura_slider_general.edit',
            'rutaIndex'    => 'arquitectura_slider_general.index',
            'rutaDestroy'    => 'arquitectura_slider_general.destroy',
            'page' => 'Slider Generales'
        ]);
    }

    public function createArq()
    {
        return view('backoffice.arquitectura.slider_general.create', [
            'page' => 'Slider Generales',
            'rutaIndex'    => 'arquitectura_slider_general.index',
            'rutaStore'    => 'arquitectura_slider_general.store',
        ]);
    }

    public function storeArq(StoreAdminSliderGeneralRequest $request)
    {
        $sliders = AdminSliderGeneral::where('position', $request->position)->where('key', 'arquitectura')->get();
        $row = new AdminSliderGeneral;
        $row->key = 'arquitectura';
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/sliders_generales'), $imageName);
                    $row->image = 'assets/sliders_generales/' . $imageName;
                } else {
                    return redirect()->route('arquitectura_slider_general.create')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('arquitectura_slider_general.create')->with('statusError', '¡Imagen no valida!');
            }
        }
        $row->position = $request->position;
        $row->order = count($sliders) + 1;

        $row->save();

        return redirect()->route('arquitectura_slider_general.index')->with('statusAlta', '¡Fila creada de manera exitosa!');
    }

    public function editArq(AdminSliderGeneral $admin_slider_general)
    {
        return view('backoffice.arquitectura.slider_general.show', [
            'row'   => $admin_slider_general,
            'page' => 'Slider Generales',
            'rutaIndex'    => 'arquitectura_slider_general.index',
            'rutaUpdate'    => 'arquitectura_slider_general.update',
        ]);
    }

    public function updateArq(UpdateAdminSliderGeneralRequest $request, AdminSliderGeneral $admin_slider_general)
    {
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/sliders_generales'), $imageName);
                    $admin_slider_general->image = 'assets/sliders_generales/' . $imageName;
                } else {
                    return redirect()->route('arquitectura_slider_general.create')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('arquitectura_slider_general.create')->with('statusError', '¡Imagen no valida!');
            }
        }
        $admin_slider_general->position = $request->position;

        $admin_slider_general->save();

        return redirect()->route('arquitectura_slider_general.index')->with('statusAlta', '¡Fila creada de manera exitosa!');
    }

    public function destroyArq(AdminSliderGeneral $admin_slider_general)
    {
        $admin_slider_general->delete();
        return redirect()->route('arquitectura_slider_general.index')->with('statusAlta', '¡Fila Borrada con éxito!');
    }

    // CONSTRACCION
    public function indexConstruccion()
    {
        $row_uno = AdminSliderGeneral::where('position', 1)->where('key', 'construccion')->orderBy('order', 'asc')->get();
        $row_dos = AdminSliderGeneral::where('position', 2)->where('key', 'construccion')->orderBy('order', 'asc')->get();
        $row_tres = AdminSliderGeneral::where('position', 3)->where('key', 'construccion')->orderBy('order', 'asc')->get();
        $row_cuatro = AdminSliderGeneral::where('position', 4)->where('key', 'construccion')->orderBy('order', 'asc')->get();
        $row_cinco = AdminSliderGeneral::where('position', 5)->where('key', 'construccion')->orderBy('order', 'asc')->get();
        return view('backoffice.construccion.slider_general.index', [
            'slider_uno' => $row_uno,
            'slider_dos' => $row_dos,
            'slider_tres' => $row_tres,
            'slider_cuatro' => $row_cuatro,
            'slider_cinco' => $row_cinco,
            'rutaCreate'    => 'construccion_slider_general.create',
            'rutaEdit'    => 'construccion_slider_general.edit',
            'rutaIndex'    => 'construccion_slider_general.index',
            'rutaDestroy'    => 'construccion_slider_general.destroy',
            'page' => 'Slider Generales'
        ]);
    }

    public function createConstruccion()
    {
        return view('backoffice.construccion.slider_general.create', [
            'page' => 'Slider Generales',
            'rutaIndex'    => 'construccion_slider_general.index',
            'rutaStore'    => 'construccion_slider_general.store',
        ]);
    }

    public function storeConstruccion(StoreAdminSliderGeneralRequest $request)
    {
        $sliders = AdminSliderGeneral::where('position', $request->position)->where('key', 'construccion')->get();
        $row = new AdminSliderGeneral;
        $row->key = 'construccion';
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/sliders_generales'), $imageName);
                    $row->image = 'assets/sliders_generales/' . $imageName;
                } else {
                    return redirect()->route('construccion_slider_general.create')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('construccion_slider_general.create')->with('statusError', '¡Imagen no valida!');
            }
        }
        $row->position = $request->position;
        $row->order = count($sliders) + 1;

        $row->save();

        return redirect()->route('construccion_slider_general.index')->with('statusAlta', '¡Fila creada de manera exitosa!');
    }

    public function editConstruccion(AdminSliderGeneral $admin_slider_general)
    {
        return view('backoffice.construccion.slider_general.show', [
            'row'   => $admin_slider_general,
            'page' => 'Slider Generales',
            'rutaIndex'    => 'construccion_slider_general.index',
            'rutaUpdate'    => 'construccion_slider_general.update',
        ]);
    }

    public function updateConstruccion(UpdateAdminSliderGeneralRequest $request, AdminSliderGeneral $admin_slider_general)
    {
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/sliders_generales'), $imageName);
                    $admin_slider_general->image = 'assets/sliders_generales/' . $imageName;
                } else {
                    return redirect()->route('construccion_slider_general.create')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('construccion_slider_general.create')->with('statusError', '¡Imagen no valida!');
            }
        }
        $admin_slider_general->position = $request->position;

        $admin_slider_general->save();

        return redirect()->route('construccion_slider_general.index')->with('statusAlta', '¡Fila creada de manera exitosa!');
    }

    public function destroyConstruccion(AdminSliderGeneral $admin_slider_general)
    {
        $admin_slider_general->delete();
        return redirect()->route('construccion_slider_general.index')->with('statusAlta', '¡Fila Borrada con éxito!');
    }

    public function moveRowSlider(Request $request)
    {
        if ($request->button == 'up') {
            $changePosition = AdminSliderGeneral::where('position', $request->position)->where('order', $request->order)->where('key', $request->pantalla)->first();
            $changePosition->order = $request->order + 1;
            $changePosition->save();

            $row = AdminSliderGeneral::find($request->id);
            $row->order = $request->order;
            $row->save();
        } elseif ($request->button == 'down') {
            $changePosition = AdminSliderGeneral::where('position', $request->position)->where('order', $request->order)->where('key', $request->pantalla)->first();
            $changePosition->order = $request->order - 1;
            $changePosition->save();

            $row = AdminSliderGeneral::find($request->id);
            $row->order = $request->order;
            $row->save();
        }
        return Response(['response' => $changePosition], 200);
    }
}
