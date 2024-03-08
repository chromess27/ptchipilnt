<?php

use App\Http\Controllers\KaryawanController;

Route::get('/karyawan', [KaryawanController::class, 'index']);
Route::get('/karyawan/create', [KaryawanController::class, 'create']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::get('/karyawan/{id}/edit', [KaryawanController::class, 'edit']);
Route::put('/karyawan/update{id}', [KaryawanController::class, 'update']);
Route::delete('/karyawan/delete{id}', [KaryawanController::class, 'destroy']);

