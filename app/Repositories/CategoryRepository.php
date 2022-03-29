<?php

namespace App\Repositories;

use App\Interfaces\CategoryInterface;
use App\Traits\ResponseAPI;
use App\Models\Category;

class CategoryRepository implements CategoryInterface
{
    // Use ResponseAPI Trait in this repository
    use ResponseAPI;

    public function getAllCategories()
    {
        try {
            $categories = Category::all();
            return $this->success($categories,"Categories");
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), $e->getCode());
        }
    }

}
