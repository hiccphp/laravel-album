<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    // ablewrite
    protected $fillable = ['album_id', 'name', 'intro', 'src'];
}
