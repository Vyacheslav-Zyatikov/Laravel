<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $model = new Category();
        $categories = $model->getCategories();
        return view('news.indexCategory', [
            'categories' => $categories
        ]);
    }

    public function show(int $id)
    {
        $model = new Category();

        return view('news.showCategory', [
            'category' => $model->getCategoryByID($id)
        ]);
    }
}
