<?php

use App\Events\FriendRequestSent;
use App\Http\Controllers\Auth\AuthenticateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Home\MessageController;
use App\Http\Controllers\Home\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

Route::apiResource('register', RegisterController::class);
Route::apiResource('authenticate', AuthenticateController::class);
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/get-profile', [UserController::class, 'me']);
    Route::get('/search-contact/{email?}',[UserController::class, 'searchContact']);
    Route::post('/logout', [UserController::class, 'logout']);
    Route::post('/update-profile', [UserController::class, 'updateProfile']);
    Route::post('/send-friend-request', [UserController::class, 'sendFriendRequest']);
    Route::post('/update-friend-request', [UserController::class, 'updateFriendRequest']);
    Route::get('/fetch-notification', [UserController::class, 'fetchNotification']);
    Route::get('/friend-list', [UserController::class, 'getFriendList']);
    Route::get('/message/{friendId}', [MessageController::class, 'getMessages']);
    Route::post('/send-message', [MessageController::class, 'sendMessages']);
    Route::post('/change-avatar', [UserController::class, 'changeAvatar']);
});


