<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    protected $fillable = ['nombre', 'siglas', 'estado'];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}