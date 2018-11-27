<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function getIndex(){
        $messages = Message::all();
        return view('chat.index', compact('messages'));
    }
}
