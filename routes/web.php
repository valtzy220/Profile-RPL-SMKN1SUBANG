<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/data-guru', function () {
    return view('data-guru');
});
Route::get('/mapel', function () {
    return view('mata-pelajaran');
});
Route::get('/profile', function () {
    return view('profile');
});