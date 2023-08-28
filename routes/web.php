<?php

use App\Models\Barang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\PrinttController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TenanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();


Route::middleware(['auth'])->group(function (){

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('barang', BarangController::class);

    Route::resource('kategori',KategoriController::class);

    Route::resource('tenan',TenanController::class);

    Route::resource('print',PrintController::class);

    Route::resource('printt',PrinttController::class);

    Route::get('export_pdf', [PrintController::class,'export_pdf'])->name('export_pdf');

    Route::get('exportt_pdf', [PrinttController::class,'exportt_pdf'])->name('exportt_pdf');
});
