<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class galleryData extends Model
{
    use HasFactory, SoftDeletes;

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }

    public function getFormattedCreatedAtAttribute()
    {
        return $this->created_at->format('d/m/Y H:i:s'); // Puedes cambiar el formato según tus necesidades
    }
}
