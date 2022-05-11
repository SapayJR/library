<?php

namespace App\Repository\Interfaces;

interface CategoryRepoInterface
{
    public function getCategoriesList();

    public function getCategoryById($id);

    public function getCategoryByAlias($alias);
}
