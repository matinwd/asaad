<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Setting extends Model
{

    protected $fillable = ['key'];

    public  $translatedAttributes = [
        'value'
    ];

}
