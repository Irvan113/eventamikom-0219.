<?php

use Illuminate\Support\Facades\Route;

Route::get('/tentang', function () {

return '<h1>Ini adalah Halaman Tentang Aplikasi Event Hub</h1>';

});

Route::get('/kontak', function () {
    return view('contact');
});

Route::get('/profil', function () {
    return view('profile');
});

Route::get('/katalog', function () {
    return view('catalog');
});

Route::get('/bantuan', function () {
    return view('bantuan');
});
