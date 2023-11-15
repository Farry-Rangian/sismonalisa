<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnggaranController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\KeuntunganController;
use App\Http\Controllers\PelaporanController;
use App\Http\Controllers\PembagianController;
use App\Http\Controllers\KesimpulanController;
use App\Http\Controllers\PengawasanController;
use App\Http\Controllers\DatadesaController;
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

// Route::get('/', function () {
//     return view('login');
// });

Route::middleware(['guest'])->group(function () {
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
});
Route::get('/home', function(){
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/admin', [AdminController::class, 'index'])->middleware('userAkses:admin');
    Route::resource('/anggarans', \App\Http\Controllers\AnggaranController::class);
    Route::get('/realisasi-anggaran/semester/{semester}', [AnggaranController::class,'getDataBySemester'])->name('data.semester');
    Route::resource('/programs', \App\Http\Controllers\ProgramController::class);
    Route::resource('/keuntungans', \App\Http\Controllers\KeuntunganController::class);
    Route::resource('/pelaporans', \App\Http\Controllers\PelaporanController::class);
    Route::resource('/pembagians', \App\Http\Controllers\PembagianController::class);
    Route::resource('/kesimpulans', \App\Http\Controllers\KesimpulanController::class);
    Route::resource('/pengawasans', \App\Http\Controllers\PengawasanController::class);
    Route::resource('/data-desa', \App\Http\Controllers\DatadesaController::class)->middleware('userAkses:admin');
    Route::get('/user', [AdminController::class, 'user'])->middleware('userAkses:user');
    Route::get('/logout', [SesiController::class, 'logout'])->name('logout');
});

