<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];
    public function sender(){
        return $this->belongsTo(User::class, 'sender_id');
    }
    public function recipients(){
        return $this->belongsToMany(User::class, 'message_recipients', 'message_id', 'recipient_id');
    }
}
