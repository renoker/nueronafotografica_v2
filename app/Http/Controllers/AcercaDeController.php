<?php

namespace App\Http\Controllers;

use App\Models\AdminHomeSlider;
use App\Models\AdminSliderGeneral;
use App\Models\Personal;
use App\Models\Translation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AcercaDeController extends Controller
{
    public function index($language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }

        if ($language == 'es') {
            $PersonalIzquierdo = Personal::select(['id', 'image', 'name_es AS name', 'ocupacion_es AS ocupacion', 'description_es AS description'])->where('lugar', 1)->get();
            $PersonalDerecho = Personal::select(['id', 'image', 'name_es AS name', 'ocupacion_es AS ocupacion', 'description_es AS description'])->where('lugar', 2)->get();
            $slider_top = AdminHomeSlider::select(['id', 'href', 'image', 'es_title AS title', 'es_description AS description', 'es_button AS button',])->where('key', 'acerca_de')->get();
            $traslate = Translation::select(['translate_es AS title'])->where('key', 'acerca_de')->where('page', 'Acerca_de')->get();
            $traslateContact = Translation::select(['translate_es AS title'])->where('key', 'contactanos')->get();
        } elseif ($language == 'en') {
            $PersonalIzquierdo = Personal::select(['id', 'image', 'name_en AS name', 'ocupacion_en AS ocupacion', 'description_en AS description'])->where('lugar', 1)->get();
            $PersonalDerecho = Personal::select(['id', 'image', 'name_en AS name', 'ocupacion_en AS ocupacion', 'description_en AS description'])->where('lugar', 2)->get();
            $slider_top = AdminHomeSlider::select(['id', 'href', 'image', 'en_title AS title', 'en_description AS description', 'en_button AS button',])->where('key', 'acerca_de')->get();
            $traslate = Translation::select(['translate_en AS title'])->where('key', 'acerca_de')->where('page', 'Acerca_de')->get();
            $traslateContact = Translation::select(['translate_en AS title'])->where('key', 'contactanos')->get();
        } else {
            $PersonalIzquierdo = Personal::select(['id', 'image', 'name_es AS name', 'ocupacion_es AS ocupacion', 'description_es AS description'])->where('lugar', 1)->get();
            $PersonalDerecho = Personal::select(['id', 'image', 'name_es AS name', 'ocupacion_es AS ocupacion', 'description_es AS description'])->where('lugar', 2)->get();
            $slider_top = AdminHomeSlider::select(['id', 'href', 'image', 'es_title AS title', 'es_description AS description', 'es_button AS button',])->where('key', 'acerca_de')->get();
            $traslate = Translation::select(['translate_es AS title'])->where('key', 'acerca_de')->where('page', 'Acerca_de')->get();
            $traslateContact = Translation::select(['translate_es AS title'])->where('key', 'contactanos')->get();
        }

        $slider_general_uno = AdminSliderGeneral::where('key', 'acerca_de')->where('position', 1)->orderBy('order', 'asc')->get();
        $slider_general_dos = AdminSliderGeneral::where('key', 'acerca_de')->where('position', 2)->orderBy('order', 'asc')->get();
        $slider_general_tres = AdminSliderGeneral::where('key', 'acerca_de')->where('position', 3)->orderBy('order', 'asc')->get();
        $slider_general_cuatro = AdminSliderGeneral::where('key', 'acerca_de')->where('position', 4)->orderBy('order', 'asc')->get();
        $slider_general_cinco = AdminSliderGeneral::where('key', 'acerca_de')->where('position', 5)->orderBy('order', 'asc')->get();
        $slider_general_seis = AdminSliderGeneral::where('key', 'acerca_de')->where('position', 6)->orderBy('order', 'asc')->get();
        $slider_general_siete = AdminSliderGeneral::where('key', 'acerca_de')->where('position', 7)->orderBy('order', 'asc')->get();

        return view('pages.acerca_de', [
            'slider_top'            => $slider_top,
            'slider_general_uno'    => $slider_general_uno,
            'slider_general_dos'    => $slider_general_dos,
            'slider_general_tres'   => $slider_general_tres,
            'slider_general_cuatro' => $slider_general_cuatro,
            'slider_general_cinco'  => $slider_general_cinco,
            'slider_general_seis'   => $slider_general_seis,
            'slider_general_siete'  => $slider_general_siete,
            'personalIzquierdo'     => $PersonalIzquierdo,
            'personalDerecho'       => $PersonalDerecho,
            'traslate'              => $traslate,
            'traslateContact'       => $traslateContact,
        ]);
    }
}
