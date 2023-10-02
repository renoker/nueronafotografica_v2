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
    public function store(StoreTranslationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Translation $translation)
    {
        //
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Translation $translation)
    {
        //
    }
}
