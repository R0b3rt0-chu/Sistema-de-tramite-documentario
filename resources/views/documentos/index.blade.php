@extends('layouts.main')

@section('subtitulo', 'Documentos')

@section('contenido')
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
            <div>
                <h2 class="text-xl font-bold text-slate-800">Bandeja de Documentos y Derivaciones</h2>
                <p class="text-sm text-slate-500">Control de documentos recibidos, derivados y archivados por oficina.</p>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-slate-200 text-slate-600 text-sm bg-slate-50">
                        <th class="py-3 px-4 font-semibold">Expediente</th>
                        <th class="py-3 px-4 font-semibold">Origen</th>
                        <th class="py-3 px-4 font-semibold">Destino</th>
                        <th class="py-3 px-4 font-semibold">Proveído / Observación</th>
                        <th class="py-3 px-4 font-semibold text-center">Archivo</th>
                        <th class="py-3 px-4 font-semibold text-right">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-sm text-slate-700">
                    <tr>
                        <td colspan="6" class="py-8 text-center text-slate-400">
                            No hay movimientos documentarios en bandeja.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection