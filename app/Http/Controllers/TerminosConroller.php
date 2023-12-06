<?php

namespace App\Http\Controllers;

use App\Models\Translation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TerminosConroller extends Controller
{
    public function index($language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }

        if ($language == 'es') {
            $traslate = Translation::select(['translate_es AS title'])->where('key', 'blog')->where('page', 'Blog')->get();
        } elseif ($language == 'en') {
            $traslate = Translation::select(['translate_en AS title'])->where('key', 'blog')->where('page', 'Blog')->get();
        } else {
            $traslate = Translation::select(['translate_es AS title'])->where('key', 'blog')->where('page', 'Blog')->get();
        }

        return view('pages.tyc', [
            'traslate'  => $traslate,
        ]);
    }
}
