<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teachers', [App\Http\Controllers\TeacherController::class, 'index'])->name('teachers.index');
Route::get('/teachers/create', [App\Http\Controllers\TeacherController::class, 'create'])->name('teachers.create');
Route::get('/teachers/store', [App\Http\Controllers\TeacherController::class, 'store'])->name('teachers.store');
Route::get('/teachers/{tid}', [App\Http\Controllers\TeacherController::class, 'show'])->name('teachers.show');
Route::get('/teachers/{tid}/edit', [App\Http\Controllers\TeacherController::class, 'edit'])->name('teachers.edit');
Route::put('/teachers/{tid}', [App\Http\Controllers\TeacherController::class, 'update'])->name('teachers.update');
Route::delete('/teachers/{tid}', [App\Http\Controllers\TeacherController::class, 'destroy'])->name('teachers.destroy');
