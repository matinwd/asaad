<?php

namespace App\Models;

use App\Models\Scopes\VisibleScope;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $casts = [
        'images' => 'array'
    ];

    protected $appends = [
        'visibility_status_text'
    ];

    public static function boot()
    {
        parent::boot();

//        self::addGlobalScope(new VisibleScope());
    }

    protected $fillable = [
        'user_id',
        'description',
        'images',
        'name',
        'post_id',
        'data',
        'visibility'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function getFirstImageAttribute()
    {
        return 'storage/' . $this->images[0];
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
