<?php

namespace App\Repositories\Admin;

use App\Models\Category;

class CategoryRepository
{
    public function getCategories() {
        return Category::orderBy('created_at', 'DESC')->get();
    }

}
