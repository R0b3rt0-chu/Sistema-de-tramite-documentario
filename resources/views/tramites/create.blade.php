@extends('layouts.main')

@section('subtitulo', 'Registrar Trámite')

@section('contenido')
    <div class="max-w-4xl mx-auto space-y-6">
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6 flex items-center justify-between">
            <div>
                <h2 class="text-lg font-bold text-slate-800">Nuevo Trámite / Expediente</h2>
                <p class="text-sm text-slate-500">Completa los datos para registrar el documento.</p>
            </div>
            <a href="{{ route('tramites') }}"
                class="text-sm font-medium text-slate-600 hover:text-slate-800 px-3 py-2 rounded-xl border border-slate-200">
                <i class="fas fa-arrow-left mr-1"></i> Volver al listado
            </a>
        </div>

        @if ($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl text-sm">
                <p class="font-semibold mb-1">Revisa los siguientes campos:</p>
                <ul class="list-disc list-inside space-y-0.5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6 sm:p-8">
            <form method="POST" action="{{ route('tramites.store') }}" class="space-y-4">
                @csrf

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="codigo_expediente" class="block text-sm font-medium text-slate-700 mb-1">Código de Expediente</label>
                        <input type="text" id="codigo_expediente" name="codigo_expediente" value="{{ old('codigo_expediente') }}" required
                            placeholder="EXP-2026-001"
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="cliente_id" class="block text-sm font-medium text-slate-700 mb-1">Solicitante / Cliente</label>
                        <select id="cliente_id" name="cliente_id" required
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">Seleccione un cliente</option>
                            @foreach ($clientes as $cliente)
                                <option value="{{ $cliente->id }}" {{ old('cliente_id') == $cliente->id ? 'selected' : '' }}>
                                    {{ $cliente->nombre ?? $cliente->nombres ?? $cliente->razon_social ?? 'Cliente #' . $cliente->id }}
                                </option>
                            @endforeach
                        </select>
                        @if ($clientes->isEmpty())
                            <p class="text-xs text-amber-600 mt-1">No hay clientes registrados aún. Crea uno en la base de datos o en el módulo de clientes.</p>
                        @endif
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="tipo_tramite" class="block text-sm font-medium text-slate-700 mb-1">Tipo de Trámite</label>
                        <input type="text" id="tipo_tramite" name="tipo_tramite" value="{{ old('tipo_tramite') }}" required
                            placeholder="Ej: Solicitud, Constancia, Carta"
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="folios" class="block text-sm font-medium text-slate-700 mb-1">Folios</label>
                        <input type="number" id="folios" name="folios" value="{{ old('folios', 1) }}" min="1" required
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <div>
                    <label for="asunto" class="block text-sm font-medium text-slate-700 mb-1">Asunto</label>
                    <input type="text" id="asunto" name="asunto" value="{{ old('asunto') }}" required
                        placeholder="Motivo o resumen del trámite"
                        class="w-full px-4 py-2.5 border border-slate-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div>
                    <label for="archivo_adjunto" class="block text-sm font-medium text-slate-700 mb-1">Archivo adjunto (opcional)</label>
                    <input type="text" id="archivo_adjunto" name="archivo_adjunto" value="{{ old('archivo_adjunto') }}"
                        placeholder="Nombre o referencia del archivo"
                        class="w-full px-4 py-2.5 border border-slate-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="pt-2 flex justify-end space-x-3">
                    <a href="{{ route('tramites') }}"
                        class="px-4 py-2.5 rounded-xl border border-slate-300 text-sm font-medium text-slate-700 hover:bg-slate-50">
                        Cancelar
                    </a>
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2.5 px-5 rounded-xl shadow-sm transition inline-flex items-center space-x-2 cursor-pointer">
                        <i class="fas fa-save"></i>
                        <span>Guardar trámite</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection