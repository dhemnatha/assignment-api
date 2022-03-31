<?php

namespace App\Repositories;

use App\Interfaces\CategoryInterface;
use App\Models\Category;
use App\Traits\ResponseAPI;
use Exception;

class CategoryRepository implements CategoryInterface
{
    use ResponseAPI;

    public function getCategoriesWithSubCategories()
    {
        try {
            $categories = Category::all();
            return $this->success($categories, "Categories");
        } catch (Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

}
