<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    private Category $model;

    public function __construct() {
        $this->model = new Category;
    }

    public function all()
    {
        return $this->model->latest()->get();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function findById(int $id)
    {
        return $this->model->find($id);
    }

    public function updateById(int $id, array $data)
    {
        return $this->model->where('id', $id)->update($data);
    }

    public function deleteById(int $id)
    {
        return $this->model->destroy($id);
    }
}
