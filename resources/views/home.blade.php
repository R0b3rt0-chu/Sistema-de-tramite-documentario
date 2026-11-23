@extends('layouts.main')

@section('subtitulo', 'Inicio - Bienvenidos')

@section('contenido')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">


        <!-- Tarjeta Clientes -->
        <a href="{{ route('clientes') }}"
            class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md border border-slate-200 transition group">
            <div
                class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-xl mb-4 group-hover:bg-blue-600 group-hover:text-white transition-colors">
                <i class="fas fa-users"></i>
            </div>
            <h3 class="text-lg font-bold text-slate-800">Solicitud de estudiantes</h3>
            <p class="text-sm text-slate-500 mt-1">Inicio</p>
        </a>

        <!-- Tarjeta Oficinas -->
        <a href="{{ route('oficinas') }}"
            class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md border border-slate-200 transition group">
            <div
                class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-xl mb-4 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                <i class="fas fa-building"></i>
            </div>
            <h3 class="text-lg font-bold text-slate-800">Oficinas</h3>
            <p class="text-sm text-slate-500 mt-1">Áreas del CETPRO.</p>
        </a>

        <!-- Tarjeta Trámites -->
        <a href="{{ route('tramites') }}"
            class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md border border-slate-200 transition group">
            <div
                class="w-12 h-12 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center text-xl mb-4 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                <i class="fas fa-file-alt"></i>
            </div>
            <h3 class="text-lg font-bold text-slate-800">Trámites</h3>
            <p class="text-sm text-slate-500 mt-1">Control de expedientes.</p>
        </a>

        <!-- Tarjeta Documentos -->
        <a href="{{ route('documentos') }}"
            class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md border border-slate-200 transition group">
            <div
                class="w-12 h-12 rounded-xl bg-teal-50 text-teal-600 flex items-center justify-center text-xl mb-4 group-hover:bg-teal-600 group-hover:text-white transition-colors">
                <i class="fas fa-folder-open"></i>
            </div>
            <h3 class="text-lg font-bold text-slate-800">Documentos</h3>
            <p class="text-sm text-slate-500 mt-1">Historial y archivos.</p>
        </a>

        <!-- Tarjeta: Perfil -->
        <a href="{{ route('perfil') }}"
            class="group bg-white rounded-2xl shadow-sm border border-slate-200 p-6 hover:shadow-md hover:border-indigo-300 transition flex flex-col justify-between">
            <div class="flex items-center justify-between mb-4">
                <div
                    class="w-12 h-12 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center text-xl group-hover:bg-indigo-600 group-hover:text-white transition">
                    <i class="fas fa-user-circle"></i>
                </div>
                <span class="text-xs font-semibold text-indigo-600 bg-indigo-50 px-2.5 py-1 rounded-full">
                    Cuenta
                </span>
            </div>
            <div>
                <h3 class="text-lg font-bold text-slate-800 group-hover:text-indigo-600 transition">Mi Perfil</h3>
                <p class="text-sm text-slate-500 mt-1">Consulta y actualiza tus datos personales, correo, teléfono y oficina
                    asignada.</p>
            </div>
        </a>
    </div>
@endsection
