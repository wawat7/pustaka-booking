<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryRequest;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public CategoryService $service;


    public function __construct()
    {
        $this->service = new CategoryService;
    }

    public function index()
    {
        return view('admin.category.index', [
            'categories' => $this->service->all()
        ]);
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryRequest $request)
    {
        $this->service->create($request->toArray());
        return redirect()->route('admin.category.index');
    }

    public function edit($id)
    {
        return view('admin.category.edit', [
            'category' => $this->service->findById($id)
        ]);
    }

    public function update(CategoryRequest $request, int $id)
    {
        $this->service->updateById($id, [
            'name' => $request->name
        ]);
        return redirect()->route('admin.category.index');
    }

    public function delete(int $id)
    {
        $this->service->deleteById($id);
        return redirect()->route('admin.category.index');
    }
}
