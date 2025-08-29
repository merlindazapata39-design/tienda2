<?php

use App\Http\Controllers\PersonaController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/personaGotica', [PersonaController::class, 'index'])->name('persona.index');
Route::get('/persona/create', [PersonaController::class, 'create'])->name('persona.create');
Route::post('/persona', [PersonaController::class, 'store'])->name('persona.store');
Route::get('/persona/{id}', [PersonaController::class, 'show'])->name('persona.show');
Route::get('/persona/{id}/edit', [PersonaController::class, 'edit'])->name('persona.edit');
Route::put('/persona/{id}', [PersonaController::class, 'update'])->name('persona.update');
Route::delete('/persona/{id}', [PersonaController::class, 'destroy'])->name('persona.destroy');

Route::get('/venta', [VentaController::class, 'index'])->name('venta.index');
Route::get('/venta/create', [VentaController::class, 'create'])->name('venta.create');
Route::post('/venta', [VentaController::class, 'store'])->name('venta.store');
Route::get('/venta/{id}', [VentaController::class, 'show'])->name('venta.show');
Route::get('/venta/{id}/edit', [VentaController::class, 'edit'])->name('venta.edit');
Route::put('/venta/{id}', [VentaController::class, 'update'])->name('venta.update');
Route::delete('/venta/{id}', [VentaController::class, 'destroy'])->name('venta.destroy');

Route::get('/producto', [ProductoController::class, 'index'])->name('producto.index');
Route::get('/producto/create', [ProductoController::class, 'create'])->name('producto.create');
Route::post('/producto', [ProductoController::class, 'store'])->name('producto.store');
Route::get('/producto/{id}', [ProductoController::class, 'show'])->name('producto.show');
Route::get('/producto/{id}/edit', [ProductoController::class, 'edit'])->name('producto.edit');
Route::put('/producto/{id}', [ProductoController::class, 'update'])->name('producto.update');
Route::delete('/producto/{id}', [ProductoController::class, 'destroy'])->name('producto.destroy');

