<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;
    protected $table = "inscripciones";

    public function getIdAttribute($value)
    : string
    {
        return ucfirst($value);
    }

    public function setNombreAttribute(string $value)
    {
        $this->attributes['nombre'] = strtoupper($value);
    }

    public function setApellidoAttribute(string $value)
    {
        $this->attributes['apellido'] = strtoupper($value);
    }

    public function setEmailAttribute(string $value)
    {
        $this->attributes['email'] = strtoupper($value);
    }

    public function setDireccionAttribute(string $value)
    {
        $this->attributes['direccion'] = strtoupper($value);
    }
}
