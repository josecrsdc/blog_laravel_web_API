<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'contenido'];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function comentarios()
    {
        return $this->hasMany('App\Models\Comentario');
    }

}
