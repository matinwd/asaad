<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class Slider.
 *
 * @package namespace App\Models;
 */
class Slider extends Model
{
    protected $fillable = [
        'images',
        'order',
        'status'
    ];


public $translatedAttributes = [
    'name'
];
}
