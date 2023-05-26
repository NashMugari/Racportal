<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $fillable = ['name', 'file', 'status', 'region_id'];

    public function region(){
        return $this->belongsTo(Region::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
