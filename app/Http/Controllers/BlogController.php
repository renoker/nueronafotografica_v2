<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use App\Models\Category;
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
            'list' => $row,
            'page' => 'Blog'
        ]);
    }

    public function adminNotascreate()
    {
        $categorias = Category::all();
        return view('backoffice.blog.notas.create', [
            'categorias' => $categorias,
            'page' => 'Blog'
        ]);
    }

    public function adminNotasStore(Request $request)
    {
        $row = new Blog();
        $row->category_id = $request->category_id;
        if ($request->hasFile('miniatura')) {
            if ($request->file('miniatura')->isValid()) {
                if (in_array($request->file('miniatura')->extension(), ['jpg', 'jpeg', 'png'])) {
                    $imageName = time() . '.' . $request->miniatura->extension();
                    $request->miniatura->move(public_path('assets/blog'), $imageName);
                    $row->miniatura = 'assets/blog/' . $imageName;
                } else {
                    return redirect()->route('adminNotas.create')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('adminNotas.create')->with('statusError', '¡Imagen no valida!');
            }
        }
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/blog'), $imageName);
                    $row->image = 'assets/blog/' . $imageName;
                } else {
                    return redirect()->route('adminNotas.create')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('adminNotas.create')->with('statusError', '¡Imagen no valida!');
            }
        }
        $row->es_title = $request->es_title;
        $row->es_description_small = $request->es_description_small;
        $row->es_description = $request->es_description;
        $row->es_button = $request->es_button;
        $row->en_title = $request->en_title;
        $row->en_description_small = $request->en_description_small;
        $row->en_description = $request->en_description;
        $row->en_button = $request->en_button;

        $row->save();

        return redirect()->route('adminNotas.index')->with('statusAlta', '¡Fila creada de manera exitosa!');
    }

    public function adminNotasEdit(Blog $blog)
    {
        $categorias = Category::all();
        return view('backoffice.blog.notas.show', [
            'row'           => $blog,
            'categorias'    => $categorias,
            'page'          => 'Blog'
        ]);
    }

    public function adminNotasUpdate(Request $request, Blog $blog)
    {
        $blog->category_id = $request->category_id;
        if ($request->hasFile('miniatura')) {
            if ($request->file('miniatura')->isValid()) {
                if (in_array($request->file('miniatura')->extension(), ['jpg', 'jpeg', 'png'])) {
                    $imageName = time() . '.' . $request->miniatura->extension();
                    $request->miniatura->move(public_path('assets/blog'), $imageName);
                    $blog->miniatura = 'assets/blog/' . $imageName;
                } else {
                    return redirect()->route('adminNotas.create')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('adminNotas.create')->with('statusError', '¡Imagen no valida!');
            }
        }
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                if (in_array($request->file('image')->extension(), ['jpg', 'jpeg', 'png'])) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('assets/blog'), $imageName);
                    $blog->image = 'assets/blog/' . $imageName;
                } else {
                    return redirect()->route('adminNotas.create')->with('statusError', '¡Imagen no cumple con el formato!');
                }
            } else {
                return redirect()->route('adminNotas.create')->with('statusError', '¡Imagen no valida!');
            }
        }
        $blog->es_title = $request->es_title;
        $blog->es_description_small = $request->es_description_small;
        $blog->es_description = $request->es_description;
        $blog->es_button = $request->es_button;
        $blog->en_title = $request->en_title;
        $blog->en_description_small = $request->en_description_small;
        $blog->en_description = $request->en_description;
        $blog->en_button = $request->en_button;

        $blog->save();

        return redirect()->route('adminNotas.index')->with('statusAlta', '¡Fila actualizada de manera exitosa!');
    }

    public function adminNotasDelete(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('adminNotas.index')->with('statusAlta', '¡Fila Borrada con éxito!');
    }
}
