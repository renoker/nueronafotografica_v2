<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ArquitecturaController extends Controller
{
    public function index($language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }

        if ($language == 'es') {
        } elseif ($language == 'en') {
        } else {
        }

        return view('pages.arquitectura',);
    }
}
