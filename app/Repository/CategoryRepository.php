<?php

namespace App\Repository;

use App\Models\Category;

class CategoryRepository implements Interfaces\CategoryRepoInterface
{
    private $model;

    /**
     * @param Category $model
     */
    public function __construct(Category $model)
    {
        $this->model = $model;
    }

    public function getCategoriesList()
    {
        return $this->model->orderBy('created_at', 'desc')->get();

    }

    public function getCategoryById($id)
    {
        // TODO: Implement getCategoryById() method.
    }

    public function getCategoryByAlias($alias)
    {
        // TODO: Implement getCategoryByAlias() method.
    }
}
