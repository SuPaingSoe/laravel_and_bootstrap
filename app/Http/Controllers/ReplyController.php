<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reply;

class ReplyController extends Controller
{
    public function create()
    {
        $formData=request()->validate([
            'reply'=>['required'],
            ], [
                'reply.required'=>'reply should be.'
            ]);

        $formData['user_name'] = auth()->user()->name;
        $formData['comment_id'] = request()->get('comment_id');
        $formData['reply_body'] = request()->reply;
        $formData['user_id'] = auth()->id();

        Reply::create($formData);
        return redirect('/comments');
    }
}
