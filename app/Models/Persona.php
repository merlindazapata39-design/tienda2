<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = 'persona';

    protected $fillable = [
        'nombre',
        'apllido', // Reemplaza esto por 'apellido' si corriges el nombre en la migración
        'ci',
        'celular',
        'fecha_de_nacimiento',
        'correo',
    ];
}
