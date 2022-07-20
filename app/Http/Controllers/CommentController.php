<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function edit(Comment $comment)
    {
        return view('blogs.edit-comment',[
            'comment'=> $comment
        ]);
    }

    public function update(Request $request, Comment $comment)
    {

        $data = $request->validate([
            'text'=>['required','min:1','max:2000']
        ]);

        $data['user_id'] = $comment->user_id;
        $data['blog_id'] = $comment->blog_id;

        $comment->update($data);

        return redirect(env('APP_URL') .'blogs/' . $comment->blog_id);
    }

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

    public function destroy(Comment $comment)
    {
        if($comment->user_id != auth()->id()){
            abort(403,'Unauthorized Action');
        }

        $comment->delete();

        return back();
    }
}
