<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Setting extends Model
{
    use Translatable;

    protected $fillable = ['key'];

    public  $translatedAttributes = [
        'value'
    ];


}
