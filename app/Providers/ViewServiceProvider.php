<?php

namespace App\Providers;

use App\Models\Setting;
use App\Repositories\SettingRepository;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(SettingRepository $repository): void
    {

        // Todo | change models to repository
        $logo = $setting = $repository->findWhere(['key'=> 'logo'])->first();

        $telegram = $repository->findWhere(['key' => 'telegram'])->first();

        $instagram = $repository->findWhere(['key' => 'instagram'])->first();

        $linkedin = $repository->findWhere(['key' => 'linkedin'])->first();

        $whatsapp = $repository->findWhere(['key' => 'whatsapp'])->first();

        $email = $repository->findWhere(['key' => 'email'])->first();

        $title = $repository->findWhere(['key' => 'title'])->first();

        $landline = $repository->findWhere(['key' => 'landline'])->first();
        $landline2 = $repository->findWhere(['key' => 'landline2'])->first();
        $fax = $repository->findWhere(['key' => 'fax'])->first();


        $mobile = $repository->findWhere(['key' => 'mobile'])->first();

        $address = $repository->findWhere(['key' => 'address'])->first();

        $description = $repository->findWhere(['key' => 'description'])->first();
        $contact = $repository->findWhere(['key' => 'contact'])->first();
        $about = $repository->findWhere(['key' => 'about'])->first();
        $products = $repository->findWhere(['key' => 'products'])->first();
        $faq = $repository->findWhere(['key' => 'faq'])->first();
        $menus = $repository->findWhere(['key' => 'menus'])->first();

        view()->share('settings', [
            'telegram' => $telegram,
            'logo' => $logo,
            'email' => $email,
            'instagram' => $instagram,
            'mobile' => $mobile,
            'description' => $description,
            'address' => $address,
            'landline' => $landline,
            'landline2' => $landline2,
            'fax' => $fax,
            'title' => $title,
            'whatsapp' => $whatsapp,
            'linkedin' => $linkedin,
            'contact' => $contact,
            'about' => $about,
            'products' => $products,
            'faq' => $faq,
            'menus' => $menus,
        ]);


    }
}
