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

class FriendRequestUpdated  implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $sender;
    public $receiver;
    public $action;
    public $notifications;

    public function __construct($sender, $receiver, $action)
    {
        if (!$sender || !$receiver) {
            throw new \InvalidArgumentException('Sender and receiver must not be null.');
        }

        $this->sender = $sender;
        $this->receiver = $receiver;
        $this->action = $action;

        if ($action === 'accepted') {
            $this->notifications = [
                [
                    'type' => 'accept-request-friend',
                    'message' => "{$this->sender->name} đã đồng ý lời mời kết bạn của bạn!",
                    'sender' => [
                        'id' => $this->sender->id,
                        'name' => $this->sender->name,
                        'avatar' => $this->sender->avatar ?? '/default-avatar.png',
                    ],
                ],
                [
                    'type' => 'friendship',
                    'message' => "Bạn và {$this->sender->name} đã trở thành bạn bè!",
                    'sender' => [
                        'id' => $this->sender->id,
                        'name' => $this->sender->name,
                        'avatar' => $this->sender->avatar ?? '/default-avatar.png',
                    ],
                ],
            ];
        } else {
            $this->notifications = [
                [
                    'type' => 'reject-request-friend',
                    'message' => "{$this->sender->name} đã từ chối lời mời kết bạn của bạn.",
                    'sender' => [
                        'id' => $this->sender->id,
                        'name' => $this->sender->name,
                        'avatar' => $this->sender->avatar ?? '/default-avatar.png',
                    ],
                ],
            ];
        }
    }

    public function broadcastOn()
    {
        return [
            new PrivateChannel('friend-request-updated.' . $this->receiver->id),
            new PrivateChannel('friend-request-updated.' . $this->sender->id),
        ];
    }

    public function broadcastAs()
    {
        return 'friend.request.updated';
    }

    public function broadcastWith()
    {
        return [
            'action' => $this->action,
            'notifications' => $this->notifications ?? []
        ];
    }
}
