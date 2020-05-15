<?php
namespace App\Http\Controllers;

use App\Events\ChatEvent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     **/

    public function __construct(){
        $this->middleware('auth');
    }

    public function Send(request $request)
    {
        event(new ChatEvent($request->message, User::all()->toArray()));
    }

    public function SaveToSession(request $request)
    {
        session()->put('chat', $request->chat);
    }

    public function GetOldMessage()
    {
        return session('chat');
    }

    public function DeleteSession()
    {
        session()->forget('chat');
    }
}
