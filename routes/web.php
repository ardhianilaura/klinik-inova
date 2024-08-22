<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AllPegawaiController;
use App\Http\Controllers\Admin\TindakanController;
use App\Http\Controllers\Admin\ObatController;
use App\Http\Controllers\Pegawai\PendaftaranController;
use App\Http\Controllers\Pegawai\TransaksiController;
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
    return view('welcome');
});


Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::post('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['auth', 'role:dokter'])->group(function () {
    Route::get('/dokter/dashboard', [DokterController::class, 'index'])->name('dokter.dashboard');
});

Route::middleware(['auth', 'role:pegawai'])->group(function () {
    Route::get('/pegawai/dashboard', [PegawaiController::class, 'index'])->name('pegawai.dashboard');
});

Route::middleware(['auth', 'role:kasir'])->group(function () {
    Route::get('/kasir/dashboard', [KasirController::class, 'index'])->name('kasir.dashboard');
});

Route::middleware(['role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('users', UserController::class);
});
Route::prefix('admin')->name('admin.')->middleware('role:admin')->group(function () {
    Route::resource('wilayah', \App\Http\Controllers\Admin\WilayahController::class);
});
Route::middleware(['role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('pegawai', AllPegawaiController::class);
});
Route::middleware(['role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('tindakan', TindakanController::class);
});
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('obat', ObatController::class);
});
Route::middleware(['role:pegawai'])->prefix('pegawai')->name('pegawai.')->group(function () {
    Route::resource('pendaftaran', PendaftaranController::class);
});
Route::get('/pegawai/tindakan', [TindakanController::class, 'index'])->name('pegawai.tindakan.index');