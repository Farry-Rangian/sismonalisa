<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\KeuntunganController;
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
    Route::resource('/programs', \App\Http\Controllers\ProgramController::class);
    Route::resource('/keuntungans', \App\Http\Controllers\KeuntunganController::class);
    Route::get('/user', [AdminController::class, 'user'])->middleware('userAkses:user');
    Route::get('/logout', [SesiController::class, 'logout']);
});

