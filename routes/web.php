<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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

Route::get('/register', [RegisterController::class, 'register']);
Route::get('/register/guru', [RegisterController::class, 'register_guru']);
Route::post('/register/guru/post', [RegisterController::class, 'guru']);
Route::get('/register/siswa', [RegisterController::class, 'register_siswa']);
Route::post('/register/siswa/post', [RegisterController::class, 'siswa']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/', [AuthController::class, 'auth']);

Route::get('/home', [DashboardController::class, 'index']);
Route::get('/logout', [AuthController::class, 'logout']);
