<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EditSuratController;
use App\Http\Controllers\PengajuanSuratController;

// Redirect utama ke login
Route::get('/', function () {
    return view('login');
});

// Auth routes
Route::get('/login', [AuthController::class, 'loginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'prosesLogin'])->name('login.proses');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

// Edit Surat routes
Route::get('/edit-surat', [EditSuratController::class, 'index'])->name('edit-surat.index');
Route::get('/edit-surat/{id}/edit', [EditSuratController::class, 'edit'])->name('edit-surat.edit');

// Pengajuan Surat route
Route::get('/pengajuan', [PengajuanSuratController::class, 'index'])->name('pengajuan.index');

// Group route yang butuh login/session
Route::middleware('SessionAuth')->group(function () {
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');
});
