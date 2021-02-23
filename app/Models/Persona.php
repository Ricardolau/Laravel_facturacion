<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $fillable=[
                        'tipo_documento', 'pais_documento', 'numero_documento', 'nombre', 'apellido1', 'apellido2', 'razon_social','nombre_comercial', 'comentario',
    ];

    function getNombreCompletoAttribute() {
        return $this->attributes['nombre'] . ' ' . $this->attributes['apellido1'] . ' ' . $this->attributes['apellido2'];
    }
    function getNombreInicialesAttribute() {
        //~ $a1= $this->attributes['apellido2'];
        $a1= substr($this->attributes['apellido2'],0,1);
        return $this->attributes['nombre'] . ' ' . $this->attributes['apellido1'].$a1 . '. ';
    }
}
