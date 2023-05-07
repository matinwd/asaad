<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\QuestionCreateRequest;
use App\Http\Requests\QuestionUpdateRequest;
use App\Repositories\QuestionRepository;

/**
 * Class QuestionController.
 *
 * @package namespace App\Http\Controllers;
 */
class QuestionController extends Controller
{
    /**
     * @var QuestionRepository
     */
    protected $repository;

    /**
     * QuestionController constructor.
     *
     * @param QuestionRepository $repository
     */
    public function __construct(QuestionRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $questions = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $questions,
            ]);
        }

        return view('questions.index', compact('questions'));
    }


    public function store(QuestionCreateRequest $request)
    {
        try {


            $question = $this->repository->create($request->all());

            $response = [
                'message' => 'Question created.',
                'data'    => $question->toArray(),
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
        $question = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $question,
            ]);
        }

        return view('questions.show', compact('question'));
    }

    public function edit($id)
    {
        $question = $this->repository->find($id);

        return view('questions.edit', compact('question'));
    }


    public function update(QuestionUpdateRequest $request, $id)
    {
        try {

            $question = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Question updated.',
                'data'    => $question->toArray(),
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
                'message' => 'Question deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Question deleted.');
    }
}
