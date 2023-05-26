<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $fillable = ['date', 'time', 'region_id', 'description'];

    public function region(){
        return $this->belongsTo(Region::class);
    }
}
