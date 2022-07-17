<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\News;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BlogsController extends Controller
{
    public function index()
    {
        return view('blogs.index',[
            'blogs'=>Blog::orderBy('id','desc')->filter
            (request(['search']))->paginate(4)->appends(request()->query()),
            'sideNews'=>News::orderBy('id','desc')->take(4)->get(),
            'sideServices'=>Service::latest()->take(5)->get()
        ]);
    }

    public function show(Blog $blog)
    {
        $blogs = $blog->comments();
        return view('blogs.blog-detail',[
            'blog'=>$blog,
            'comments'=>$blogs->paginate(4),
            'sideNews'=>News::orderBy('id','desc')->take(4)->get(),
            'sideServices'=>Service::latest()->take(5)->get()
        ]);
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
       $data = $request->validate([
            'title'=>['required','min:3','max:200',Rule::unique('blogs','title')],
            'description'=>'required'
        ]);

        $data['user_id'] = auth()->id();

        Blog::create($data);

        return redirect(env('APP_URL') . 'blogs/index');


    }
}
