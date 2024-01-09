<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminHomePartnersRequest;
use App\Http\Requests\UpdateAdminHomePartnersRequest;
use App\Models\AdminHomePartners;
use Illuminate\Http\Request;

class AdminHomePartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $row = AdminHomePartners::orderBy('order', 'asc')->get();
        return view('backoffice.home.partners.index', [
            'list'  => $row,
            'page'  => 'Partners',
            'rutaCreate'    => 'partners.create',
            'rutaDestroy'    => 'partners.destroy',
            'rutaEdit'    => 'partners.edit',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.home.partners.create', [
            'page'  => 'Partners',
            'rutaIndex'    => 'partners.index',
            'rutaStore'    => 'partners.store',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAdminHomePartnersRequest $request)
    {
        $partners = AdminHomePartners::all();
        $row = new AdminHomePartners;
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png', 'webp'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/home/partners'), $imageName);
                    $row->image = 'assets/home/partners/' . $imageName;
                } else {
                    return redirect()->route('partners.create')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('partners.create')->with('statusError', '¡Imagen no valida!');
            }
        }
        $row->order = count($partners) + 1;
        $row->save();

        return redirect()->route('partners.index')->with('statusAlta', '¡Fila creada de manera exitosa!');
    }

    /**
     * Display the specified resource.
     */
    public function show(AdminHomePartners $adminHomePartners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AdminHomePartners $partner)
    {
        return view('backoffice.home.partners.show', [
            'row'   => $partner,
            'page'  => 'Partners',
            'rutaIndex'    => 'partners.index',
            'rutaUpdate'    => 'partners.update',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdminHomePartnersRequest $request, AdminHomePartners $partner)
    {
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png', 'webp'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/home/partners'), $imageName);
                    $partner->image = 'assets/home/partners/' . $imageName;
                } else {
                    return redirect()->route('partners.create')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('partners.create')->with('statusError', '¡Imagen no valida!');
            }
        }
        $partner->save();

        return redirect()->route('partners.index')->with('statusAlta', '¡Fila actualizada de manera exitosa!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminHomePartners $partner)
    {
        $partner->delete();
        return redirect()->route('partners.index')->with('statusAlta', '¡Fila Borrada con éxito!');
    }

    public function movePartners(Request $request)
    {
        if ($request->button == 'up') {
            $changePosition = AdminHomePartners::where('order', $request->order)->first();
            $changePosition->order = $request->order + 1;
            $changePosition->save();

            $row = AdminHomePartners::find($request->id);
            $row->order = $request->order;
            $row->save();
        } elseif ($request->button == 'down') {
            $changePosition = AdminHomePartners::where('order', $request->order)->first();
            $changePosition->order = $request->order - 1;
            $changePosition->save();

            $row = AdminHomePartners::find($request->id);
            $row->order = $request->order;
            $row->save();
        }
        return Response(['response' => $changePosition], 200);
    }
}
