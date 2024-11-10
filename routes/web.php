<?php

use App\Http\Controllers\aDMAlphaController;
use App\Http\Controllers\aDMKompenController;
use App\Http\Controllers\AlphaController;
use App\Http\Controllers\aUserADTController;
use App\Http\Controllers\aUserMahasiswaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\aWelcomeController;
use App\Http\Controllers\LihatPilihKompenController;
use App\Http\Controllers\UpdateKompenSelesaiController;
use App\Http\Controllers\UpdateProgresTugasKompenController;
use App\Http\Controllers\WelcomeController;
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

// Login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'postLogin']);

// Logout
Route::get('logout', [AuthController::class, 'logout'])->middleware('auth');

// Welcome for Mahasiswa
Route::get('/Mahasiswa', [WelcomeController::class, 'index']);

// Welcome for Admin
Route::get('/Admin', [aWelcomeController::class, 'index']);

// user as Mahasiswa
// Lihat dan Pilih Kompen
Route::get('/mLihatPilihKompen', [LihatPilihKompenController::class, 'index']);

// Update Progres Tugas Kompen
Route::get('/mUpdateProgresTugasKompen', [UpdateProgresTugasKompenController::class, 'index']);

// Update Kompen Selesai
Route::get('/mUpdateKompenSelesai', [UpdateKompenSelesaiController::class, 'index']);

// user as Admin
// User Admin/Dosen/Teknisi
Route::get('/aAdminDosenTeknisi', [aUserADTController::class, 'index']);

// User Mahasiswa
Route::get('/aMahasiswa', [aUserMahasiswaController::class, 'index']);

// Daftar Mahasiswa Alpha
Route::get('/aDaftarMahasiswaAlpha', [aDMAlphaController::class, 'index']);

// Daftar Mahasiswa Kompen
Route::get('/aDaftarMahasiswaKompen', [aDMKompenController::class, 'index']);

// 