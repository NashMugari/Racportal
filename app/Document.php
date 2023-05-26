<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['refNo', 'name', 'file', 'description', 'region_id'];

    public function region(){
        return $this->belongsTo(Region::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
