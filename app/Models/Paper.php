<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;

class Paper extends Model
{
    use HasFactory, SoftDeletes;

    public function getPaperIdiomaAttribute($language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }

        if ($language == 'es') {
            $traslate = Paper::select(['paper_es AS paper'])->where('id', $this->id)->first();
        } elseif ($language == 'en') {
            $traslate = Paper::select(['paper_en AS paper'])->where('id', $this->id)->first();
        } else {
            $traslate = Paper::select(['paper_es AS paper'])->where('id', $this->id)->first();
        }

        return $traslate->paper;
    }
}
