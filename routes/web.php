<?php

use App\Http\Controllers\AksesController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
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
Route::get('/', [LandingPageController::class, 'index'])->name('landing');

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/register', function () {
    return view('login.register');})->name('register');

Route::post('/register/store', [LoginController::class, 'register'])
    ->name('login.register.store');
Route::post('/login', [LoginController::class, 'login'])->name('login.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/forget', function () { return view('login.forget');})->name('forget');
Route::post('/reset', [LoginController::class,'reset'])->name('reset');
   
Route::group(['middleware' => 'auth'], function () {});

Route::resource('/dashboard',DashboardController::class);

Route::get('data/data_petugas',[UserController::class,'index'])->name('data.data_petugas');
Route::get('data/data_petugas/create',[UserController::class,'create'])->name('data.data_petugas.create');
Route::post('data/data_petugas',[UserController::class,'store'])->name('data.data_petugas.store');
Route::PUT('data/petugas/photo/{id}',[UserController::class,'photo'])->name('data.data_petugas.photo');
Route::get('data/petugas/{id}/show',[UserController::class,'show'])->name('data.data_petugas.show');
Route::get('data/data_petugas/{id}/edit',[UserController::class,'edit'])->name('data.data_petugas.edit');
Route::PUT('data.data_petugas/update/{id}',[UserController::class,'update'])->name('data.data_petugas.update');
Route::PUT('data/petugas/update_profile/{id}',[UserController::class,'update_profile'])->name('data.data_petugas.profile');
Route::DELETE('data/data_petugas/delete/{id}',[UserController::class,'destroy'])->name('data.data_petugas.delete');

Route::resource('data/akses', AksesController::class);
Route::resource('data/role', RoleController::class);
Route::POST('data/barang/edit',[BarangController::class,'tambah_stok'])->name('tambah_stok');
Route::resource('data/barang', BarangController::class);
Route::resource('data/categori',CategoriController::class);
Route::resource('penjualan', PenjualanController::class);
Route::get('keranjang', [PenjualanController::class, 'keranjang'])->name('keranjang');
Route::get('batal_pesan', [PenjualanController::class, 'batal_pesan'])->name('batal_pesan');
Route::post('checkout', [PenjualanController::class, 'checkout'])->name('checkout');
Route::delete('transaksi/delete/{id}',[TransaksiController::class,'destroy'])->name('transaksi.destroy');
Route::get('transaksi',[TransaksiController::class,'index'])->name('transaksi.index');
Route::get('transaksi/{id}/detail',[TransaksiController::class,'detail_transaksi'])->name('transaksi.detail');
Route::PUT('transaksi/bayar/{id}',[TransaksiController::class,'bayar'])->name('transaksi.bayar');
Route::get('transaksi/terbayar',[TransaksiController::class,'sudah_bayar'])->name('transaksi.terbayar');
Route::get('transaksi/{id}/pdf',[TransaksiController::class,'nota'])->name('nota.pdf');
Route::get('laporan/barang',[BarangController::class,'laporan_barang'])->name('laporan.barang');
Route::post('laporan/barang/cetak',[BarangController::class,'cetak_barang'])->name('cetak.barang');
Route::get('laporan/penjualan',[TransaksiController::class,'laporan_transaksi'])->name('laporan.transaksi');
Route::post('laporan/penjualan/cetak',[TransaksiController::class,'cetak_transaksi'])->name('cetak.transaksi');