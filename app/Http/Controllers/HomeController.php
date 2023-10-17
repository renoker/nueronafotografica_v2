<?php

namespace App\Http\Controllers;

use App\Models\AdminHomeDespegable;
use App\Models\AdminHomePartners;
use App\Models\AdminHomeSlider;
use App\Models\AdminSliderGeneral;
use App\Models\Translation;
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
            $traslate = Translation::select(['translate_es AS title'])->where('key', 'home')->where('page', 'Home')->get();
            $desplegable = AdminHomeDespegable::select(['id', 'href', 'image', 'es_title AS title', 'es_button AS button',])->get();
        } elseif ($language == 'en') {
            $slider_top = AdminHomeSlider::select(['id', 'image', 'en_title AS title', 'en_description AS description', 'en_button AS button',])->get();
            $traslate = Translation::select(['translate_en AS title'])->where('key', 'home')->where('page', 'Home')->get();
            $desplegable = AdminHomeDespegable::select(['id', 'href', 'image', 'en_title AS title', 'en_button AS button',])->get();
        } else {
            $slider_top = AdminHomeSlider::select(['id', 'image', 'es_title AS title', 'es_description AS description', 'es_button AS button',])->get();
            $traslate = Translation::select(['translate_es AS title'])->where('key', 'home')->where('page', 'Home')->get();
            $desplegable = AdminHomeDespegable::select(['id', 'href', 'image', 'es_title AS title', 'es_button AS button',])->get();
        }


        // dd($traslate);

        $slider_general_uno = AdminSliderGeneral::where('key', 'home')->where('position', 1)->orderBy('order', 'asc')->get();
        $slider_general_dos = AdminSliderGeneral::where('key', 'home')->where('position', 2)->orderBy('order', 'asc')->get();
        $slider_general_tres = AdminSliderGeneral::where('key', 'home')->where('position', 3)->orderBy('order', 'asc')->get();
        $partners = AdminHomePartners::all();
        $countP = count($partners);
        $p = $countP / 6;

        return view('pages.home', [
            'slider_top'            => $slider_top,
            'slider_general_uno'    => $slider_general_uno,
            'slider_general_dos'    => $slider_general_dos,
            'slider_general_tres'   => $slider_general_tres,
            'desplegable'           => $desplegable,
            'traslate'              => $traslate,
            'partners'              => $partners,
            'p'                     => $p,
        ]);
    }
}
