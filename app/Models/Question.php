<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;


class Question extends Model
{
    use Translatable;

    protected $fillable = [
        'created_at','updated_at'
    ];

    public $translatedAttributes = ['name','description'];
}
