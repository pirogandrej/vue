<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\ChatMessage;
use App\Comment;

class TasksController extends Controller
{
    public function comment(Request $request){
        $comment = $request->input('comment');
        event(new ChatMessage($comment));
    }
}
