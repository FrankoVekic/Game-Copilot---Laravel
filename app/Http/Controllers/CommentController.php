<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {

        $data = $request->validate([
            'text'=>['required','min:1','max:2000']
        ]);
        
        $data['user_id'] = $request->user_id;
        $data['blog_id'] = $request->blog_id;

        Comment::create($data);

        return back();
    }
}
