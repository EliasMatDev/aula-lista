<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActividadController;

Route::get('/', [ActividadController::class, 'index'])->name('actividades.index');
Route::post('/actividades', [ActividadController::class, 'store'])->name('actividades.store');
Route::patch('/actividades/{actividad}', [ActividadController::class, 'update'])->name('actividades.update');
Route::delete('/actividades/{actividad}', [ActividadController::class, 'destroy'])->name('actividades.destroy');
