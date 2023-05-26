<?php

namespace App;

use App\Http\Controllers\DocumentController;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['document_id', 'comment'];

    public function document(){
        return $this->belongsTo(Document::class);
    }
}
