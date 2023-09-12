<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\KelassiswaController;
use App\Http\Controllers\ProfilController;

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
    Route::get('/kelas/siswa', [KelassiswaController::class, 'index']);
    Route::post('/kelas/siswa', [KelassiswaController::class, 'checkcode']);
    Route::get('/profil', [ProfilController::class, 'index']);
    Route::get('/profil', [ProfilController::class, 'show']);
    Route::post('/profil/{id}', [ProfilController::class, 'update'])->name('profil.update');
});

Route::middleware(['auth', 'guru'])->group(function () {
    Route::resource('/kelas', KelasController::class);
    Route::get('/pkk', [TugasController::class, 'index']);
});

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [RegisterController::class, 'register']);
    Route::get('/register/guru', [RegisterController::class, 'register_guru']);
    Route::post('/register/guru/post', [RegisterController::class, 'guru']);
    Route::get('/register/siswa', [RegisterController::class, 'register_siswa']);
    Route::post('/register/siswa/post', [RegisterController::class, 'siswa']);
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'auth']);
});


