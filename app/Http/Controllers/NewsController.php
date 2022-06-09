<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index',[
            'allNews'=>News::latest()->filter
            (request(['search']))->paginate(6)
        ]);
    }

    public function show(News $news)
    {
        return view('news.news-detail',[
            'news'=>$news
        ]);
    }
}
