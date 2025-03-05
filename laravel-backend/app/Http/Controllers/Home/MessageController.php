<?php

namespace App\Http\Controllers\Home;

use App\Events\FriendSendMessage;
use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
   public function getMessages(Request $request){
        $senderId = $request->friendId;
        $receiverId = Auth::user()->id;
        $messages = Message::where(function ($query) use ($senderId, $receiverId) {
                        $query->where('sender_id', $senderId)
                            ->where('receiver_id', $receiverId);
                    })->orWhere(function ($query) use ($senderId, $receiverId) {
                        $query->where('sender_id', $receiverId)
                            ->where('receiver_id', $senderId);
                    })->orderBy('created_at', 'desc')->get();
        return response()->json(['messages' => $messages], 200);
   }
    public function sendMessages(Request $request){
          $message = new Message();
          $message->sender_id = Auth::user()->id;
          $message->receiver_id = $request->receiverId;
          $message->content = $request->message;
          $message->save();

          broadcast(new FriendSendMessage(Auth::user(), $request->receiverId, $message));

          return response()->json(['message' => 'Message sent successfully'], 200);
     }
}
