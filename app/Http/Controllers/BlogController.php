<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use App\Models\Translation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class BlogController extends Controller
{
    public function index($language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }

        if ($language == 'es') {
            $blog = Blog::select(['id', 'miniatura', 'es_title AS title', 'es_description_small AS descripcion_small', 'es_button AS button'])->get();
            $traslate = Translation::select(['translate_es AS title'])->where('key', 'blog')->where('page', 'Blog')->get();
        } elseif ($language == 'en') {
            $blog = Blog::select(['id', 'miniatura', 'en_title AS title', 'en_description_small AS descripcion_small', 'en_button AS button'])->get();
            $traslate = Translation::select(['translate_en AS title'])->where('key', 'blog')->where('page', 'Blog')->get();
        } else {
            $blog = Blog::select(['id', 'miniatura', 'es_title AS title', 'es_description_small AS descripcion_small', 'es_button AS button'])->get();
            $traslate = Translation::select(['translate_es AS title'])->where('key', 'blog')->where('page', 'Blog')->get();
        }

        return view('pages.blog', [
            'traslate'  => $traslate,
            'list'      => $blog
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
    public function store(StoreBlogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog, $language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }

        if ($language == 'es') {
            $row = Blog::select(['id', 'miniatura', 'image', 'es_title AS title', 'es_description_small AS descripcion_small', 'es_description AS description', 'es_button AS button'])->where('id', $blog->id)->first();
            $traslate = Translation::select(['translate_es AS title'])->where('key', 'blog')->where('page', 'Blog')->get();
        } elseif ($language == 'en') {
            $row = Blog::select(['id', 'miniatura', 'image', 'en_title AS title', 'en_description_small AS descripcion_small', 'en_description AS description', 'en_button AS button'])->where('id', $blog->id)->first();
            $traslate = Translation::select(['translate_en AS title'])->where('key', 'blog')->where('page', 'Blog')->get();
        } else {
            $row = Blog::select(['id', 'miniatura', 'image', 'es_title AS title', 'es_description_small AS descripcion_small', 'es_description AS description', 'es_button AS button'])->where('id', $blog->id)->first();
            $traslate = Translation::select(['translate_es AS title'])->where('key', 'blog')->where('page', 'Blog')->get();
        }

        return view('pages.detalle', [
            'row' => $row,
            'traslate'  => $traslate,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }


    // -------------------------------------------------------------- PANEL ----------------------------------------------------------------

    public function adminNotasIndex()
    {
        $row = Blog::all();
        return view('backoffice.blog.notas.index', [
            'list' => $row
        ]);
    }

    public function adminNotascreate()
    {
        return view('backoffice.blog.notas.create');
    }

    public function storeHome(Request $request)
    {
        $row = new Blog();
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

        $row->save();

        return redirect()->route('admin_slider_general.indexHome')->with('statusAlta', '¡Fila creada de manera exitosa!');
    }
}
