<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\FileUploaderTrait;
use App\Traits\VisibilityChangerTrait;
use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\SliderCreateRequest;
use App\Http\Requests\SliderUpdateRequest;
use App\Repositories\SliderRepository;

/**
 * Class SliderController.
 *
 * @package namespace App\Http\Controllers;
 */
class SliderController extends Controller
{
    use FileUploaderTrait,VisibilityChangerTrait;

    protected $repository;

    public function __construct(SliderRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $sliders = $this->repository->paginate();

        return view('admin.pages.slider.list', compact('sliders'));
    }

    public function store(SliderCreateRequest $request)
    {
        try {
            $attributes = $request->all();
            $images = $this->saveFiles($request->file('images'));

            $attributes['images'] = $images;


            $slider = $this->repository->create($attributes);


            $response = [
                'message' => 'Slider created.',
                'data'    => $slider->toArray(),
            ];

            return redirect()->route('admin.sliders.index')->with('message', $response['message']);
        } catch (\Exception $e) {

            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }

    public function create()
    {
        return view('admin.pages.slider.create');
    }

    public function edit($id)
    {
        $slider = $this->repository->find($id);

        return view('admin.pages.slider.edit', compact('slider'));
    }

    public function update(SliderUpdateRequest $request, $id)
    {
        try {

            $slider = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Slider updated.',
                'data'    => $slider->toArray(),
            ];


            return redirect()->route('admin.sliders.index')->with('message', $response['message']);
        } catch (ValidatorException $e) {

            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }


  public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        return redirect()->back()->with('message', 'Slider deleted.');
    }
}
