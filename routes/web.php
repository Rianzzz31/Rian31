<?php

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

// //pertemuan 1
// Route::get('/', function () {
//     // return view('welcome');
//     return 'hello world';
// });

// // route::get('/profile',function(){
// //     $nama = 'RIAN';
// //     $tgl_lahir = '2003-05-31';
// //     return 'ini adalah halaman profile' . $nama . ',lahir pada tanggal' . $tgl_lahir;
// // });

// route:: get('/profile',function(){
//     return view('profile');
// });
// route::get('/HOME',function(){
//     $siswa = 'rian';
//     return view('HOME');
// });

//pertemuan 2
Route:: get('/', function () {
   return view ('home');
});

Route::get('/product', function () {
    $kode_produk = ['BRG001', 'BRG002'];
    $nama_produk = ['Pena', 'Buku'];
    $jenis_produk = ['Alat Tulis', 'Alat Tulis'];
    $harga = [20000, 15000];
    $jumlah = count($harga);
    return view('product', compact('harga', 'jumlah', 'nama_produk', 'kode_produk', 'jenis_produk'));
});

Route::get('/form', function () {
    $jenis_produk = ['Pilih Produk', 'Alat Tulis', 'Elektronik', 'Sembako'];
    $jumlah = count($jenis_produk);
    return view('form', compact('jumlah', 'jenis_produk'));
});