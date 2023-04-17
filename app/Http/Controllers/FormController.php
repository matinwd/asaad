<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\FormCreateRequest;
use App\Http\Requests\FormUpdateRequest;
use App\Repositories\FormRepository;
use App\Validators\FormValidator;

/**
 * Class FormController.
 *
 * @package namespace App\Http\Controllers;
 */
class FormController extends Controller
{
    /**
     * @var FormRepository
     */
    protected $repository;

    /**
     * @var FormValidator
     */
    protected $validator;

    /**
     * FormController constructor.
     *
     * @param FormRepository $repository
     * @param FormValidator $validator
     */
    public function __construct(FormRepository $repository, FormValidator $validator)
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
        $forms = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $forms,
            ]);
        }

        return view('forms.index', compact('forms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  FormCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(FormCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $form = $this->repository->create($request->all());

            $response = [
                'message' => 'Form created.',
                'data'    => $form->toArray(),
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
        $form = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $form,
            ]);
        }

        return view('forms.show', compact('form'));
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
        $form = $this->repository->find($id);

        return view('forms.edit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  FormUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(FormUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $form = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Form updated.',
                'data'    => $form->toArray(),
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
                'message' => 'Form deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Form deleted.');
    }
}
