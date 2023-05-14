<?php

namespace App\Models;

use App\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingTranslation extends Model
{
    public $timestamps = false;


    protected  $fillable = [
        'value'
    ];

    public function getValueAttribute($value)
    {
        $result =  app(Helper::class)->is_json_string($value);
        return $result ? json_decode($value) : $value;
    }
}
