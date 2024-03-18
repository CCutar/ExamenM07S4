<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class, 'index'])->name('index');
Route::get('/students/{student}', [StudentController::class, 'show'])->name('show');
Route::get('/students/{student}/confirm-delete', [StudentController::class, 'confirmDelete'])->name('confirm-delete');
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('destroy');
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('edit');
Route::put('/students/{student}', [StudentController::class, 'update'])->name('update');
Route::get('/create', [StudentController::class, 'create'])->name('create');
Route::post('/students', [StudentController::class, 'store'])->name('store');




