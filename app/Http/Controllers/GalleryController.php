<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Translation;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }

        if ($language == 'es') {
            $traslate = Translation::select(['translate_es AS title'])->where('key', 'galeria')->where('page', 'Galeria')->get();
        } elseif ($language == 'en') {
            $traslate = Translation::select(['translate_en AS title'])->where('key', 'galeria')->where('page', 'Galeria')->get();
        } else {
            $traslate = Translation::select(['translate_es AS title'])->where('key', 'galeria')->where('page', 'Galeria')->get();
        }

        $gallery = Gallery::orderBy('order', 'asc')->get();
        return view('pages.galeria', [
            'list'          => $gallery,
            'traslate'      => $traslate,
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
    public function store(StoreGalleryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        //
    }

    // ------------------------------------------------------------------------------------------------------------------------------                        ------------------------------------------------------------------------------------------------------------------------------
    // ------------------------------------------------------------------------------------------------------------------------------  PANEL ADMINISTRACIÖN  ------------------------------------------------------------------------------------------------------------------------------
    // ------------------------------------------------------------------------------------------------------------------------------                        ------------------------------------------------------------------------------------------------------------------------------

    public function backofficeIndex()
    {
        $gallery = Gallery::orderBy('order', 'asc')->get();
        return view('backoffice.galeria.list.index', [
            'page'          => 'Galería',
            'rutaCreate'    => 'backoffice_gallery.create',
            'rutaDestroy'   => 'backoffice_gallery.destroy',
            'rutaEdit'      => 'backoffice_gallery.edit',
            'list'          => $gallery,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function backofficeEdit(Gallery $gallery)
    {
        $categorias = Category::all();
        return view('backoffice.galeria.list.show', [
            'page'          => 'Galería',
            'rutaIndex'    => 'backoffice_gallery.index',
            'rutaUpdate'   => 'backoffice_gallery.update',
            'row'          => $gallery,
            'categorias'    => $categorias
        ]);
    }

    public function backofficeUpdate(Request $request, Gallery $gallery)
    {
        $gallery->category_id = $request->category_id;

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/galeria'), $imageName);
                    $gallery->image = 'assets/galeria/' . $imageName;
                } else {
                    return redirect()->route('backoffice_gallery.create')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('backoffice_gallery.create')->with('statusError', '¡Imagen no valida!');
            }
        }

        $gallery->name = $request->name;

        $gallery->save();

        return redirect()->route('backoffice_gallery.index')->with('statusAlta', '¡Fila actualizada de manera exitosa!');
    }

    public function backofficeCreate()
    {
        $categorias = Category::all();
        return view('backoffice.galeria.list.create', [
            'page'          => 'Galería',
            'rutaIndex'    => 'backoffice_gallery.index',
            'rutaStore'   => 'backoffice_gallery.store',
            'categorias'    => $categorias
        ]);
    }

    public function backofficeStore(StoreGalleryRequest $request)
    {
        $count = Gallery::all();
        $row = new Gallery();
        $row->category_id = $request->category_id;

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/galeria'), $imageName);
                    $row->image = 'assets/galeria/' . $imageName;
                } else {
                    return redirect()->route('backoffice_gallery.create')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('backoffice_gallery.create')->with('statusError', '¡Imagen no valida!');
            }
        }
        $row->order = count($count) + 1;
        $row->name = $request->name;

        $row->save();

        return redirect()->route('backoffice_gallery.index')->with('statusAlta', '¡Fila creada de manera exitosa!');
    }

    public function backofficeDestroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('backoffice_gallery.index')->with('statusAlta', '¡Fila borrada de manera exitosa!');
    }

    public function moveRowGallery(Request $request)
    {
        if ($request->button == 'up') {
            $changePosition = Gallery::where('order', $request->order)->first();
            $changePosition->order = $request->order + 1;
            $changePosition->save();

            $row = Gallery::find($request->id);
            $row->order = $request->order;
            $row->save();
        } elseif ($request->button == 'down') {
            $changePosition = Gallery::where('order', $request->order)->first();
            $changePosition->order = $request->order - 1;
            $changePosition->save();

            $row = Gallery::find($request->id);
            $row->order = $request->order;
            $row->save();
        }
        return Response(['response' => $changePosition], 200);
    }
}
