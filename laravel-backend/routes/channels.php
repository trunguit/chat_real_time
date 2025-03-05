<?php

use Illuminate\Support\Facades\Broadcast;
Broadcast::routes(['middleware' => ['auth:sanctum']]);
Broadcast::channel('friend-request.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
Broadcast::channel('friend-request-updated.{userId}', function ($user, $userId) {
    return (int) $user->id === (int) $userId;
});
Broadcast::channel('friend-send-message.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});