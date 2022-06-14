<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\News;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index()
    {
        return view('blogs.index',[
            'blogs'=>Blog::orderBy('id','desc')->filter
            (request(['search']))->paginate(4),
            'sideNews'=>News::orderBy('id','desc')->take(4)->get()
        ]);
    }

    public function show(Blog $blog)
    {
        $blogs = $blog->comments();
        return view('blogs.blog-detail',[
            'blog'=>$blog,
            'comments'=>$blogs->paginate(4),
            'sideNews'=>News::orderBy('id','desc')->take(4)->get()
        ]);
    }
}
