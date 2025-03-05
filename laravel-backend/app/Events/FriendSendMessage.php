<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class FriendSendMessage implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $sender;
    public $receiver;
    public $message;

    public function __construct($sender, $receiver, $message)
    {
        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->message = $message;
    }

    public function broadcastOn()
    {
        return [
            new PrivateChannel('friend-send-message.' . $this->receiver),
            new PrivateChannel('friend-send-message.' . $this->sender->id),
        ] ;
    }

    public function broadcastAs()
    {
        return  'friend.send.message';
    }

    public function broadcastWith()
    {
        return [
            'message' => $this->message,
        ];
    }
}
