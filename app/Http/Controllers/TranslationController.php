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
    // CONSTRACCION
    public function indexConstruccion()
    {
        $list = Translation::where('key', 'construccion')->get();
        return view('backoffice.construccion.traduccion.index', [
            'list' => $list,
            'page' => 'Traducción',
            'rutaIndex'  => 'translateConstruccion.index',
            'rutaEdit'  => 'translateConstruccion.edit'
        ]);
    }

    public function editConstruccion(Translation $translation)
    {
        return view('backoffice.construccion.traduccion.show', [
            'row' => $translation,
            'page' => 'Traducción',
            'rutaIndex'  => 'translateConstruccion.index',
            'rutaEdit'  => 'translateConstruccion.edit'
        ]);
    }
    // CORPORATIVA
    public function indexCorporativa()
    {
        $list = Translation::where('key', 'corporativa')->get();
        return view('backoffice.corporativa.traduccion.index', [
            'list' => $list,
            'page' => 'Traducción',
            'rutaIndex'  => 'translateCorporativa.index',
            'rutaEdit'  => 'translateCorporativa.edit'
        ]);
    }

    public function editCorporativa(Translation $translation)
    {
        return view('backoffice.corporativa.traduccion.show', [
            'row' => $translation,
            'page' => 'Traducción',
            'rutaIndex'  => 'translateCorporativa.index',
            'rutaEdit'  => 'translateCorporativa.edit'
        ]);
    }
    public function updateCorporativa(UpdateTranslationRequest $request, Translation $translation)
    {
        $translation->translate_es = $request->translate_es;
        $translation->translate_en = $request->translate_en;
        $translation->save();
        return back()->withInput();
    }
    // PUBLICITARIA
    public function indexPublicitaria()
    {
        $list = Translation::where('key', 'publicitaria')->get();
        return view('backoffice.publicitaria.traduccion.index', [
            'list' => $list,
            'page' => 'Traducción',
            'rutaIndex'  => 'translatePublicitaria.index',
            'rutaEdit'  => 'translatePublicitaria.edit'
        ]);
    }

    public function editPublicitaria(Translation $translation)
    {
        return view('backoffice.publicitaria.traduccion.show', [
            'row' => $translation,
            'page' => 'Traducción',
            'rutaIndex'  => 'translatePublicitaria.index',
            'rutaEdit'  => 'translatePublicitaria.edit'
        ]);
    }
    public function updatePublicitaria(UpdateTranslationRequest $request, Translation $translation)
    {
        $translation->translate_es = $request->translate_es;
        $translation->translate_en = $request->translate_en;
        $translation->save();
        return back()->withInput();
    }
    // CONTACTO
    public function indexContacto()
    {
        $list = Translation::where('key', 'contacto')->get();
        return view('backoffice.contacto.traduccion.index', [
            'list' => $list,
            'page' => 'Traducción',
            'rutaIndex'  => 'translateContacto.index',
            'rutaEdit'  => 'translateContacto.edit'
        ]);
    }

    public function editContacto(Translation $translation)
    {
        return view('backoffice.contacto.traduccion.show', [
            'row' => $translation,
            'page' => 'Traducción',
            'rutaIndex'  => 'translateContacto.index',
            'rutaEdit'  => 'translateContacto.edit'
        ]);
    }
    public function updateContacto(UpdateTranslationRequest $request, Translation $translation)
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
