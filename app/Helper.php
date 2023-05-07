<?php


namespace App;


use Illuminate\Support\Facades\Route;

class Helper
{
    public static function isScopeAdmin()
    {
        return str_starts_with(Route::currentRouteName(), 'admin');
    }
}
