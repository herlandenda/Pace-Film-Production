<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Legalitas extends Model
{
    use HasFactory;

    //menentukan nama tabel yang digunakan oleh model ini

    protected $table = 'legalitas';

    protected $fillable = [ 
        'title',
        'image',
        'category',
        'description',
    ];
}
