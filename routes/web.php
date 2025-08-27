<?php

use App\Http\Controllers\PersonaController;
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
