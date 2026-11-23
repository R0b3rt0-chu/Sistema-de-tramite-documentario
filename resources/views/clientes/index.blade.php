@extends('layouts.main')

@section('subtitulo', 'Directorio de Solicitantes')

@section('contenido')
    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">
        
        <!-- Encabezado y Buscador por DNI o Nombre -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
            <div>
                <h2 class="text-xl font-bold text-slate-800">Solicitantes / Estudiantes</h2>
                <p class="text-sm text-slate-500">Consulta los datos y el historial de trámites por persona en el CETPRO.</p>
            </div>

            <!-- Barra de búsqueda -->
            <form action="#" method="GET" class="flex items-center space-x-2">
                <input type="text" name="buscar" placeholder="Buscar por DNI o apellidos..." 
                       class="border border-slate-300 rounded-xl px-4 py-2 text-sm focus:outline-none focus:border-blue-600 w-64">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-xl text-sm font-medium transition">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>

        <!-- Tabla de Solicitantes -->
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-slate-200 text-slate-600 text-sm bg-slate-50">
                        <th class="py-3 px-4 font-semibold">DNI / RUC</th>
                        <th class="py-3 px-4 font-semibold">Solicitante</th>
                        <th class="py-3 px-4 font-semibold">Tipo</th>
                        <th class="py-3 px-4 font-semibold">Teléfono / Correo</th>
                        <th class="py-3 px-4 font-semibold text-center">Trámites Realizados</th>
                        <th class="py-3 px-4 font-semibold text-right">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 text-sm text-slate-700">
                    <tr>
                        <td colspan="6" class="py-8 text-center text-slate-400">
                            Los solicitantes aparecerán aquí automáticamente cuando registren su primer trámite en Mesa de Partes.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection