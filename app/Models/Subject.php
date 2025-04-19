<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //
    protected $fillable=[
        'subject',
        'topic',
        'glb_path',
        'embed_code',
    ];
   //hasMany relationship with Comment
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
   

}
