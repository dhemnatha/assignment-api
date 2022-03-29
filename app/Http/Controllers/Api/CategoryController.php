<?php

namespace App\Http\Controllers\Api;

use App\Traits\ResponseAPI;
use App\Http\Controllers\Controller;
use App\Interfaces\CategoryInterface;
use Illuminate\Http\Response;


class CategoryController extends Controller
{
    use ResponseAPI;

    protected $categoryInterface;

    public function __construct(CategoryInterface $categoryInterface)
    {
        $this->categoryInterface = $categoryInterface;
    }


    /**
     * @return Response
     */
    public function index()
    {
        return $this->categoryInterface->getCategoriesWithSubCategories();
    }

}
