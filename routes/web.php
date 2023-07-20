<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index']);
Route::get('/mahasiswa/create', [App\Http\Controllers\MahasiswaController::class, 'create']);
Route::post('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'store']);
Route::get('/mahasiswa/{id}/edit', [App\Http\Controllers\MahasiswaController::class, 'edit']);
Route::patch('/mahasiswa/{id}', [App\Http\Controllers\MahasiswaController::class, 'update']);
Route::delete('/mahasiswa/{id}', [App\Http\Controllers\MahasiswaController::class, 'destroy']);

Route::get('/unit', [App\Http\Controllers\UnitController::class, 'index']);
Route::get('/unit/create', [App\Http\Controllers\UnitController::class, 'create']);
Route::post('/unit', [App\Http\Controllers\UnitController::class, 'store']);
Route::get('/unit/{id}/edit', [App\Http\Controllers\UnitController::class, 'edit']);
Route::patch('/unit/{id}', [App\Http\Controllers\UnitController::class, 'update']);
Route::delete('/unit/{id}', [App\Http\Controllers\UnitController::class, 'destroy']);

Route::get('/pembeli', [App\Http\Controllers\PembeliController::class, 'index']);
Route::get('/pembeli/create', [App\Http\Controllers\PembeliController::class, 'create']);
Route::post('/pembeli', [App\Http\Controllers\PembeliController::class, 'store']);
Route::get('/pembeli/{id}/edit', [App\Http\Controllers\PembeliController::class, 'edit']);
Route::patch('/pembeli/{id}', [App\Http\Controllers\PembeliController::class, 'update']);
Route::delete('/pembeli/{id}', [App\Http\Controllers\PembeliController::class, 'destroy']);
Route::delete('/pembeli/{id}', [App\Http\Controllers\PembeliController::class, 'destroy']);