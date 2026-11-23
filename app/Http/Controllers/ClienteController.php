<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        // Muestra el directorio y buscador de solicitantes del CETPRO
        return view('clientes.index');
    }
}