<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    protected $fillable = [
        'codigo_expediente', 'cliente_id', 'tipo_tramite',
        'asunto', 'folios', 'archivo_adjunto', 'estado'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function movimientos()
    {
        return $this->hasMany(Movimiento::class);
    }
}