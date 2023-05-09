<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Slider.
 *
 * @package namespace App\Models;
 */
class Slider extends Model
{
    use Translatable;

    protected $fillable = [
        'images',
        'order',
        'visibility',
    ];

    protected $appends = [
        'first_image',
    ];

public $translatedAttributes = [
    'name'
];

protected $casts = [
    'images' => 'array'
];

    public function getFirstImageAttribute()
    {
        return is_array($this->images) && count($this->images) != 0 ? 'storage/' . $this->images[0] : '';
    }


    public function getVisibilityStatusTextAttribute()
    {
        if($this->visibility == 0){
            return 'Hidden';
        }
        else {
            return 'Visible';
        }

    }


}
