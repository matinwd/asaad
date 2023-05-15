<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

/**
 * Class Menu.
 *
 * @package namespace App\Models;
 */
class Menu extends Model implements  TranslatableContract
{
    use Translatable,HasFactory;


    public $translatedAttributes = [
        'items'
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];


    public $timestamps = false;

}
