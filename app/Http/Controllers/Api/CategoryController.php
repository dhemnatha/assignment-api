<?php
namespace App\Http\Controllers\Api;

use App\Traits\ResponseAPI;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\CategoryInterface;


class CategoryController extends Controller
{
    use ResponseAPI;

    protected $categoryInteface;

    public function __construct(CategoryInterface $categoryInterface)
    {
        $this->categoryInterface = $categoryInterface;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->categoryInterface->getAllCategories();
    }

}
