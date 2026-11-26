@extends('layouts.main')

@section('subtitulo', 'Registrar Cliente')

@section('contenido')
    <div class="max-w-4xl mx-auto space-y-6">
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6 flex items-center justify-between">
            <div>
                <h2 class="text-lg font-bold text-slate-800">Nuevo Solicitante / Cliente</h2>
                <p class="text-sm text-slate-500">Registra los datos de la persona que presentará trámites en el CETPRO.</p>
            </div>
            <a href="{{ route('clientes') }}"
                class="text-sm font-medium text-slate-600 hover:text-slate-800 px-3 py-2 rounded-xl border border-slate-200">
                <i class="fas fa-arrow-left mr-1"></i> Volver al directorio
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
            <form method="POST" action="{{ route('clientes.store') }}" class="space-y-4">
                @csrf

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="dni_ruc" class="block text-sm font-medium text-slate-700 mb-1">DNI / RUC</label>
                        <input type="text" id="dni_ruc" name="dni_ruc" value="{{ old('dni_ruc') }}" required
                            placeholder="Ej: 71234567"
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="tipo" class="block text-sm font-medium text-slate-700 mb-1">Tipo de Solicitante</label>
                        <select id="tipo" name="tipo" required
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="Estudiante" {{ old('tipo') == 'Estudiante' ? 'selected' : '' }}>Estudiante</option>
                            <option value="Egresado" {{ old('tipo') == 'Egresado' ? 'selected' : '' }}>Egresado</option>
                            <option value="Docente / Personal" {{ old('tipo') == 'Docente / Personal' ? 'selected' : '' }}>Docente / Personal</option>
                            <option value="Público General" {{ old('tipo') == 'Público General' ? 'selected' : '' }}>Público General</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label for="nombre" class="block text-sm font-medium text-slate-700 mb-1">Nombres y Apellidos / Razón Social</label>
                    <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required
                        placeholder="Ej: Juan Carlos Pérez López"
                        class="w-full px-4 py-2.5 border border-slate-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="telefono" class="block text-sm font-medium text-slate-700 mb-1">Teléfono / Celular (opcional)</label>
                        <input type="text" id="telefono" name="telefono" value="{{ old('telefono') }}"
                            placeholder="Ej: 987654321"
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>

                    <div>
                        <label for="correo" class="block text-sm font-medium text-slate-700 mb-1">Correo electrónico (opcional)</label>
                        <input type="email" id="correo" name="correo" value="{{ old('correo') }}"
                            placeholder="correo@ejemplo.com"
                            class="w-full px-4 py-2.5 border border-slate-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>

                <div class="pt-2 flex justify-end space-x-3">
                    <a href="{{ route('clientes') }}"
                        class="px-4 py-2.5 rounded-xl border border-slate-300 text-sm font-medium text-slate-700 hover:bg-slate-50">
                        Cancelar
                    </a>
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2.5 px-5 rounded-xl shadow-sm transition inline-flex items-center space-x-2 cursor-pointer">
                        <i class="fas fa-save"></i>
                        <span>Guardar cliente</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection