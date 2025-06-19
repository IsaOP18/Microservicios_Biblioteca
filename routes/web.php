<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\LibroWebController;

// FRONTEND CON BLADE
Route::get('/', [LibroWebController::class, 'index'])->name('libros.index');
Route::get('/libros/{id}', [LibroWebController::class, 'show'])->name('libros.show');

// API
Route::get('/api/libros', [LibroController::class, 'index']);
Route::get('/api/libros/{id}', [LibroController::class, 'show']);
Route::put('/api/libros/{id}/estado', [LibroController::class, 'actualizarEstado']);