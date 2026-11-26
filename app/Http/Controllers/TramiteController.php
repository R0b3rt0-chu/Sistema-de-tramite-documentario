<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Tramite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TramiteController extends Controller
{
    public function index()
    {
        $tramites = Tramite::get();
        return view('tramites.index', compact('tramites'));
    }

    public function create()
    {
        $clientes = Cliente::get();
        return view('tramites.create', compact('clientes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'codigo_expediente' => 'required|string|max:100|unique:tramites,codigo_expediente',
            'cliente_id' => 'required|integer|exists:clientes,id',
            'tipo_tramite' => 'required|string|max:150',
            'asunto' => 'required|string|max:255',
            'folios' => 'nullable|integer|min:1',
            'archivo_adjunto' => 'nullable|string|max:255',
        ], [
            'codigo_expediente.required' => 'El código de expediente es obligatorio.',
            'codigo_expediente.unique' => 'Ese código de expediente ya está registrado.',
            'cliente_id.required' => 'Debes seleccionar un cliente.',
            'cliente_id.exists' => 'El cliente seleccionado no existe.',
            'tipo_tramite.required' => 'El tipo de trámite es obligatorio.',
            'asunto.required' => 'El asunto es obligatorio.',
            'folios.min' => 'La cantidad de folios debe ser al menos 1.',
        ]);

        try {
            $tramite = new Tramite();
            $tramite->codigo_expediente = $request->codigo_expediente;
            $tramite->cliente_id = $request->cliente_id;
            $tramite->tipo_tramite = $request->tipo_tramite;
            $tramite->asunto = $request->asunto;
            $tramite->folios = $request->folios ?? 1;
            $tramite->archivo_adjunto = $request->archivo_adjunto;
            $tramite->estado = 'pendiente';
            $tramite->save();

            return redirect()->route('tramites')->with('correcto', 'Trámite registrado correctamente.');
        } catch (\Exception $e) {
            Log::error('Error al guardar trámite: ' . $e->getMessage());
            return redirect()->route('tramites')->with('error', 'No se pudo registrar el trámite. Inténtalo nuevamente.');
        }
    }
}