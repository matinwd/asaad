<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory,Translatable;

    public $translatedAttributes = [
        'name',
        'tags',
        'description'
    ];

    protected $fillable = [
        'slug',
        'images',
        'visibility',
        'view_count'
    ];

    protected $casts = [
        'images' => 'array',
    ];

    protected $appends  = [
        'first_image',
        'visibility_status_text'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function categories()
    {
        return $this->morphToMany(Category::class,'categorizable');
    }


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
