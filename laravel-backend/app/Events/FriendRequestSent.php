<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use App\Models\User; // Import model User

class FriendRequestSent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public  $sender;
    public  $receiver;

    /**
     * Create a new event instance.
     */
    public function __construct($sender, $receiver)
    {
        $this->sender = $sender;
        $this->receiver = $receiver;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn()
    {
        return new PrivateChannel('friend-request.' . $this->receiver);
    }

    /**
     * Set the event name for frontend listener
     */
    public function broadcastAs()
    {
        return 'friend.request.sent';
    }

    /**
     * The data to broadcast
     */
    public function broadcastWith()
    {
        return [
            'message' => "{$this->sender->name} đã gửi cho bạn một lời mời kết bạn!",
            'sender' => [
                'id' => $this->sender->id,
                'name' => $this->sender->name,
                'avatar' => $this->sender->avatar ?? '/default-avatar.png', 
                'time'=> date('Y-m-d H:i:s'),
            ],
        ];
    }
}
