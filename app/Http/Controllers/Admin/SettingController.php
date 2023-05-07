<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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


    /**
     * SettingController constructor.
     *
     * @param SettingRepository $repository
     * @param SettingValidator $validator
     */
    public function __construct(SettingRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $settings = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $settings,
            ]);
        }

        return view('settings.index', compact('settings'));
    }


    public function store(SettingCreateRequest $request)
    {
        try {

            $setting = $this->repository->create($request->all());

            $response = [
                'message' => 'Setting created.',
                'data'    => $setting->toArray(),
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
        $setting = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $setting,
            ]);
        }

        return view('settings.show', compact('setting'));
    }


    public function edit($id)
    {
        $setting = $this->repository->find($id);

        return view('settings.edit', compact('setting'));
    }

    public function update(SettingUpdateRequest $request, $id)
    {
        try {

            $setting = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Setting updated.',
                'data'    => $setting->toArray(),
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

    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Setting deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Setting deleted.');
    }
}
