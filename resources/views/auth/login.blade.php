<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - SITDOC CETPRO Chachapoyas</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="bg-slate-900 min-h-screen flex items-center justify-center p-4">

    <div class="w-full max-w-md bg-white rounded-2xl shadow-xl border border-slate-200 overflow-hidden">
        <!-- Encabezado institucional -->
        <div class="bg-blue-600 p-6 text-center text-white">
            <div class="w-14 h-14 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-3 text-2xl">
               <img src="{{ ('images/logo.jpg') }}" class="rounded-2xl" alt="Logo" class="w-10 h-10">
            </div>
            <h1 class="text-xl font-bold tracking-wide">SITDOC</h1>
            <p class="text-xs text-blue-100 mt-1">Sistema de Trámite Documentario - CETPRO Chachapoyas</p>
        </div>

        <!-- Formulario -->
        <div class="p-6 sm:p-8">
            <h2 class="text-lg font-bold text-slate-800 mb-1">Bienvenido</h2>
            <p class="text-sm text-slate-500 mb-6">Ingresa tus credenciales institucionales para continuar.</p>

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Correo Electrónico</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <input type="text" id="email" name="email" value="{{ old('email') }}" autofocus
                            placeholder="usuario@gmail.com"
                            class="w-full pl-10 pr-4 py-2.5 border border-slate-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-slate-700 mb-1">Contraseña</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center text-slate-400">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input type="password" id="password" name="password"
                            placeholder="••••••••"
                            class="w-full pl-10 pr-4 py-2.5 border border-slate-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    </div>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between text-sm">
                    <label class="inline-flex items-center text-slate-600 cursor-pointer">
                        <input type="checkbox" name="remember" class="rounded border-slate-300 text-blue-600 focus:ring-blue-500 mr-2">
                        Recordar sesión
                    </label>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2.5 px-4 rounded-xl shadow-sm transition flex items-center justify-center space-x-2 cursor-pointer">
                    <i class="fas fa-sign-in-alt"></i>
                    <span>Ingresar al Sistema</span>
                </button>
            </form>
        </div>
    </div>

</body>
</html>