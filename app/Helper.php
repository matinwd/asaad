<?php


namespace App;


use App\Models\Setting;
use Doctrine\Inflector\Language;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

class Helper
{
    public static function isScopeAdmin()
    {
        return str_starts_with(Route::currentRouteName(), 'admin');
    }



    public static function updatePageConfig($pageConfigs)
    {
        $demo = 'custom';
        if (isset($pageConfigs)) {
            if (count($pageConfigs) > 0) {
                foreach ($pageConfigs as $config => $val) {
                    Config::set('custom.' . $demo . '.' . $config, $val);
                }
            }
        }
    }

    /**
     * @return mixed|Language[]|Collection
     * @throws \Exception
     */
    public static function activeLanguages()
    {
        return cache()->remember('languages-active', 600, function () {
            return Language::where('active', 1)->get();
        });
    }

    /**
     * @param mixed|Translatable $model
     * @throws \Exception
     */
    public static function deleteNoExistsLangs($model)
    {
        foreach (\App\Helper::activeLanguages()->pluck('code')->toArray() as $index => $item) {
            $hasLang = request()->get('has_lang', []);
            if (!array_key_exists($item, $hasLang))
                $model->deleteTranslations($item);
        }
    }

    /**
     * @return \Illuminate\Contracts\Cache\TCacheValue
     * @throws \Exception
     */
    public static function currentLocale()
    {
        return cache()->store('array')->rememberForever('current-locale-' . app()->getLocale(), function () {
            return Language::where('code', app()->getLocale())->firstOrFail();
        });
    }

    /**
     * @return \Illuminate\Cache\TCacheValue
     */
    public static function getSettings()
    {
        return cache()->rememberForever('app-setting',function (){
            return Setting::all();
        });
    }

    public static function Setting($key)
    {
        return self::getSettings()
            ->where('key',$key)
            ->first();
    }

    public static function renderPictureArray($items,$single = false)
    {
        $collection = collect(is_string($items) ? [$items] : $items)->map(function ($item) {
            return ['url' => $item, 'name' => basename($item)];
        });
        $collection = $collection->toArray();
        return $single ? ($collection[0] ?? []) : $collection;
    }


    public static function is_json_string($json_str)
    {
        json_decode($json_str);
        return json_last_error() === JSON_ERROR_NONE;
    }

}
