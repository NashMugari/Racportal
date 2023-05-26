<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = ['user1_id', 'user2_id', 'status'];

    public function region(){
        return $this->belongsTo(Region::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
