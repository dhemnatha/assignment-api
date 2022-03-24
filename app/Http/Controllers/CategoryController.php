<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Traits\ResponseAPI;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    use ResponseAPI;

    public function index(){
        /*foreach (Category::all() as $category) {
            echo $category->category_name;
        }*/
$categories =Category::all();

        return $this->success([
            'categories' => $categories
        ]);
    }
}
