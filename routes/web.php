<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Laundry;


Route::get('/', 'App\Http\Controllers\Laundry@index');
Route::get('/login', 'App\Http\Controllers\Laundry@index'); // Ini untuk menampilkan halaman login (GET)
Route::post('/login', 'App\Http\Controllers\Laundry@aksilogin'); // Ini untuk proses data login (POST)

Route::get('/home', 'App\Http\Controllers\Laundry@home');
Route::get('/logout', 'App\Http\Controllers\Laundry@logout');


Route::get('/register', 'App\Http\Controllers\Laundry@register');
Route::post('/register', 'App\Http\Controllers\Laundry@aksiRegister');


Route::get('/pelanggan', 'App\Http\Controllers\Laundry@indexPelanggan');
Route::get('/edit_pelanggan/{id}', 'App\Http\Controllers\Laundry@editPelanggan');
Route::post('/edit_pelanggan_aksi/{id}', 'App\Http\Controllers\Laundry@editPelangganAksi');
Route::get('/tambah-pelanggan', 'App\Http\Controllers\Laundry@tambahPelanggan');
Route::post('/simpan_pelanggan', 'App\Http\Controllers\Laundry@simpanPelanggan');
Route::get('/hapus_pelanggan/{id}', 'App\Http\Controllers\Laundry@hapusPelanggan');
Route::get('/pelanggan/pdf', 'App\Http\Controllers\Laundry@pdfPelanggan');
Route::get('/pelanggan/excel', 'App\Http\Controllers\Laundry@excelPelanggan');


Route::get('/layanan', 'App\Http\Controllers\Laundry@indexLayanan');
Route::get('/tambah-layanan', 'App\Http\Controllers\Laundry@tambahLayanan');
Route::post('/simpan-layanan', 'App\Http\Controllers\Laundry@simpanLayanan');
Route::get('/hapus_layanan/{id}', 'App\Http\Controllers\Laundry@hapusLayanan');
Route::get('/layanan/pdf', 'App\Http\Controllers\Laundry@pdfLayanan');
Route::get('/layanan/excel', 'App\Http\Controllers\Laundry@excelLayanan');


Route::get('/transaksi', 'App\Http\Controllers\Laundry@indexTransaksi');
Route::get('/tambah-transaksi', 'App\Http\Controllers\Laundry@tambahTransaksi');
Route::post('/simpan_transaksi', 'App\Http\Controllers\Laundry@simpanTransaksi');
Route::get('/hapus_transaksi/{id}', 'App\Http\Controllers\Laundry@hapusTransaksi');
Route::get('/transaksi/pdf', 'App\Http\Controllers\Laundry@pdfTransaksi');
Route::get('/transaksi/excel', 'App\Http\Controllers\Laundry@excelTransaksi');


Route::get('/pembayaran', 'App\Http\Controllers\Laundry@indexPembayaran');
Route::get('/tambah-pembayaran', 'App\Http\Controllers\Laundry@tambahPembayaran');
Route::post('/simpan_pembayaran', 'App\Http\Controllers\Laundry@simpanPembayaran');
Route::get('/cetak_nota/{id}', 'App\Http\Controllers\Laundry@cetakNota');


Route::get('/laporan', 'App\Http\Controllers\Laundry@laporan');


Route::get('/karyawan', 'App\Http\Controllers\Laundry@karyawan');
Route::get('/tkry', 'App\Http\Controllers\Laundry@tkry')->name('tkry');
Route::post('/aksi_tkry', 'App\Http\Controllers\Laundry@aksi_tkry')->name('aksi_tkry');
Route::get('/edit_karyawan/{id}', 'App\Http\Controllers\Laundry@editKaryawan');
Route::post('/hapus_karyawan/{id}', 'App\Http\Controllers\Laundry@hapusKaryawan');