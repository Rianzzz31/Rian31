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
Route::get('profile', function () {
    return view ('profile');
});
Route:: get('mahasiswa', function (){
    return view ('mahasiswa');
});
Route:: get('about', function (){
    return view ('about');
});

Route:: get('/tugas', function (){
    return view ('tugas');
});
Route:: get('perulangan', function (){
    $nilai_awal = 1;
    $mobil_rusak = 5;
    $jumlah_mobil = 10;
    while ($nilai_awal <= $jumlah_mobil) {
        if ($nilai_awal > $mobil_rusak) {
            echo "Mobil ke- " . $nilai_awal . 'dalam kondisi rusak!<br>';
        }else{
        echo "Mobil ke- " . $nilai_awal . 'beroprasi dengan baik!<br>';
        }
        $nilai_awal++;
    }
    echo '<hr>';
    for ($i = $mobil_rusak + 1; $i <= $jumlah_mobil; $i++) {
        echo 'Mobil ke-' . $i . 'dalam kondisi rusak!<br>';
    }
//     return view ('');
});

Route::get('/mahasiswa', function () {
    $no = [1, 2, 3];
    $nama = ['Rian Andika', 'Bahdis', 'COCOLINE'];
    $npm = [2109020123, 2109020133, 2109020134];
    $jurusan =  ['Teknologi Informasi', 'Sistem Informasi', 'Data Sains'];
    $kelas = ['C', 'B', 'D'];
    $tgl_lahir = ['21 November 2003', '2 Oktober 2000', '15 Februari 1998'];
    $tmp_lahir = ['Medan', 'Jakarta', 'binjai'];
    $jumlah = count($npm);
    return view('mahasiswa', compact('no', 'nama', 'npm', 'jurusan', 'kelas', 'tgl_lahir', 'tmp_lahir', 'jumlah'));
});
