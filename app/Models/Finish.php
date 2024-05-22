<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;

class Finish extends Model
{
    use HasFactory, SoftDeletes;

    public function getFinishIdiomaAttribute($language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }

        if ($language == 'es') {
            $traslate = Finish::select(['finish_es AS finish'])->where('id', $this->id)->first();
        } elseif ($language == 'en') {
            $traslate = Finish::select(['finish_en AS finish'])->where('id', $this->id)->first();
        } else {
            $traslate = Finish::select(['finish_es AS finish'])->where('id', $this->id)->first();
        }

        return $traslate->finish;
    }
}
