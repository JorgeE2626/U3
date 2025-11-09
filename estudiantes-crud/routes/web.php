<?php
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\CarreraController;


Route::redirect('/', '/estudiantes');
Route::resource('estudiantes', EstudianteController::class);
Route::resource('carreras', CarreraController::class);

