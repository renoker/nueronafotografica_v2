<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use App\Models\Translation;
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
    public function show(Blog $blog)
    {
        dd($blog);
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
}
