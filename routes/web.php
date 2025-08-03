<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ProfileController;

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
    return view('pages.homepage.index');
});

Route::get('/about', function () {
    return view('pages.about.index');
})->name('about.index');

Route::prefix('/catalog')->group(function () {
    Route::get('/', [\App\Http\Controllers\CatalogController::class, 'index'])->name('catalog.index');
    Route::get('/{id}/show', [\App\Http\Controllers\CatalogController::class, 'show'])->name('catalog.show');
    Route::get('{id}/request-borrow', [\App\Http\Controllers\CatalogController::class, 'requestBorrow'])->middleware(['auth'])->name('catalog.request-borrow');
    Route::post('{id}/request-borrow', [\App\Http\Controllers\CatalogController::class, 'requestBorrowPost'])->middleware(['auth'])->name('catalog.request-borrow.post');
});

Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'registerForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->get('/home', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('users', \App\Http\Controllers\UserController::class)->middleware('role:superadmin');

Route::resource('archives', ArchiveController::class)->middleware('role:arsiparis,superadmin');

Route::get('my-requests', [\App\Http\Controllers\CatalogController::class, 'myRequests'])->middleware(['auth'])->name('catalog.my-requests');

Route::middleware(['auth', 'role:arsiparis,superadmin'])->group(function () {
    Route::get('borrowings', [\App\Http\Controllers\BorrowingController::class, 'index'])->name('borrowings.index');
    Route::get('borrowings/approve/{id}', [\App\Http\Controllers\BorrowingController::class, 'approve'])->name('borrowings.approve');
    Route::get('borrowings/reject/{id}', [\App\Http\Controllers\BorrowingController::class, 'reject'])->name('borrowings.reject');
    Route::get('borrowings/return/{id}', [\App\Http\Controllers\BorrowingController::class, 'markReturned'])->name('borrowings.return');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.password');
});

Route::middleware(['auth', 'role:superadmin,arsiparis'])->group(function () {
    Route::get('report/borrowings', [ReportController::class, 'index'])->name('report.index');
    Route::get('report/borrowings/pdf', [ReportController::class, 'exportPdf'])->name('report.pdf');
    Route::get('report/borrowings/excel', [ReportController::class, 'exportExcel'])->name('report.excel');
});
