<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = ['user_id', 'chats', 'status'];

    public function region(){
        return $this->belongsTo(Region::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
