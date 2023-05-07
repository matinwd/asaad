<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order.
 *
 * @package namespace App\Models;
 */
class Order extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'description',
        'status'
    ];

}
