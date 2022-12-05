<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', [\App\Http\Controllers\Login\LoginController::class, 'index'])->name('login.index');

//zakat
Route::get('/zakat', [\App\Http\Controllers\Zakat\ZakatController::class, 'index'])->name('zakat.index');
Route::get('/zakat/pelaporan', [\App\Http\Controllers\Zakat\ZakatController::class, 'report'])->name('zakat.report');
Route::get('/zakat/pengambilan', [\App\Http\Controllers\Zakat\ZakatController::class, 'pengambilan'])->name('zakat.pengambilan');

//infaq
Route::get('/infaq', [\App\Http\Controllers\Infaq\InfaqController::class, 'index'])->name('infaq.index');
Route::get('/infaq/pelaporan', [\App\Http\Controllers\Infaq\InfaqController::class, 'report'])->name('infaq.report');
Route::get('/infaq/pengambilan', [\App\Http\Controllers\Infaq\InfaqController::class, 'pengambilan'])->name('infaq.pengambilan');

//shadaqah
Route::get('/shadaqah', [\App\Http\Controllers\Shadaqah\ShadaqahController::class, 'index'])->name('shadaqah.index');
Route::get('/shadaqah/pelaporan', [\App\Http\Controllers\Shadaqah\ShadaqahController::class, 'report'])->name('shadaqah.report');
Route::get('/shadaqah/pengambilan', [\App\Http\Controllers\Shadaqah\ShadaqahController::class, 'pengambilan'])->name('shadaqah.pengambilan');

// Route::get('/', function () {
//     return view('welcome');
// });
