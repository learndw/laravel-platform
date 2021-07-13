<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function commentable()
    {
        return $this->morphTo();
    }

    //Uno a muchos inverso
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Uno a muchos polimorfica
    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }

    public function reactions()
    {
        return $this->morphMany(Reaction::class,'reactionable');
    }
}
