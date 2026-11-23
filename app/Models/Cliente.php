<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'tipo_documento', 'numero_documento', 'nombres',
        'apellidos', 'telefono', 'email', 'especialidad'
    ];

    public function tramites()
    {
        return $this->hasMany(Tramite::class);
    }
}