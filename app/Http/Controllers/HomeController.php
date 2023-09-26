<?php

namespace App\Http\Controllers;

use App\Models\AdminHomeSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index($language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }

        if ($language == 'es') {
            $slider_top = AdminHomeSlider::select(['id', 'image', 'es_title AS title', 'es_description AS description', 'es_button AS button',])->get();
        } elseif ($language == 'en') {
            $slider_top = AdminHomeSlider::select(['id', 'image', 'en_title AS title', 'en_description AS description', 'en_button AS button',])->get();
        } else {
            $slider_top = AdminHomeSlider::select(['id', 'image', 'es_title AS title', 'es_description AS description', 'es_button AS button',])->get();
        }

        return view('pages.home', [
            'slider_top' => $slider_top
        ]);
    }
}
