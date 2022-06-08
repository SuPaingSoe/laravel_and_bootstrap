<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;
use App\Models\Reply;
use Illuminate\Support\Facades\DB;

class CommentsController extends Controller
{
    public function index()
    {
        return view('/q&a.qacomment', [
        'comments'=>Comment::paginate(3),
        'replies'=>Reply::all()]);
    }

    public function create()
    {
        $formData=request()->validate([
            'body'=>['required'],
            ], [
                'body.required'=>'comment should be.'
            ]);

        $formData['user_name'] = auth()->user()->user_name;
        $formData['user_id'] = auth()->id();
        $formData['comment_body'] = request()->body;

        Comment::create($formData);
        return redirect('/comments');
    }

    public function store(Request $request)
    {
        $formData=request()->validate([
            'reply'=>['required'],
            ], [
                'reply.required'=>'reply should be.'
            ]);

        $formData['user_name'] = auth()->user()->user_name;
        $formData['user_id'] = auth()->id();
        $formData['reply_body'] = request()->reply;

        Comment::create($formData);
        return redirect('/comments');
    }
}
