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
use App\Http\Controllers\MateriController;

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
    Route::delete('/delete/{kelas_id}/{tugas_id}', [TugasController::class, 'destroyTugas']);
    Route::get('/detail/{tugas_id}', [TugasController::class, 'detail']);
    Route::post('/nilai', [TugasController::class, 'nilai']);
    Route::post('/download', [TugasController::class, 'download']);
    Route::resource('/tugas', TugasController::class);
    Route::get('/tugas/siswa/create/{id}', [TugassiswaController::class, 'index']);
    Route::post('/tugas/siswa/detail', [TugassiswaController::class, 'create']);
    Route::get('/tugas/detail_all/{kelas_id}', [TugassiswaController::class, 'detail']);
    Route::get('/materi/{kelas_id}', [MateriController::class, 'index']);
    Route::get('/materi/create/{kelas_id}', [MateriController::class, 'create']);
    Route::get('/materi/detail/{id}', [MateriController::class, 'show']);
    Route::delete('hapus/{kelas_id}/{materi_id}', [MateriController::class, 'destroyMateri']);
    Route::resource('/materi', MateriController::class);
});

Route::middleware(['auth', 'guru'])->group(function () {
    Route::get('/data/siswa/{kelas_id}', [KelasController::class, 'datasiswa']);
    Route::post('/search', [KelasController::class, 'search']);
    Route::get('/kelas/detail/{kelas_id}', [KelasController::class, 'detail']);
    Route::resource('/kelas', KelasController::class);
});

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [RegisterController::class, 'register']);
    Route::get('/register/guru', [RegisterController::class, 'register_guru']);
    Route::post('/register/guru', [RegisterController::class, 'guru']);
    Route::get('/register/siswa', [RegisterController::class, 'register_siswa']);
    Route::post('/register/siswa', [RegisterController::class, 'siswa']);
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'auth']);
});
