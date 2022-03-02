<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gamba extends Model
{
    protected $fillable = [
        'name', 'tipo', 'color',
    ];
}
