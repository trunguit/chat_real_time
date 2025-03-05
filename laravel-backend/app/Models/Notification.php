<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $guarded = [];
    protected $casts = [
        'data' => 'array',
        'is_read' => 'boolean',
    ];
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }
}
