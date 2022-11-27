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

Route::get('/login', [\App\Http\Controllers\Login\LoginController::class, 'index'])->name('zakat.index');
Route::get('/zakat', [\App\Http\Controllers\Zakat\ZakatController::class, 'index'])->name('zakat.index');
Route::get('/zakat/pelaporan', [\App\Http\Controllers\Zakat\ZakatController::class, 'report'])->name('zakat.report');
Route::get('/zakat/pengambilan', [\App\Http\Controllers\Zakat\PengambilanController::class, 'index'])->name('zakat.pengambilan');

// Route::get('/', function () {
//     return view('welcome');
// });
