@extends('layouts.main')

@section('subtitulo', 'Trámites')

@section('contenido')
    <!-- Bloque Superior: Consulta Rápida de Trámite -->
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6 mb-6">
        <h3 class="text-lg font-bold text-slate-800 mb-1">Consultar estado de trámite</h3>
        <p class="text-sm text-slate-500 mb-4">Ingresa el número de expediente o DNI del solicitante para rastrear su ubicación.</p>
        
        <form action="#" method="GET" class="flex flex-col sm:flex-row gap-3">
            <input type="text" placeholder="Ej: EXP-2026-001 o N° DNI" 
                   class="border border-slate-300 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-indigo-600 flex-1">
            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2.5 rounded-xl text-sm font-medium transition">
                <i class="fas fa-search mr-2"></i> Consultar Trámite
            </button>
        </form>
    </div>

    <!-- Bloque Inferior: Expedientes Ingresados -->
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
            <div>
                <h2 class="text-xl font-bold text-slate-800">Registro de Expedientes (Mesa de Partes)</h2>
                <p class="text-sm text-slate-500">Trámites solicitados por estudiantes y público en general.</p>
            </div>
            <a href="#" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2.5 rounded-xl text-sm font-medium transition shadow-sm">
                <i class="fas fa-file-medical mr-1"></i> Registrar Trámite
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-slate-200 text-slate-600 text-sm bg-slate-50">
                        <th class="py-3 px-4 font-semibold">N° Expediente</th>
                        <th class="py-3 px-4 font-semibold">Fecha</th>
                        <th class="py-3 px-4 font-semibold">Solicitante</th>
                        <th class="py-3 px-4 font-semibold">Asunto / Tipo</th>
                        <th class="py-3 px-4 font-semibold">Oficina Actual</th>
                        <th class="py-3 px-4 font-semibold text-center">Estado</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-sm text-slate-700">
                    <tr>
                        <td colspan="6" class="py-8 text-center text-slate-400">
                            No hay expedientes registrados todavía.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection