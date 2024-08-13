<?php

use App\Http\Controllers\BudidayaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KebunController;
use App\Http\Controllers\KondisiPanenController;
use App\Http\Controllers\KontrolBudidayaController;
use App\Http\Controllers\PanenController;
use App\Http\Controllers\PetaniController;
use App\Http\Controllers\RafaksiController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\TarifPajakController;
use App\Http\Controllers\VarietasController;
use App\Http\Controllers\ParameterBudidayaController;
use App\Http\Controllers\PembelianBibitController;
use App\Http\Controllers\PembelianPanenController;
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

Route::get('/', DashboardController::class)->name('dashboard');
Route::resource('/satuan', SatuanController::class);
Route::resource('/tarif_pajak', TarifPajakController::class);
Route::resource('/kebun', KebunController::class);
Route::resource('/kondisi_panen', KondisiPanenController::class);
Route::resource('/varietas', VarietasController::class);
Route::resource('/petani', PetaniController::class);
Route::resource('/rafaksi', RafaksiController::class);
Route::resource('/parameter_budidaya', ParameterBudidayaController::class);
Route::resource('/pembelian_bibit', PembelianBibitController::class);
Route::resource('/budidaya', BudidayaController::class);
Route::resource('/kontrol_budidaya', KontrolBudidayaController::class);
Route::resource('/panen', PanenController::class);
Route::resource('/pembelian_panen', PembelianPanenController::class);
