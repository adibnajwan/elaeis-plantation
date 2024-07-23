<?php

use App\Http\Controllers\CareerController;
use App\Http\Controllers\PengaduanController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');

Route::view('/perusahaankami', 'perusahaankami')->name('perusahaan-kami');

Route::view('/dampaklingkungan', 'dampaklingkungan')->name('dampak-lingkungan');

Route::view('/perlindunganhutan', 'perlindunganhutan')->name('perlindungan-hutan');

Route::view('/ourpeople', 'ourpeople')->name('our-people');

Route::view('/regenerasi', 'regenerasi')->name('regenerasi');

Route::view('/career', 'career')->name('career');

Route::view('/1_Accountant', '1_Accountant')->name('accountant');

Route::view('/2_DataOperationsAnalyst', '2_DataOperationsAnalyst')->name('data-operations-analyst');

Route::view('/3_DataEngineer', '3_DataEngineer')->name('data-engineer');

Route::view('/4_AccountManager', '4_AccountManager')->name('account-manager');

Route::view('/5_AreaOperationsStaff', '5_AreaOperationsStaff')->name('5_AreaOperationsStaff');

Route::view('/pengaduan', 'pengaduan')->name('pengaduan');


Route::resource('/form', CareerController::class);
Route::get('/pengaduan', [PengaduanController::class, 'index'])->name('pengaduan.index');
Route::POST('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');