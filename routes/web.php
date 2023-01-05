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

//autentikasi
Route::get('/auth', [\App\Http\Controllers\Autentikasi\AuthController::class, 'index'])->name('auth.index');
Route::post('/login', [\App\Http\Controllers\Autentikasi\AuthController::class, 'auth'])->name('auth.post');
Route::post('/logout', [\App\Http\Controllers\Autentikasi\AuthController::class, 'logOut'])->name('auth.logout');

Route::middleware(['AuthIsValid'])->group(function () {
    //START zakat

    Route::get('/zakat', [\App\Http\Controllers\Zakat\ZakatController::class, 'index'])->name('zakat.index');
    Route::get('/zakat/pelaporan', [\App\Http\Controllers\Zakat\ZakatController::class, 'report'])->name('zakat.report');
    Route::get('/zakat/pengambilan', [\App\Http\Controllers\Zakat\ZakatController::class, 'pengambilan'])->name('zakat.pengambilan');

    //END zakat

    //START infaq

    Route::get('/infaq', [\App\Http\Controllers\Infaq\InfaqController::class, 'index'])->name('infaq.index');
    Route::get('/infaq/pelaporan', [\App\Http\Controllers\Infaq\InfaqController::class, 'report'])->name('infaq.report');
    Route::get('/infaq/pengambilan', [\App\Http\Controllers\Infaq\InfaqController::class, 'pengambilan'])->name('infaq.pengambilan');

    //END infaq

    //START shadaqah

    Route::get('/shadaqah', [\App\Http\Controllers\Shadaqah\ShadaqahController::class, 'index'])->name('shadaqah.index');
    Route::get('/shadaqah/pelaporan', [\App\Http\Controllers\Shadaqah\ShadaqahController::class, 'report'])->name('shadaqah.report');
    Route::get('/shadaqah/pengambilan', [\App\Http\Controllers\Shadaqah\ShadaqahController::class, 'pengambilan'])->name('shadaqah.pengambilan');

    //END shadaqah

    //START akun

    Route::get('/akun', [\App\Http\Controllers\Akun\AkunController::class, 'index'])->name('akun.index');
    Route::get('/akun/create', [\App\Http\Controllers\Akun\AkunController::class, 'create'])->name('akun.create');
    Route::get('/akun/show/{id}', [\App\Http\Controllers\Akun\AkunController::class, 'show'])->name('akun.show');
    Route::post('/akun/simpan', [\App\Http\Controllers\Akun\AkunController::class, 'store'])->name('akun.store');
    Route::delete('/akun/{id}', [\App\Http\Controllers\Akun\AkunController::class, 'destroy'])->name('akun.destroy');
    Route::put('/akun/{id}', [\App\Http\Controllers\Akun\AkunController::class, 'update'])->name('akun.update');
    //print akun
    Route::get('/akun/print', [\App\Http\Controllers\Akun\AkunController::class, 'print'])->name('akun.print');

    //END akun

    //START Profile

    Route::get('/profile', [\App\Http\Controllers\Profile\ProfileController::class, 'index'])->name('profile.index');
    Route::put('/profile', [\App\Http\Controllers\Profile\ProfileController::class, 'update'])->name('profile.update');

    //END Profile

    //dashboard
    Route::get('/dashboard', [\App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('dashboard.index');

    //END akun
});

// Route::get('/', function () {
//     return view('welcome');
// });
