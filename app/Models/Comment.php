<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $casts = [
        'images' => 'array'
    ];

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

}
