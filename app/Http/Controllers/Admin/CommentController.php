<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Traits\FileUploaderTrait;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\CommentCreateRequest;
use App\Http\Requests\CommentUpdateRequest;
use App\Repositories\CommentRepository;

class CommentController extends Controller
{
    use FileUploaderTrait;
    protected $repository;

    public function __construct(CommentRepository $repository)
    {
        $this->repository = $repository;
    }
    public function index()
    {
        $comments = $this->repository->paginate();
        return view('admin.pages.comment.list', compact('comments'));
    }

    public function store(CommentCreateRequest $request)
    {
        try {
            $attributes = $request->all();

            if($request->hasFile('images')) {
                $images = $this->saveFiles($request->file('images'));
                $attributes['images'] = $images;
            }

            $comment = $this->repository->create($attributes);

            $response = [
                'message' => 'Comment created.',
                'data'    => $comment->toArray(),
            ];

            return redirect()->route('admin.comments.index')->with('message', $response['message']);
        } catch (ValidatorException $e) {
            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    public function show($id)
    {
        $comment = $this->repository->find($id);

        return view('comments.show', compact('comment'));
    }

    public function edit($id)
    {
        $comment = $this->repository->find($id);

        return view('admin.pages.comment.edit', compact('comment'));
    }

    public function create()
    {
        return view('admin.pages.comment.create');
    }

    public function update(CommentUpdateRequest $request, $id)
    {
        try {

            $comment = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'Comment updated.',
                'data'    => $comment->toArray(),
            ];

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {


            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        return redirect()->back()->with('message', 'Comment deleted.');
    }
}
