<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use Translatable;

    public $dates = [
        'special_price_start',
        'special_price_end',
    ];

    protected $appends = [
        'first_image',
        'price_status_text',
        'visibility_status_text',
    ];

    public $translatedAttributes = ['name', 'description','return_policy','gift','maintenance'];

    protected $casts = [
        'features' => 'array',
        'options' => 'array',
        'images' => 'array',
        'properties' => 'array'
    ];

    protected $fillable = [
        'slug',
        'tags',
        'images',
        'visibility',
        'price_status',
        'price',
        'discount',
        'discount_type',
        'special_price',
        'special_price_type',
        'special_price_start',
        'special_price_end',
        'in_stock',
        'manage_stock',
        'qty',
        'options',
        'features',
        'properties',
        'shop_guide_type',
        'shop_guide',
        'view_count',
        'sales_integer',
        'is_active'
    ];

    public function getFirstImageAttribute()
    {
        return is_array($this->images) && count($this->images) != 0 ? 'storage/' . $this->images[0] : '';
    }


    public function getPriceStatusTextAttribute()
    {
        if($this->price_status == 0){
            return 'Coming soon';
        }
        elseif($this->price_status == 1){
            return 'Normal (Price)';
        }
        elseif($this->price_status == 2){
            return 'Call';
        }
        elseif($this->price_status == 3){
            return 'Stop build';
        }

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

    public function categories(){
        return $this->morphToMany(Category::class,'categorizable');
    }

}
