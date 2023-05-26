<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = ['name'];

//    /**
//     * Retrieve racContacts in a particular region
//     * @return \Illuminate\Database\Eloquent\Relations\HasMany
//     */
//    public function racContacts(){
//        return $this->hasMany(RacContact::class);
//    }
//
    public function users(){
        return $this->hasMany(User::class);
    }

    /**
     * Retrieve meetings in a particular region
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function meetings(){
        return $this->hasMany(Meeting::class);
    }
}
