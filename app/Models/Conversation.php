<?php

namespace App\Models;
use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
   protected $fillable = [
        'user_id1',
        'user_id2',
        'last_message_id',
   
    ];

    public function lastMessage(){
        return $this->belongsTo(Message::class, 'last_message_id');
    }

    public function user1()
    {
        return $this->belongsTo(User::class, 'user_id1');
    }
}
