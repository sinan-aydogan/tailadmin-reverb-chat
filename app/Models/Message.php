<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'content',
        'user_id',
        'channel_id',
    ];

    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
