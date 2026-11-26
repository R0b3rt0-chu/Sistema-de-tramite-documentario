<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    public function tramites()
    {
        return $this->hasMany(Tramite::class, 'cliente_id');
    }
}