<?php

namespace App\Http\Controllers\Home;

use App\Events\FriendRequestSent;
use App\Events\FriendRequestUpdated;
use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function me(Request $request)
    {
        $user = Auth::user();
        return response()->json(['user' => $user], 200);
    }
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'User logged out']);
    }

    public function updateProfile(Request $request)
    {

        $user = Auth::user();
        if (!$user) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20', // Có thể để trống, tối đa 20 ký tự
        ]);
        $userUpdate = User::find($user->id);
        $userUpdate->update($validatedData);

        return response()->json([
            'message' => 'User updated successfully',
            'user' => $user // Trả về user mới cập nhật
        ], 200);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function searchContact(Request $request)
    {
        $email = $request->email;
        $users = User::where('email', 'like', "%$email%")->get();
        return response()->json(['users' => $users], 200);
    }
    public function sendFriendRequest(Request $request)
    {
        $sender = Auth::user();
        $receiverId = $request->receiver_id;

        // Lưu vào database (giả sử có bảng friend_requests)
        Notification::create([
            'sender_id' => $sender->id,
            'receiver_id' => $receiverId,
            'status' => 'pending',
            'created_at' => now(),
            'is_read' => false,
            'type' => 'send-request-friend'
        ]);
        // Dispatch sự kiện
        broadcast(new FriendRequestSent($sender, $receiverId))->toOthers();

        return response()->json(['message' => 'Friend request sent!']);
    }
    public function updateFriendRequest(Request $request)
    {
        $sender = Auth::user();
        $notificationId = $request->notification_id;
        $receiverId = $request->receiver_id;
        $action = $request->action; // 'accepted' hoặc 'rejected'
        $receiver = User::find($receiverId);

        if (!$receiver) {
            return response()->json(['message' => 'Người dùng không tồn tại!'], 404);
        }

        // Xóa thông báo yêu cầu kết bạn trước đó
        Notification::find($notificationId)->delete();

        if ($action === 'accepted') {
            DB::table('friends')->insert([
                'user_id' => $sender->id,
                'friend_id' => $receiverId,
                'created_at' => now(),
            ]);
            DB::table('friends')->insert([
                'user_id' => $receiverId,
                'friend_id' => $sender->id,
                'created_at' => now(),
            ]);
            // Tạo thông báo
            $notifications = [
                [
                    'sender_id' => $sender->id,
                    'receiver_id' => $receiverId,
                    'status' => 'accepted',
                    'created_at' => now(),
                    'is_read' => false,
                    'type' => 'accept-request-friend',                ],
                [
                    'sender_id' =>  $receiverId,
                    'receiver_id' => $sender->id,
                    'status' => 'friend',
                    'created_at' => now(),
                    'is_read' => false,
                    'type' => 'friendship',
                ]
            ];
        } else {
            $notifications = [
                [
                    'sender_id' => $sender->id,
                    'receiver_id' => $receiverId,
                    'status' => 'rejected',
                    'created_at' => now(),
                    'is_read' => false,
                    'type' => 'reject-request-friend',
                ]
            ];
        }

        Notification::insert($notifications);
        \Log::info('Broadcasting FriendRequestUpdated event', [
            'sender_id' => $sender->id,
            'receiver_id' => $receiver->id,
            'action' => $action,
        ]);
        broadcast(new FriendRequestUpdated($sender, $receiver, $action));

        return response()->json(['message' => 'Friend request updated successfully!']);
    }
    public function fetchNotification(Request $request)
    {
        $user = Auth::user();
        $notifications = Notification::with('sender')->where('receiver_id', $user->id)->orderBy('created_at', 'desc')->get();
        return response()->json(['notifications' => $notifications], 200);
    }

    public function getFriendList(Request $request) {
        $user = Auth::user();
        $friends = $user->friends()->get()->map(function ($friend) use ($user) {
            $lastMessage = Message::where(function ($query) use ($user, $friend) {
                $query->where('sender_id', $user->id)->where('receiver_id', $friend->id);
            })->orWhere(function ($query) use ($user, $friend) {
                $query->where('sender_id', $friend->id)->where('receiver_id', $user->id);
            })->latest()->first();
    
            return [
                'id' => $friend->id,
                'name' => $friend->name,
                'avatar' => $friend->avatar, // Nếu có
                'last_message' => $lastMessage ? $lastMessage->content : null,
                'last_message_time' => $lastMessage ? $lastMessage->created_at->diffForHumans() : null,
            ];
        });
        return response()->json(['friends' => $friends], 200);
    }
}
