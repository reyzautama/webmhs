<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

// Menambahkan rute resource untuk Mahasiswa
Route::resource('mahasiswa', MahasiswaController::class);
//Routes Kelas
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
Route::post('/kelas', [KelasController::class, 'store'])->name('kelas.store');
Route::get('/kelas/{id}', [KelasController::class, 'show'])->name('kelas.show');
Route::get('/kelas/{id}/edit', [KelasController::class, 'edit'])->name('kelas.edit');
Route::put('/kelas/{id}', [KelasController::class, 'update'])->name('kelas.update');
Route::delete('/kelas/{id}', [KelasController::class, 'destroy'])->name('kelas.destroy');

Route::resource('dosen', DosenController::class);
Route::resource('matakuliah', MataKuliahController::class);
Route::resource('jadwal', JadwalController::class);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
// Menambahkan rute untuk profil dan logout
Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::post('logout', [ProfileController::class, 'logout'])->name('logout');

