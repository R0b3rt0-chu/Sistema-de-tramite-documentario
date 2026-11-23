@extends('layouts.main')

@section('subtitulo', 'Perfil')

@section('contenido')
    <div class="max-w-4xl mx-auto space-y-6">
        @if (session('success'))
            <div class="bg-emerald-50 border border-emerald-200 text-emerald-700 px-4 py-3 rounded-xl text-sm flex items-center space-x-2">
                <i class="fas fa-check-circle"></i>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <!-- Tarjeta superior: resumen del usuario -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div class="flex items-center space-x-4">
                <div class="w-16 h-16 rounded-full bg-blue-600 text-white font-bold text-xl flex items-center justify-center shrink-0">
                    {{ strtoupper(substr($user->name, 0, 2)) }}
                </div>
                <div>
                    <h2 class="text-lg font-bold text-slate-800">{{ $user->name }}</h2>
                    <p class="text-sm text-slate-500">{{ $user->rol ?? 'Administrativo' }} · {{ $user->oficina->nombre ?? 'Sin oficina asignada' }}</p>
                    <p class="text-xs text-slate-400 mt-0.5">{{ $user->email }}</p>
                </div>
            </div>
            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-50 text-blue-700 border border-blue-200 self-start sm:self-auto">
                <i class="fas fa-circle text-[8px] mr-1.5 text-emerald-500"></i> Sesión activa
            </span>
        </div>

        <!-- Tarjeta inferior: formulario de actualización -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6 sm:p-8">
            <div class="mb-6">
                <h3 class="text-base font-bold text-slate-800">Información Personal</h3>
            
            </div>

            <form method="POST" action="{{ route('perfil.update') }}" class="space-y-4">
                @csrf
                @method('PUT')

                <div>
                    <label for="name" class="block text-sm font-medium text-slate-700 mb-1">Nombre completo</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400">
                            <i class="fas fa-user"></i>
                        </span>
                        <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}"
                            class="w-full pl-10 pr-4 py-2.5 border border-slate-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Correo electrónico</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <input type="text" id="email" name="email" value="{{ old('email', $user->email) }}"
                                class="w-full pl-10 pr-4 py-2.5 border border-slate-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="telefono" class="block text-sm font-medium text-slate-700 mb-1">Teléfono</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400">
                                <i class="fas fa-phone"></i>
                            </span>
                            <input type="text" id="telefono" name="telefono" value="{{ old('telefono', $user->telefono) }}"
                                placeholder="987 654 321"
                                class="w-full pl-10 pr-4 py-2.5 border border-slate-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        @error('telefono')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Rol / Cargo</label>
                        <input type="text" value="{{ $user->rol ?? 'Administrativo' }}" disabled
                            class="w-full px-4 py-2.5 bg-slate-100 border border-slate-200 rounded-xl text-sm text-slate-500 cursor-not-allowed">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Oficina</label>
                        <input type="text" value="{{ $user->oficina->nombre ?? 'Sin oficina asignada' }}" disabled
                            class="w-full px-4 py-2.5 bg-slate-100 border border-slate-200 rounded-xl text-sm text-slate-500 cursor-not-allowed">
                    </div>
                </div>

                <div class="pt-2 flex justify-end">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2.5 px-5 rounded-xl shadow-sm transition inline-flex items-center space-x-2 cursor-pointer">
                        <i class="fas fa-save"></i>
                        <span>Actualizar datos</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection