<?php

namespace Ifranco88\LaravelSupportChat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupportChatController extends Controller
{
    public function index(){
        return view('supportchat::index');
    }
}
