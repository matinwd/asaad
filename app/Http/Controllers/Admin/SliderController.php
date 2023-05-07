<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
    /**
     * @var SliderRepository
     */
    protected $repository;

    public function __construct(SliderRepository $repository)
    {
        $this->repository = $repository;
    }


    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $sliders = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $sliders,
            ]);
        }

        return view('sliders.index', compact('sliders'));
    }

    public function store(SliderCreateRequest $request)
    {
        try {


            $slider = $this->repository->create($request->all());

            $response = [
                'message' => 'Slider created.',
                'data'    => $slider->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (\Exception $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    public function show($id)
    {
        $slider = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $slider,
            ]);
        }

        return view('sliders.show', compact('slider'));
    }

    public function edit($id)
    {
        $slider = $this->repository->find($id);

        return view('sliders.edit', compact('slider'));
    }

    public function update(SliderUpdateRequest $request, $id)
    {
        try {

            $slider = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Slider updated.',
                'data'    => $slider->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


  public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Slider deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Slider deleted.');
    }
}
