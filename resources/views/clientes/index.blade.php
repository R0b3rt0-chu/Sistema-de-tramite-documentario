@extends('layouts.main')

@section('subtitulo', 'Directorio de Solicitantes')

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

    <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6">

        <!-- Encabezado, Buscador y Botón Nuevo Cliente -->
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-6">
            <div>
                <h2 class="text-xl font-bold text-slate-800">Solicitantes / Estudiantes</h2>
                <p class="text-sm text-slate-500">Consulta los datos y el historial de trámites por persona en el CETPRO.</p>
            </div>

            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                <form action="#" method="GET" class="flex items-center space-x-2">
                    <input type="text" name="buscar" placeholder="Buscar por DNI o apellidos..."
                        class="border border-slate-300 rounded-xl px-4 py-2 text-sm focus:outline-none focus:border-blue-600 w-full sm:w-64">
                    <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-xl text-sm font-medium transition cursor-pointer">
                        <i class="fas fa-search"></i>
                    </button>
                </form>

                <a href="{{ route('clientes.create') }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-xl text-sm font-medium transition shadow-sm inline-flex items-center justify-center space-x-1.5">
                    <i class="fas fa-user-plus"></i>
                    <span>Nuevo Cliente</span>
                </a>
            </div>
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
                    @forelse ($clientes as $cliente)
                        <tr class="hover:bg-slate-50">
                            <td class="py-3 px-4 font-semibold text-slate-800">{{ $cliente->dni_ruc }}</td>
                            <td class="py-3 px-4">{{ $cliente->nombre }}</td>
                            <td class="py-3 px-4">
                                <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-blue-50 text-blue-700 border border-blue-200">
                                    {{ $cliente->tipo }}
                                </span>
                            </td>
                            <td class="py-3 px-4">
                                <div>{{ $cliente->telefono ?? '-' }}</div>
                                <div class="text-xs text-slate-500">{{ $cliente->correo ?? '-' }}</div>
                            </td>
                            <td class="py-3 px-4 text-center">
                                <span class="px-2.5 py-1 rounded-full text-xs font-semibold bg-slate-100 text-slate-700">
                                    {{ $cliente->tramites_count }}
                                </span>
                            </td>
                            <td class="py-3 px-4 text-right text-slate-400">
                                -
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-8 text-center text-slate-400">
                                Aún no hay solicitantes registrados. Haz clic en "Nuevo Cliente" para agregar el primero.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection