<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\TemplateCreateRequest;
use App\Http\Requests\TemplateUpdateRequest;
use App\Repositories\TemplateRepository;
use App\Validators\TemplateValidator;

/**
 * Class TemplateController.
 *
 * @package namespace App\Http\Controllers;
 */
class TemplateController extends Controller
{
    /**
     * @var TemplateRepository
     */
    protected $repository;

    /**
     * @var TemplateValidator
     */
    protected $validator;

    /**
     * TemplateController constructor.
     *
     * @param TemplateRepository $repository
     * @param TemplateValidator $validator
     */
    public function __construct(TemplateRepository $repository, TemplateValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $templates = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $templates,
            ]);
        }

        return view('templates.index', compact('templates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  TemplateCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(TemplateCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $template = $this->repository->create($request->all());

            $response = [
                'message' => 'Template created.',
                'data'    => $template->toArray(),
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

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $template = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $template,
            ]);
        }

        return view('templates.show', compact('template'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $template = $this->repository->find($id);

        return view('templates.edit', compact('template'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  TemplateUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(TemplateUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $template = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Template updated.',
                'data'    => $template->toArray(),
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


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'Template deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Template deleted.');
    }
}
