<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\TramiteController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\PerfilController;
use Illuminate\Support\Facades\Route;

// Ruta de Inicio
Route::get('/', function () {
    return view('home');
})->name('inicio')->middleware('auth');

Route::middleware(['auth'])->group(function () {
    
// Módulo Clientes
Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes');
Route::get('/clientes/crear', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');

// Módulo Oficinas
Route::get('/oficinas', [OficinaController::class, 'index'])->name('oficinas');

// Módulo Trámites
Route::get('/tramites', [TramiteController::class, 'index'])->name('tramites');
Route::get('/tramites/crear', [TramiteController::class, 'create'])->name('tramites.create');
Route::post('/tramites', [TramiteController::class, 'store'])->name('tramites.store');

// Módulo Documentos
Route::get('/documentos', [DocumentoController::class, 'index'])->name('documentos');

// Módulo Perfil
Route::get('/perfil', [PerfilController::class, 'index'])->name('perfil');
Route::put('/perfil', [PerfilController::class, 'update'])->name('perfil.update');

});