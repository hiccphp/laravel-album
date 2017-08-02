<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    // ablewrite
    protected $fillable = ['name', 'intro', 'cover'];
}
