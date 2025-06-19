<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $fillable = [
        'titulo', 'autor', 'genero', 'fecha_publicacion', 'estado'
    ];
}
