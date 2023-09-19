<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\KelassiswaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TugassiswaController;

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

// Route::get('/', function () {
//     return view('home/index');
// });

Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/kelas/siswa/', [KelassiswaController::class, 'index']);
    Route::post('/kelas/siswa/', [KelassiswaController::class, 'checkcode']);
    Route::get('/profil', [ProfilController::class, 'index']);
    Route::get('/profil', [ProfilController::class, 'show']);
    Route::post('/profil/{id}', [ProfilController::class, 'update']);
    Route::get('/tugas/{kelas_id}', [TugasController::class, 'index']);
    Route::get('/tugas/create/{kelas_id}', [TugasController::class, 'create']);
    Route::get('/tugas/detail/{id}', [TugasController::class, 'show']);
    Route::delete('/delete/{kelas_id}/{tugas_id}', [TugasController::class, 'destroy']);
    Route::resource('/tugas', TugasController::class);
    Route::get('/tugas/siswa/create/{id}', [TugassiswaController::class, 'index']);
    Route::post('/tugas/siswa/detail/{id}', [TugassiswaController::class, 'create']);
    Route::get('/tugas/detail_all/{kelas_id}', [TugassiswaController::class, 'detail']);
});

Route::middleware(['auth', 'guru'])->group(function () {
    Route::get('/search', [KelasController::class, 'search']);
    Route::resource('/kelas', KelasController::class);
});

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [RegisterController::class, 'register']);
    Route::get('/register/guru', [RegisterController::class, 'register_guru']);
    Route::post('/login', [RegisterController::class, 'guru']);
    Route::get('/register/siswa', [RegisterController::class, 'register_siswa']);
    Route::post('/login', [RegisterController::class, 'siswa']);
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'auth']);
});
