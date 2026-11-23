<nav class="space-y-1">
    <!-- Inicio -->
    <a href="{{ route('inicio') }}"
        class="flex items-center space-x-3 {{ request()->routeIs('inicio') ? 'bg-blue-600 text-white font-medium' : 'text-slate-300 hover:bg-slate-700 hover:text-white' }} px-4 py-3 rounded-lg transition">
        <i class="fas fa-home w-5 text-center"></i>
        <span>Inicio</span>
    </a>

    <!-- Clientes -->
    <a href="{{ route('clientes') }}"
        class="flex items-center space-x-3 {{ request()->routeIs('clientes*') ? 'bg-blue-600 text-white font-medium' : 'text-slate-300 hover:bg-slate-700 hover:text-white' }} px-4 py-3 rounded-lg transition">
        <i class="fas fa-users w-5 text-center"></i>
        <span>Clientes</span>
    </a>

    <!-- Oficinas -->
    <a href="{{ route('oficinas') }}"
        class="flex items-center space-x-3 {{ request()->routeIs('oficinas*') ? 'bg-blue-600 text-white font-medium' : 'text-slate-300 hover:bg-slate-700 hover:text-white' }} px-4 py-3 rounded-lg transition">
        <i class="fas fa-building w-5 text-center"></i>
        <span>Oficinas</span>
    </a>

    <!-- Trámites -->
    <a href="{{ route('tramites') }}"
        class="flex items-center space-x-3 {{ request()->routeIs('tramites*') ? 'bg-blue-600 text-white font-medium' : 'text-slate-300 hover:bg-slate-700 hover:text-white' }} px-4 py-3 rounded-lg transition">
        <i class="fas fa-file-alt w-5 text-center"></i>
        <span>Trámites</span>
    </a>

    <!-- Documentos -->
    <a href="{{ route('documentos') }}"
        class="flex items-center space-x-3 {{ request()->routeIs('documentos*') ? 'bg-blue-600 text-white font-medium' : 'text-slate-300 hover:bg-slate-700 hover:text-white' }} px-4 py-3 rounded-lg transition">
        <i class="fas fa-folder-open w-5 text-center"></i>
        <span>Documentos</span>
    </a>

    <!-- Perfil -->
    <a href="{{ route('perfil') }}"
        class="flex items-center space-x-3 {{ request()->routeIs('perfil*') ? 'bg-blue-600 text-white font-medium' : 'text-slate-300 hover:bg-slate-700 hover:text-white' }} px-4 py-3 rounded-lg transition">
        <i class="fas fa-user-circle w-5 text-center"></i>
        <span>Perfil</span>
    </a>

   
</nav>
