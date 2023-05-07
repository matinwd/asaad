<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Comment.
 *
 * @package namespace App\Models;
 */
class Comment extends Model
{
    public $translatedAttributes = [ 'description'];


    protected $fillable = [
        'user_id',
        'post_id',
        'data'
    ];

}
