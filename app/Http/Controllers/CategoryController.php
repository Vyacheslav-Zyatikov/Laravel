<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function indexCategory ()
    {
        $newsCategory = $this -> getCategory();

        return view ('news.indexCategory', [
            'newsCategory' => $newsCategory
        ]);
    }

    public function showCategory (int $id_category)
    {
        $newsCategory = $this -> getNewsCategoryById($id_category);

        return view ('news.showCategory', [
            'newsCategory' => $newsCategory
        ]);
    }
}
