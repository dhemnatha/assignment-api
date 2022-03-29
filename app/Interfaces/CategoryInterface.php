<?php

namespace App\Interfaces;

interface CategoryInterface
{
    /**
     * Get all Categories
     */
    public function getCategoriesWithSubCategories();
}
