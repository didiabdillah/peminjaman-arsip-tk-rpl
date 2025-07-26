<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('pages.dashboard');
    })->name('home');
});

// Route::middleware(['auth', 'role:superadmin'])->prefix('superadmin')->group(function () {
//     Route::get('/users', [UserController::class, 'index'])->name('users.index');
//     // Tambahkan CRUD user di sini
// });

// Route::middleware(['auth', 'role:arsiparis'])->prefix('arsiparis')->group(function () {
//     Route::get('/arsip', [ArsipController::class, 'index'])->name('arsip.index');
//     // Tambahkan fitur manajemen arsip
// });

// Route::middleware(['auth', 'role:peminjam'])->prefix('peminjam')->group(function () {
//     Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog.index');
//     // Tambahkan fitur katalog dan pengajuan
// });
