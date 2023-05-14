<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCommonSettingRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\SettingCreateRequest;
use App\Http\Requests\SettingUpdateRequest;
use App\Repositories\SettingRepository;

/**
 * Class SettingController.
 *
 * @package namespace App\Http\Controllers;
 */
class SettingController extends Controller
{
    /**
     * @var SettingRepository
     */
    protected $repository;

    public function __construct(SettingRepository $repository)
    {
        $this->repository = $repository;
    }

    public function site()
    {
        return view('admin.pages.setting.edit');
    }

    public function commonSettings(UpdateCommonSettingRequest $request)
    {
        try {
            $title = $this->repository->findWhereIn(function ($query){
                return $query->where('key', 'title');
            });
            $title->value = $request->get('title');
            $title->save();

            $description = Setting::where('key', 'description')->first();
            $description->value = $request->get('description');
            $description->update();

            $address = Setting::where('key', 'address')->first();
            $address->value = $request->get('address');
            $address->update();

            $landline = Setting::where('key', 'landline')->first();
            $landline->value = $request->get('landline');
            $landline->update();


            $landline2 = Setting::where('key', 'landline2')->first();
            $landline2->value = $request->get('landline2');
            $landline2->update();


            $fax = Setting::where('key', 'fax')->first();
            $fax->value = $request->get('fax');
            $fax->update();

            $mobile = Setting::where('key', 'mobile')->first();
            $mobile->value = $request->get('mobile');
            $mobile->update();


            $email = Setting::where('key', 'email')->first();
            $email->value = $request->get('email');
            $email->update();

            $telegram = Setting::where('key', 'telegram')->first();
            $telegram->value = $request->get('telegram');
            $telegram->update();

            $instagram = Setting::where('key', 'instagram')->first();
            $instagram->value = $request->get('instagram');
            $instagram->update();

            $linkedin = Setting::where('key', 'linkedin')->first();
            $linkedin->value = $request->get('linkedin');
            $linkedin->update();

            $whatsapp = Setting::where('key', 'whatsapp')->first();
            $whatsapp->value = $request->get('whatsapp');
            $whatsapp->update();
            if ($request->file('photo')) {
                $fc = new FileController();
                $path = $fc->uploadHttps($request);
                $logo = Setting::where('key', 'logo')->first();
                $logo->value = $path;
                $logo->update();
            }


            event(new ActivityEvent(['description' => 'تنظیمات جدید ' . 'توسط ' . auth()->user()->name . ' اعمال شد', 'user_id' => auth()->user()->id]));

            session()->flash('status', 'success');
            return redirect(route('admin.settings.site'));

        } catch (\Exception $e) {
            session()->flash('status', 'failed');
            return redirect(route('admin.settings.site'));
        }
    }


    public function menuChange(Request $request)
    {


        $menus = Setting::where('key', 'menus')->first();
        try {

            $arr =  [];
            foreach ($request->get('menu') as $menu){
                $arr[] = ['name' => $menu['name'] ,'url' => $menu['url']];
            }


            $menus->value = json_encode($arr);
            $menus->update();


            event(new ActivityEvent(['description' => 'تنظیمات جدید ' . 'توسط ' . auth()->user()->name . ' اعمال شد', 'user_id' => auth()->user()->id]));

            session()->flash('status', 'success');
            return redirect(route('admin.settings.menu'));

        } catch (\Exception $e) {
            session()->flash('status', 'failed');
            return redirect(route('admin.settings.site'));
        }
    }

    public function slider()
    {
        $sliders = TopSlider::all();
        return view('admin.setting.sliders', compact('sliders'));
    }


    public function menu()
    {
        $menus = json_decode(Setting::where('key', 'menus')->first()->value);
        return view('admin.setting.menus', compact('menus'));

    }


}
