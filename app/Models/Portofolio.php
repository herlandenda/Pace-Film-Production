<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    // Mengizinkan kolom ini diisi secara massal
    protected $fillable = [
        'title',
        'youtube_url',
        'category',
        'description'
    ];
}
