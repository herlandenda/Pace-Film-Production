<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Merchandise extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'price',
        'stock',
        'description'
    ];
}
