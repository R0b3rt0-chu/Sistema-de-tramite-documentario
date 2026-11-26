<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::withCount('tramites')->get();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'dni_ruc' => 'required|string|max:20|unique:clientes,dni_ruc',
            'nombre' => 'required|string|max:255',
            'tipo' => 'required|string|max:100',
            'telefono' => 'nullable|string|max:20',
            'correo' => 'nullable|email|max:255',
        ], [
            'dni_ruc.required' => 'El DNI o RUC es obligatorio.',
            'dni_ruc.unique' => 'Ese DNI o RUC ya está registrado.',
            'nombre.required' => 'El nombre del solicitante es obligatorio.',
            'tipo.required' => 'Selecciona el tipo de solicitante.',
            'correo.email' => 'Ingresa un correo electrónico válido.',
        ]);

        try {
            $cliente = new Cliente();
            $cliente->dni_ruc = $request->dni_ruc;
            $cliente->nombre = $request->nombre;
            $cliente->tipo = $request->tipo;
            $cliente->telefono = $request->telefono;
            $cliente->correo = $request->correo;
            $cliente->save();

            return redirect()->route('clientes')->with('correcto', 'Solicitante registrado correctamente.');
        } catch (\Exception $e) {
            Log::error('Error al guardar cliente: ' . $e->getMessage());
            return redirect()->route('clientes')->with('error', 'No se pudo registrar el solicitante.');
        }
    }
}