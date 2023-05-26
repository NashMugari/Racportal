<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatContent extends Model
{
    protected $fillable = ['chat_id', 'message'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
