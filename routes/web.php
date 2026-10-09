<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/hello',function(){
    return view ('hello');
});

Route::get('/profil',function(){
    return view ('profil');
});

Route::get('/profil2', function () {
    return view('profil2', [
        'nama'  => 'Nama Mahasiswa',
        'nim'   => '0123456789',
        'kelas' => 'TRM-00',
        'prodi' => 'Teknologi Rekayasa Multimedia',
    ]);
});

Route::get('home', function () {
    return view('pages.home');
});