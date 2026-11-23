<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    protected $fillable = [
        'tramite_id', 'oficina_origen_id', 'oficina_destino_id',
        'user_id', 'proveido', 'archivo_respuesta', 'estado_movimiento'
    ];

    public function tramite()
    {
        return $this->belongsTo(Tramite::class);
    }

    public function oficinaOrigen()
    {
        return $this->belongsTo(Oficina::class, 'oficina_origen_id');
    }

    public function oficinaDestino()
    {
        return $this->belongsTo(Oficina::class, 'oficina_destino_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}