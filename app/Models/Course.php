<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'status'];

    //Cuenta el numero de students de los registros
    protected $withCount = ['students', 'reviews'];

    //Constantes del estado del curso
    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

    //Query scopes: Sirve para obtener valores si el valor no es nulo
    public function scopeCategory($query, $category_id)
    {
        if ($category_id) {
            return $query->where('category_id',$category_id);
        }
    }
    public function scopeLevel($query, $level_id)
    {
        if ($level_id) {
            return $query->where('level_id',$level_id);
        }
    }

    //Obtener las reviews 
    public function getRatingAttribute()
    {
        if ($this->reviews_count) {
            //Redondear el valor cuando se obtiene mas de 2 decimales y si no contiene ningun ratin relacionando sera 0
            return round($this->reviews->avg('rating'), 2);
        } else {
            return 5;
        }
    }

    //Enves de usar el id del curso en la ruta utiliza el slug

    public function getRouteKeyName()
    {
        return 'slug';
    }

    //Uno a muchos inversa
    public function teacher()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function level()
    {
        return $this->belongsTo(Level::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function price()
    {
        return $this->belongsTo(Price::class);
    }

    //Muchos a muchos 
    public function students()
    {
        return $this->belongsToMany(User::class);
    }

    //Uno a muchos
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function requirements()
    {
        return $this->hasMany(Requirement::class);
    }

    public function goals()
    {
        return $this->hasMany(Goal::class);
    }

    public function audiences()
    {
        return $this->hasMany(Audience::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    //Uno a uno polimorfica

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }


    //Relacion de cursos con lecciones 

    public function lessons()
    {
        return $this->hasManyThrough(Lesson::class, Section::class);
    }
}
