@extends('layouts.main')

@section('subtitulo', 'Trámites')

@section('contenido')
    @if (session('correcto'))
        <div class="bg-emerald-50 border border-emerald-200 text-emerald-700 px-4 py-3 rounded-xl text-sm mb-6 flex items-center space-x-2">
            <i class="fas fa-check-circle"></i>
            <span>{{ session('correcto') }}</span>
        </div>
    @endif

    @if (session('error'))
        <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl text-sm mb-6 flex items-center space-x-2">
            <i class="fas fa-exclamation-circle"></i>
            <span>{{ session('error') }}</span>
        </div>
    @endif

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
            <a href="{{ route('tramites.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2.5 rounded-xl text-sm font-medium transition shadow-sm">
                <i class="fas fa-file-medical mr-1"></i> Registrar Trámite
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-slate-200 text-slate-600 text-sm bg-slate-50">
                        <th class="py-3 px-4 font-semibold">N° Expediente</th>
                        <th class="py-3 px-4 font-semibold">Fecha</th>
                        <th class="py-3 px-4 font-semibold">Tipo / Asunto</th>
                        <th class="py-3 px-4 font-semibold">Folios</th>
                        <th class="py-3 px-4 font-semibold text-center">Estado</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-sm text-slate-700">
                    @forelse ($tramites as $tramite)
                        <tr class="hover:bg-slate-50">
                            <td class="py-3 px-4 font-semibold text-slate-800">{{ $tramite->codigo_expediente }}</td>
                            <td class="py-3 px-4">{{ $tramite->created_at ? $tramite->created_at->format('d/m/Y') : '-' }}</td>
                            <td class="py-3 px-4">
                                <span class="font-medium text-slate-800">{{ $tramite->tipo_tramite }}</span> — {{ $tramite->asunto }}
                            </td>
                            <td class="py-3 px-4">{{ $tramite->folios }}</td>
                            <td class="py-3 px-4 text-center">
                                <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-amber-50 text-amber-700 border border-amber-200">
                                    {{ $tramite->estado }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-8 text-center text-slate-400">
                                No hay expedientes registrados todavía.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection