<?php

namespace App\Http\Controllers;

use App\Models\AdminHomeSlider;
use App\Models\AdminSliderGeneral;
use App\Models\Translation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PublicitariaController extends Controller
{
    public function index($language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }

        if ($language == 'es') {
            $slider_top = AdminHomeSlider::select(['id', 'href', 'image', 'es_title AS title', 'es_description AS description', 'es_button AS button',])->where('key', 'publicitaria')->get();
            $traslate = Translation::select(['translate_es AS title'])->where('key', 'publicitaria')->where('page', 'Publicitaria')->get();
            $traslateContact = Translation::select(['translate_es AS title'])->where('key', 'contactanos')->get();
        } elseif ($language == 'en') {
            $slider_top = AdminHomeSlider::select(['id', 'href', 'image', 'en_title AS title', 'en_description AS description', 'en_button AS button',])->where('key', 'publicitaria')->get();
            $traslate = Translation::select(['translate_en AS title'])->where('key', 'publicitaria')->where('page', 'Publicitaria')->get();
            $traslateContact = Translation::select(['translate_en AS title'])->where('key', 'contactanos')->get();
        } else {
            $slider_top = AdminHomeSlider::select(['id', 'href', 'image', 'es_title AS title', 'es_description AS description', 'es_button AS button',])->where('key', 'publicitaria')->get();
            $traslate = Translation::select(['translate_es AS title'])->where('key', 'publicitaria')->where('page', 'Publicitaria')->get();
            $traslateContact = Translation::select(['translate_es AS title'])->where('key', 'contactanos')->get();
        }

        $slider_general_uno = AdminSliderGeneral::where('key', 'publicitaria')->where('position', 1)->orderBy('order', 'asc')->get();
        $slider_general_dos = AdminSliderGeneral::where('key', 'publicitaria')->where('position', 2)->orderBy('order', 'asc')->get();
        $slider_general_tres = AdminSliderGeneral::where('key', 'publicitaria')->where('position', 3)->orderBy('order', 'asc')->get();
        $slider_general_cuatro = AdminSliderGeneral::where('key', 'publicitaria')->where('position', 4)->orderBy('order', 'asc')->get();
        $slider_general_cinco = AdminSliderGeneral::where('key', 'publicitaria')->where('position', 5)->orderBy('order', 'asc')->get();

        return view('pages.publicitaria', [
            'slider_top'            => $slider_top,
            'slider_general_uno'    => $slider_general_uno,
            'slider_general_dos'    => $slider_general_dos,
            'slider_general_tres'   => $slider_general_tres,
            'slider_general_cuatro' => $slider_general_cuatro,
            'slider_general_cinco'  => $slider_general_cinco,
            'traslate'              => $traslate,
            'traslateContact'       => $traslateContact,
        ]);
    }
}
