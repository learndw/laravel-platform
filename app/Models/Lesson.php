<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    //Relacion de uno a uno
    public function description()
    {
        return $this->hasOne(Description::class);
    }

    //Relacion de uno a muchos inversa

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }

    //muchos a muchos
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    //Uno a uno polimorfica
    public function resource(){
        //Modelo con el que se relaciona y el metodo que define la relacion polimorfica
        return $this->morphOne(Resource::class,'resourceable');
    }
    
    //Uno a muchos polimorfica
    public function comments(){
        //Modelo con el que se relaciona y el metodo que define la relacion polimorfica
        return $this->morphMany(Comment::class,'commentable');
    }
    
    public function reactions(){
        //Modelo con el que se relaciona y el metodo que define la relacion polimorfica
        return $this->morphMany(Comment::class,'reactionable');
    }
}
