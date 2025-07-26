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

use App\Http\Controllers\DashboardController;

Route::middleware(['auth'])->get('/home', [DashboardController::class, 'index'])->name('dashboard');
Route::middleware(['auth', 'role:superadmin'])->prefix('superadmin')->group(function () {
    Route::resource('users', \App\Http\Controllers\Superadmin\UserController::class);
});

Route::middleware(['auth', 'role:arsiparis'])->prefix('archivist')->group(function () {
    Route::resource('archives', \App\Http\Controllers\Archivist\ArchiveController::class);
});

Route::middleware(['auth', 'role:peminjam'])->prefix('borrower')->group(function () {
    Route::get('catalog', [\App\Http\Controllers\Borrower\CatalogController::class, 'index'])->name('catalog.index');
    Route::get('catalog/request/{id}', [\App\Http\Controllers\Borrower\CatalogController::class, 'requestBorrow'])->name('catalog.request');
    Route::get('my-requests', [\App\Http\Controllers\Borrower\CatalogController::class, 'myRequests'])->name('catalog.requests');
});

Route::middleware(['auth', 'role:arsiparis'])->prefix('archivist')->group(function () {
    Route::get('borrowings', [\App\Http\Controllers\Archivist\BorrowingController::class, 'index'])->name('borrowings.index');
    Route::get('borrowings/approve/{id}', [\App\Http\Controllers\Archivist\BorrowingController::class, 'approve'])->name('borrowings.approve');
    Route::get('borrowings/reject/{id}', [\App\Http\Controllers\Archivist\BorrowingController::class, 'reject'])->name('borrowings.reject');
    Route::get('borrowings/return/{id}', [\App\Http\Controllers\Archivist\BorrowingController::class, 'markReturned'])->name('borrowings.return');
});

use App\Http\Controllers\ProfileController;

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password');
});

use App\Http\Controllers\Archivist\ReportController;

Route::get('report/borrowings', [ReportController::class, 'index'])->name('report.index');
Route::get('report/borrowings/pdf', [ReportController::class, 'exportPdf'])->name('report.pdf');
Route::get('report/borrowings/excel', [ReportController::class, 'exportExcel'])->name('report.excel');


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
