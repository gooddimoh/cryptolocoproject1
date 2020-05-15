<?php
namespace App\Http\Controller;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ChatkitController extends Controller {

    private $chatkit;
    private $roomId;
    private $goupId;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index(Request $request){
        $userId = $request->session()->get('chatkit_id')[0];
        if (!is_null($userId)) {
            return redirect(route('chat'));
        }

        return view('welcome');
    }

    public function Join(Request $request){
        $chatkit_id = strtolower(str_random(5));
        $this->chatkit->createUser(['id' => $chatkit_id, 'name' => $request->username,]);
        $this->chatkit->addUsersToRoom(['room_id' => $this->roomId, 'user_ids' => [$chatkit_id],]);
        $request->session()->push('chatkit_id', $chatkit_id);

        return redirect(route('chat'));
    }

    public function Chat(Request $request){
        $roomId = $this->roomId;
        $userId = $request->session()->get('chatkit_id')[0];

        if (is_null($userId)) {
            $request->session()->flash('status', 'Join to access chat room!');
            return redirect(url('/'));
        }

        $fetchMessages = $this->chatkit->getRoomMessages(['room_id' => $roomId, 'direction' => 'newer','limit' => 100]);
        $messages = collect($fetchMessages['body'])->map(function ($message) {
            return [
                'id' => $message['id'],
                'senderId' => $message['user_id'],
                'text' => $message['text'],
                'timestamp' => $message['created_at']
            ];
        });

        return view('chat')->with(compact('messages', 'roomId', 'userId'));
    }

    public function Authenticate(Request $request){
        $response = $this->chatkit->authenticate(['user_id' => $request->user_id,]);
        return response()->json($response['body'],$response['status']);
    }

    public function SendMessage(Request $request){
        $message = $this->chatkit->sendSimpleMessage([ 'sender_id' => $request->user, 'room_id' => $this->roomId, 'text' => $request->message ]);

        return response($message);
    }

    public function GetUsers()
    {
        $users = $this->chatkit->getUsers();
        return response($users);
    }

    public function Logout(Request $request){
        $request->session()->flush();

        return redirect(url('/'));
    }

}

