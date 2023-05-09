<?php

namespace App\Http\Controllers\Admin;

use App\Criteria\NameCriteria;
use App\Criteria\VisibilityCriteria;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostCreateRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Repositories\CategoryRepository;
use App\Repositories\PostRepository;
use App\Traits\FileUploaderTrait;
use App\Traits\VisibilityChangerTrait;

class PostController extends Controller
{
    use FileUploaderTrait,VisibilityChangerTrait;

    protected $repository;

    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $this->repository->pushCriteria(new VisibilityCriteria(request('visibility')));
        $this->repository->pushCriteria(new NameCriteria(request('name')));

        $posts = $this->repository->paginate();

        return view('admin.pages.post.list', compact('posts'));
    }

    public function store(PostCreateRequest $request,CategoryRepository $categoryRepository)
    {
        try {

            $images = $this->saveFiles($request->file('images'));

            $attributes = $request->all();
            $attributes['images'] = $images;


            $post = $this->repository->create($attributes);

            if(isset($attributes['categories'])) {
                $categories = $categoryRepository->findWhereIn('id', $attributes['categories']);
                $post->categories()->saveMany($categories);
            }


            $response = [
                'message' => 'Post created.',
                'data'    => $post->toArray(),
            ];

            // TODO | add this flash message for every controller
            flash()->success(trans('actions.update_success'));


            return redirect()->route('')->with('message', $response['message']);
        } catch (\Exception $e) {

            report($e);
            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }

    public function create(CategoryRepository $categoryRepository)
    {
        $categories = $categoryRepository->all();

        return view('admin.pages.post.create',compact('categories'));
    }

    public function edit($id)
    {
        $post = $this->repository->find($id);

        return view('admin.pages.post.edit', compact('post'));
    }


    public function update(PostUpdateRequest $request, $id,CategoryRepository $categoryRepository)
    {
        try {


            $attributes = $request->all();


            if($request->hasFile('images')) {
                $images = $this->saveFiles($request->file('images'));
                $attributes = $request->all();
                $attributes['images'] = $images;
            }

            $post = $this->repository->update($attributes, $id);


            if(isset($attributes['categories'])) {
                $categories = $categoryRepository->findWhereIn('id', $attributes['categories']);
                $post->categories()->saveMany($categories);
            }


            $response = [
                'message' => 'Post updated.',
                'data'    => $post->toArray(),
            ];

            return redirect()->route('admin.posts.index')->with('message', $response['message']);
        } catch (\Exception $e) {

            return redirect()->back()->withErrors($e->getMessage())->withInput();
        }
    }

    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        return redirect()->back()->with('message', 'Post deleted.');
    }
}
