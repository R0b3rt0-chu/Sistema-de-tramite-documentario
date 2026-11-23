<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITDOC - CETPRO Chachapoyas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-slate-100 font-sans antialiased text-slate-800">

    <div class="flex min-h-screen">

        <!-- Menú Lateral -->
        <div class="w-72 bg-slate-900 text-slate-300 flex flex-col justify-between p-4 shadow-xl">
            <div>
                <!-- Logo -->
                <div class="flex items-center space-x-3 px-2 py-4 mb-2 border-b border-slate-800">
                    <div class="w-12 h-12 bg-slate-700 rounded-full flex items-center justify-center">
                        <img src="{{ asset('images/logo.jpg') }}" alt="Logo" class="w-10 h-10 rounded">
                    </div>
                    <div>
                        <span class="font-bold text-lg text-white block leading-tight">SITDOC</span>
                        <span class="text-xs text-slate-400">Trámite Documentario</span>
                    </div>
                </div>

                <!-- Menú -->
                @include('layouts.partials.menu')
            </div>

            <!-- Usuario -->
            @php
                $partes = explode(' ', Auth::user()->name);
                $iniciales = strtoupper(substr($partes[0], 0, 1) . substr($partes[1] ?? '', 0, 1));
            @endphp

            <div class="pt-4 border-t border-slate-800">
                <div class="flex items-center space-x-3 px-2 mb-3">
                    <div
                        class="w-9 h-9 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-sm">
                        {{ $iniciales }}
                    </div>
                    <div class="overflow-hidden">
                        <p class="text-sm font-semibold text-white truncate">{{ Auth::user()->name }}</p>
                        <p class="text-xs text-slate-400 truncate">{{ Auth::user()->rol }}</p>
                    </div>
                </div>

                <!-- Cerrar sesión -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full flex items-center space-x-3 text-red-400 hover:bg-red-500/10 hover:text-red-300 px-3 py-2 rounded-lg text-sm font-medium transition cursor-pointer">
                        <i class="fas fa-sign-out-alt w-5 text-center"></i>
                        <span>Cerrar sesión</span>
                    </button>
                </form>
            </div>
        </div>

        <!-- Contenido Principal -->
        <div class="flex-1 flex flex-col">

            <!-- Encabezado superior -->
            <header class="bg-white h-16 shadow-sm flex items-center px-8 border-b border-slate-200">
                <div class="text-lg font-bold text-slate-700">
                    SITDOC - CETPRO Chachapoyas | <span
                        class="font-bold text-slate-500 text-base">@yield('subtitulo', 'Inicio')</span>
                </div>
            </header>

            <!-- Contenido dinámico -->
            <main class="flex-1 p-8">
                @yield('contenido')
            </main>

        </div>
    </div>

</body>

</html>
