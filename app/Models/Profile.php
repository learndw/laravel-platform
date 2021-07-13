<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    //Relacion uno a uno
    public function profile()
    {
        return $this->hasOne(User::class);
    }
}
