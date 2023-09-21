<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PegawaiController;
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

Route::get('/coba', [Controller::class, 'test']);
Route::get('pegawai', [PegawaiController::class, 'index']);
Route::get('pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('pegawai/store', [PegawaiController::class, 'store']);
Route::get('pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('pegawai/update', [PegawaiController::class, 'update']);
Route::post('pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);
