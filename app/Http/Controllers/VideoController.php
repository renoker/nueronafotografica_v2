<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use App\Models\AdminHomeSlider;
use App\Models\Translation;
use App\Models\Video;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class VideoController extends Controller
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
            $slider_top = AdminHomeSlider::select(['id', 'href', 'image', 'es_title AS title', 'es_description AS description', 'es_button AS button',])->where('key', 'videos')->get();
            $traslate = Translation::select(['translate_es AS title'])->where('key', 'videos')->where('page', 'Videos')->get();
            $traslateContact = Translation::select(['translate_es AS title'])->where('key', 'contactanos')->get();
            $list = Video::select(['id', 'name', 'image', 'url', 'order'])->orderBy('order', 'asc')->get();
        } elseif ($language == 'en') {
            $slider_top = AdminHomeSlider::select(['id', 'href', 'image', 'en_title AS title', 'en_description AS description', 'en_button AS button',])->where('key', 'videos')->get();
            $traslate = Translation::select(['translate_en AS title'])->where('key', 'videos')->where('page', 'Videos')->get();
            $traslateContact = Translation::select(['translate_en AS title'])->where('key', 'contactanos')->get();
            $list = Video::select(['id', 'name_en AS name', 'image', 'url', 'order'])->orderBy('order', 'asc')->get();
        } else {
            $slider_top = AdminHomeSlider::select(['id', 'href', 'image', 'es_title AS title', 'es_description AS description', 'es_button AS button',])->where('key', 'videos')->get();
            $traslate = Translation::select(['translate_es AS title'])->where('key', 'videos')->where('page', 'Videos')->get();
            $traslateContact = Translation::select(['translate_es AS title'])->where('key', 'contactanos')->get();
            $list = Video::select(['id', 'name', 'image', 'url', 'order'])->orderBy('order', 'asc')->get();
        }

        return view('pages.video', [
            'list'                  => $list,
            'slider_top'            => $slider_top,
            'traslate'              => $traslate,
            'traslateContact'       => $traslateContact,
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
    public function store(StoreVideoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVideoRequest $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        //
    }

    // PANEL

    public function adminVideoIndex()
    {
        $row = Video::orderBy('order', 'asc')->get();
        return view('backoffice.videos.reels.index', [
            'list'  => $row,
            'page'  => 'Videos',
            'rutaCreate'    => 'adminVideo.create',
            'rutaDestroy'   => 'adminVideo.delete',
            'rutaEdit'      => 'adminVideo.edit',
            'list'          => $row,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function adminVideocreate()
    {
        return view('backoffice.videos.reels.create', [
            'page'  => 'Videos',
            'rutaIndex' => 'adminVideo.index',
            'rutaStore' => 'adminVideo.store',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function adminVideoStore(Request $request)
    {
        $count = Video::all();
        $row = new Video;

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png', 'webp'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/poster'), $imageName);
                    $row->image = 'assets/poster/' . $imageName;
                } else {
                    return redirect()->route('adminVideo.create')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('adminVideo.create')->with('statusError', '¡Imagen no valida!');
            }
        }
        $row->url = $request->url;
        $row->name = $request->name;
        $row->name_en = $request->name_en;
        $row->order = count($count) + 1;

        $row->save();

        return redirect()->route('adminVideo.index')->with('statusAlta', '¡Fila creada de manera exitosa!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function adminVideoEdit(Video $video)
    {
        return view('backoffice.videos.reels.show', [
            'row' => $video,
            'page'  => 'Videos',
            'rutaIndex' => 'adminVideo.index',
            'rutaUpdate' => 'adminVideo.update',
        ]);
    }

    public function adminVideoUpdate(Request $request, Video $video)
    {

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png', 'webp'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/poster'), $imageName);
                    $video->image = 'assets/poster/' . $imageName;
                } else {
                    return redirect()->route('adminVideo.edit')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('adminVideo.edit')->with('statusError', '¡Imagen no valida!');
            }
        }
        $video->url = $request->url;
        $video->name = $request->name;
        $video->name_en = $request->name_en;

        $video->save();

        return redirect()->route('adminVideo.index')->with('statusAlta', '¡Fila creada de manera exitosa!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function adminVideoDelete(Video $video)
    {
        $video->delete();
        return redirect()->route('adminVideo.index')->with('statusAlta', '¡Fila Borrada con éxito!');
    }


    public function moveRowVideo(Request $request)
    {
        if ($request->button == 'up') {
            $changePosition = Video::where('order', $request->order)->first();
            $changePosition->order = $request->order + 1;
            $changePosition->save();

            $row = Video::find($request->id);
            $row->order = $request->order;
            $row->save();
        } elseif ($request->button == 'down') {
            $changePosition = Video::where('order', $request->order)->first();
            $changePosition->order = $request->order - 1;
            $changePosition->save();

            $row = Video::find($request->id);
            $row->order = $request->order;
            $row->save();
        }
        return Response(['response' => $changePosition], 200);
    }
}
