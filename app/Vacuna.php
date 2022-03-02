<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacuna extends Model
{
    protected $fillable = [
        'name', 'age', 'vacuna',
    ];
}
