<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Service;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index',[
            'allNews'=>News::orderBy('id','desc')->filter
            (request(['search']))->paginate(4)->appends(request()->query()),
            'sideNews'=>News::orderBy('id','desc')->take(4)->get(),
            'sideServices'=>Service::latest()->take(5)->get()
        ]);
    }

    public function show(News $news)
    {
        return view('news.news-detail',[
            'news'=>$news,
            'sideNews'=>News::orderBy('id','desc')->take(4)->get(),
            'sideServices'=>Service::latest()->take(5)->get()
        ]);
    }
}
