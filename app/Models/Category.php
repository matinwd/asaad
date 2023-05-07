<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Category extends Model
{
    use Translatable;

    protected $casts = ['images' => 'array'];

    public $translatedAttributes = ['name', 'description'];

    protected $fillable = [
        'categoriable_type','categoriable_id', 'images'
    ];

    public function products()
    {
        return $this->morphedByMany(Product::class,'categorizable');
    }

    public function posts()
    {
        return $this->morphedByMany(Post::class,'categorizable');
    }


    public function getFirstImageAttribute()
    {
        return 'storage/' . $this->images[0];
    }
}
