<?php

use Illuminate\Support\Facades\Route;
// import java.io ;

//System.out.println ("Hello word")
Route::get('/', function () {
    return view('frontend');
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('satu', function () {
    return view('pertama');
});

Route::get('pertemuan2', function () {
    return view('pertemuan2');
});

Route::get('pertemuan3', function () {
    return view('bootstrap');
});

Route::get('pertemuan4', function () {
    return view('itsTv');
});

Route::get('pertemuan6', function () {
    return view('linktree');
});

Route::get('pertemuan7.1', function () {
    return view('js1');
});

Route::get('pertemuan7.2', function () {
    return view('validasi1');
});

Route::get('pertemuan8', function () {
    return view('danantara');
});

Route::get('ets', function () {
    return view('ets');
});
