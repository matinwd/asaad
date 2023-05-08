<?php

namespace App\Http\Controllers\Admin;

use App\Criteria\NameCriteria;
use App\Criteria\VisibilityCriteria;
use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use App\Traits\FileUploaderTrait;
use Illuminate\Http\Request;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\ProductCreateRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
    use FileUploaderTrait;
    /**
     * @var ProductRepository
     */
    protected $repository;
    protected $categoryRepository;

    public function __construct(ProductRepository $repository,CategoryRepository  $categoryRepository)
    {
        $this->repository = $repository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index(Request $request)
    {
        $this->repository->pushCriteria(new NameCriteria($request->name));

        $this->repository->pushCriteria(new VisibilityCriteria($request->visibility));

        $products = $this->repository->paginate();

        return view('admin.pages.product.list', compact('products'));
    }


    public function store(ProductCreateRequest $request)
    {
        try {
            $images = $this->saveFiles($request->file('images'));

            $attributes = $request->all();
            $attributes['images'] = $images;


            if($request->price_status != 1){
                $attributes['price'] = null;
            }

            $categories = $this->categoryRepository->findWhereIn('id',$attributes['categories']);

            $product = $this->repository->create($attributes);

            $product->categories()->saveMany($categories);

            $response = [
                'message' => 'Product created.',
                'data'    => $product->toArray(),
            ];

            return redirect()->route('admin.products.index')->with('message', $response['message']);

        } catch (ValidatorException $e) {

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    public function show($id)
    {
        $product = $this->repository->find($id);

        return view('products.show', compact('product'));
    }

    public function create(CategoryRepository $categoryRepository)
    {
        $categories = $categoryRepository->all();
        return view('admin.pages.product.create',compact('categories'));
    }

    public function edit($id,CategoryRepository $categoryRepository)
    {
        $categories = $categoryRepository->all();

        $product = $this->repository->find($id);

        return view('admin.pages.product.edit', compact('product','categories'));
    }


    public function update(ProductUpdateRequest $request, $id)
    {
        try {
            $attributes = $request->all();

            if($request->hasFile('images')) {
                $images = $this->saveFiles($request->file('images'));
                $attributes['images'] = $images;
            }

            if($request->price_status != 1){
                $attributes['price'] = null;

            }

            $product = $this->repository->update($attributes, $id);

            $response = [
                'message' => 'Product updated.',
                'data'    => $product->toArray(),
            ];


            return redirect()->route('admin.products.index')->with('message', $response['message']);
        } catch (ValidatorException $e) {


            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        return redirect()->back()->with('message', 'Product deleted.');
    }
}
