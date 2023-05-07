<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryCreateRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Repositories\CategoryRepository;
use App\Traits\FileUploaderTrait;

class CategoryController extends Controller
{
    use FileUploaderTrait;

    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $categories = $this->repository->paginate();
        return view('admin.pages.category.list', compact('categories'));
    }

    public function store(CategoryCreateRequest $request)
    {
        try {
            $images = $this->saveFiles($request->file('images'));


            $attributes = $request->all();
            $attributes['images'] = $images;


            $category = $this->repository->create($attributes);

            $response = [
                'message' => 'Category created.',
                'data'    => $category->toArray(),
            ];

            return redirect()->back()->with('message', $response['message']);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }

    public function create()
    {
        return view('admin.pages.category.create');
    }

    public function edit($id)
    {
        $category = $this->repository->find($id);

        return view('admin.pages.category.edit', compact('category'));
    }

    public function update(CategoryUpdateRequest $request, $id)
    {
        try {

            $attributes = $request->all();

            if($request->hasFile('images')) {
                $images = $this->saveFiles($request->file('images'));
                $attributes['images'] = $images;
            }

            $category = $this->repository->update($attributes, $id);

            $response = [
                'message' => 'Category updated.',
                'data'    => $category->toArray(),
            ];

            return redirect()->back()->with('message', $response['message']);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);


        return redirect()->back()->with('message', 'Category deleted.');
    }
}
