<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;

class GaleriaBlog extends Model
{
    use HasFactory, SoftDeletes;


    public function getCategoriaIdiomaAttribute($language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }

        if ($language == 'es') {
            $traslate = GaleriaBlog::select(['category_es AS category'])->where('id', $this->id)->first();
        } elseif ($language == 'en') {
            $traslate = GaleriaBlog::select(['category_en AS category'])->where('id', $this->id)->first();
        } else {
            $traslate = GaleriaBlog::select(['category_es AS category'])->where('id', $this->id)->first();
        }

        return $traslate->category;
    }
}
