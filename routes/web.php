<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/halo', function () {
return 'Halo, selamat belajar Laravel!';
});
Route::get('/profil', function () {
return 'Halaman Profil Kampus';
});

Route::get('/kontak', function () {
return 'Halaman Kontak Kampus';
});

Route::get('/tentang', function () {
return 'Tentang Aplikasi Akademik';
});
Route::get('/beranda', function () {
return '
<h1>Aplikasi Akademik</h1>
<p>Selamat datang di sistem informasi akademik.</p>
<ul>
<li>Data Mahasiswa</li>
<li>Data Dosen</li>
<li>Data Mata Kuliah</li>
</ul>
'; 
});
Route::get('/mahasiswa/{nim}', function ($nim) {
return 'NIM Mahasiswa: ' . $nim;
});
Route::get('/matakuliah/{kode}', function ($kode) {
return 'Kode Mata Kuliah: ' . $kode;
});
Route::get('/profil-kampus', function () {
return 'Profil Universitas';
})->name('profil');
Route::get('/dashboard', function () {
return 'Dashboard Akadenik';
})->name('Dashboard');
Route::get('/mahasiswa', function () {
return 'Halaman Data Mahasiswa';
})->name('Mahasiswa');
Route::get('/dosen', function () {
return 'Halaman Data Dosen';
})->name('Dosen');
Route::get('/matakuliah', function () {
return 'Halaman Data Kuliah';
})->name('Matakuliah');
Route::get('/Rocky Mizwar', function () {
return '265720112003';
})->name('Rocky');
Route::get('/Sistem_Informasi', function () {
return 'Rocky Mizwar';
})->name('Rocky');