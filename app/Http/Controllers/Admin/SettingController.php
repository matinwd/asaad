<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateCommonSettingRequest;
use App\Http\Requests\UpdateContactWaysRequest;
use App\Http\Requests\UpdateSocialMediaRequest;
use App\Traits\FileUploaderTrait;
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
    use FileUploaderTrait;
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

    public function commonAddresses(UpdateCommonSettingRequest $request)
    {
        try {

            $attributes = ['title', 'description', 'address'];

            foreach ($attributes as $item){


                $attribute = $this->repository->scopeQuery(function ($query) use ($item){
                    return $query->where('key', $item)->get();
                })->all()[0];


                $attribute->translate('en')->value  = $request->en[$item];
                $attribute->translate('de')->value  = $request->de[$item];

                $attribute->save();
            }

            if ($request->file('logo')) {
                $images = $this->saveFiles($request->file('logo'));

                $logo = $this->repository->scopeQuery(function ($query){
                    return $query->where('key', 'logo')->get();
                })->all()[0];
                $logo->value = $images[0];
                $logo->save();
            }



            $response = [
                'message' => 'Changes affected',
                'data'    => true,
            ];

            return redirect()->route('admin.settings.site')->with('message', $response['message']);
        } catch (\Exception $e) {
            session()->flash('status', 'failed');
            return redirect(route('admin.settings.site'));
        }
    }

    public function commonSocials(UpdateSocialMediaRequest $request)
    {

        try {

            $attributes = ['telegram', 'instagram', 'whatsapp','linkedin'];

            $this->saveAttribute($attributes,$request);

            $response = [
                'message' => 'Changes affected',
                'data'    => true,
            ];

            return redirect()->route('admin.settings.site')->with('message', $response['message']);
        } catch (\Exception $e) {
            session()->flash('status', 'failed');
            return redirect(route('admin.settings.site'));
        }

    }

    public function commonContactWays(UpdateContactWaysRequest $request)
    {

        try {

            $attributes = ['landline', 'landline2', 'mobile','fax','email'];

            $this->saveAttribute($attributes, $request);

            $response = [
                'message' => 'Changes affected',
                'data'    => true,
            ];

            return redirect()->route('admin.settings.site')->with('message', $response['message']);
        } catch (\Exception $e) {
            session()->flash('status', 'failed');
            return redirect(route('admin.settings.site'));
        }

    }


    public function menuChange(Request $request)
    {

        try {


            $this->saveAttribute($attributes, $request);

            $response = [
                'message' => 'Changes affected',
                'data'    => true,
            ];

            return redirect()->route('admin.settings.site')->with('message', $response['message']);
        } catch (\Exception $e) {
            session()->flash('status', 'failed');
            return redirect(route('admin.settings.site'));
        }


        $menus = Setting::where('key', 'menus')->first();
        try {

            $arr =  [];
            foreach ($request->en['menu'] as $menu){
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

    /**
     * @param array $attributes
     * @param \Illuminate\Support\Facades\Request $request
     */
    public function saveAttribute(array $attributes, \Illuminate\Http\Request $request)
    {
        foreach ($attributes as $item) {


            $attribute = $this->repository->scopeQuery(function ($query) use ($item) {
                return $query->where('key', $item)->get();
            })->all()[0];

            $attribute->value = $request->$item;

            $attribute->save();
        }
    }


}
