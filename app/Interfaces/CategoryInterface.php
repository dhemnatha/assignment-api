<?php

namespace App\Interfaces;

use App\Http\Requests\CategoryRequest;

interface CategoryInterface
{
    /**
     * Get all Categories     *
     * @method  GET api/Categories
     * @access  public
     */
    public function getAllCategories();
}
