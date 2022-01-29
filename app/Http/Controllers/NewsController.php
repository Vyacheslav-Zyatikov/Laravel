<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $model = new News();
        $news = $model->getNews();
        return view('news.index', [
            'newsList' => $news
        ]);
    }

    public function show(int $id)
    {
        $model = new News();

        return view('news.show', [
            'news' => $model->getNewsByID($id)
        ]);
    }

}
