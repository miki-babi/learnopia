<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'username',
        'subject_id',
        'comment',
    ];
    //hasMany relationship with Subject
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
