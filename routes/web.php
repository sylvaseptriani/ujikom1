<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\DetailController;
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
//  Route::get('/', function () {
//      return view('welcome')
// });


//ROUTE LOGIN
Route::get('/login',[LoginController::class, 'login'])->name('login'); // ROUTE LOGIN
Route::post('/auth', [LoginController::class, 'auth'])->name('auth'); // ROUTE UNTUK PROSES LOGIN
Route::get('/registrasi', [RegistrasiController::class, 'registrasi'])->name('registrasi'); // ROUTE REGISTRASI
Route::post('registrasi/auth', [RegistrasiController::class, 'registrasi'])->name('auth_registrasi'); // ROUTE PROSES REGISTRASI

//SETELAH LOGIN
Route::get('/logout',[LoginController::class, 'logout'])->name('logout'); // ROUTE LOGOUT
Route::resource('pelanggan', PelangganController::class); // ROUTE CRUD PELANGGAN

//LAPORAN
Route::get('/exportPdf_pelanggan', [PelangganController::class, 'exporPtdf'])->name('exportPdf_pelanggan');
Route::get('/exportExcel_pelanggan', [PelangganController::class, 'exportExcel'])->name('exportExcel_pelanggan');
Route::post('/importExcel_pelanggan', [PelangganController::class, 'importExcel'])->name('importExcel_pelanggan');

Route::Resource('produk', ProdukController::class);
Route::Resource('penjualan', PenjualanController::class);
Route::Resource('detail', DetailController::class);