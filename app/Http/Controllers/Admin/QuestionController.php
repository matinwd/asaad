<?php

namespace App\Http\Controllers\Admin;

use App\Criteria\NameCriteria;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionCreateRequest;
use App\Http\Requests\QuestionUpdateRequest;
use App\Repositories\QuestionRepository;

class QuestionController extends Controller
{
    protected $repository;

    public function __construct(QuestionRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $this->repository->pushCriteria(new NameCriteria(request('name')));

        $questions = $this->repository->paginate();
        return view('admin.pages.question.list', compact('questions'));
    }


    public function store(QuestionCreateRequest $request)
    {
        try {
            $question = $this->repository->create($request->all());

            $response = [
                'message' => 'Question created.',
                'data'    => $question->toArray(),
            ];

            return redirect()->back()->with('message', $response['message']);
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }

    public function show($id)
    {
        $question = $this->repository->find($id);

        return view('questions.show', compact('question'));
    }

    public function create()
    {
        return view('admin.pages.question.create');
    }

    public function edit($id)
    {
        $question = $this->repository->find($id);

        return view('admin.pages.question.edit', compact('question'));
    }


    public function update(QuestionUpdateRequest $request, $id)
    {
        try {

            $question = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Question updated.',
                'data'    => $question->toArray(),
            ];

            return redirect()->back()->with('message', $response['message']);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }

    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        return redirect()->back()->with('message', 'Question deleted.');
    }
}
