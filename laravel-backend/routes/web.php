<?php

use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test-redis', function () {
    Redis::set('name', 'Taylor');
    return Redis::get('name');
});