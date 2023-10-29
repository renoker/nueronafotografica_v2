<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTranslationRequest;
use App\Http\Requests\UpdateTranslationRequest;
use App\Models\Translation;

class TranslationController extends Controller
{

    // HOME
    public function indexHome()
    {
        $list = Translation::where('key', 'home')->get();
        return view('backoffice.home.traduccion.index', [
            'list' => $list
        ]);
    }

    public function editHome(Translation $translation)
    {
        return view('backoffice.home.traduccion.show', [
            'row' => $translation
        ]);
    }

    public function updateHome(UpdateTranslationRequest $request, Translation $translation)
    {
        $translation->translate_es = $request->translate_es;
        $translation->translate_en = $request->translate_en;
        $translation->save();
        return back()->withInput();
    }
    // ARQUITECTURA
    public function indexArquitectura()
    {
        $list = Translation::where('key', 'arquitectura')->get();
        return view('backoffice.arquitectura.traduccion.index', [
            'list' => $list,
            'page' => 'Traducción',
            'rutaIndex'  => 'translateArquitectura.index',
            'rutaEdit'  => 'translateArquitectura.edit'
        ]);
    }

    public function editArquitectura(Translation $translation)
    {
        return view('backoffice.arquitectura.traduccion.show', [
            'row' => $translation,
            'page' => 'Traducción',
            'rutaIndex'  => 'translateArquitectura.index',
            'rutaEdit'  => 'translateArquitectura.edit'
        ]);
    }

    public function updateArquitectura(UpdateTranslationRequest $request, Translation $translation)
    {
        $translation->translate_es = $request->translate_es;
        $translation->translate_en = $request->translate_en;
        $translation->save();
        return back()->withInput();
    }
    // BLOG
    public function indexBlog()
    {
        $list = Translation::where('key', 'blog')->get();
        return view('backoffice.blog.traduccion.index', [
            'list' => $list
        ]);
    }

    public function editBlog(Translation $translation)
    {
        return view('backoffice.blog.traduccion.show', [
            'row' => $translation
        ]);
    }

    public function updateBlog(UpdateTranslationRequest $request, Translation $translation)
    {
        $translation->translate_es = $request->translate_es;
        $translation->translate_en = $request->translate_en;
        $translation->save();
        return back()->withInput();
    }
}
