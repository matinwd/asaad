<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\MenuUpdateRequest;
use App\Repositories\MenuRepository;

/**
 * Class MenuController.
 *
 * @package namespace App\Http\Controllers;
 */
class MenuController extends Controller
{
    protected $repository;

    public function __construct(MenuRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $menus = $this->repository->all();

        return view('admin.pages.menu.list', compact('menus'));
    }

    public function show($id)
    {
        $menu = $this->repository->find($id);

        if(request()->wantsJson()){
            return response()->json($menu['items']);
        }

        return view('admin.pages.menu.show', compact('menu'));
    }

    public function edit($id)
    {
        $menu = $this->repository->find($id);

        return view('admin.pages.menu.edit', compact('menu'));
    }


    public function update(MenuUpdateRequest $request, $id)
    {
        try {

            $attrs = $request->only(config('translatable.locales'));
            foreach ($attrs as $index => $item) {
                $items = json_decode($item['items'] ?? [], true);
                safeUrls($items);
                $attrs[$index]['items'] = $items;
            }

            $menu = $this->repository->update($attrs, $id);

            $response = [
                'message' => 'Menu updated.',
                'data'    => $menu->toArray(),
            ];


            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }
}
