<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\AcController;
use App\Http\Controllers\KaryawanController;
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

Route::get('frontend', function () {
    return view('frontend');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('welcome', [DosenController::class, 'welcome']);

//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);


// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//route pegawaiDB
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);


//TUGAS CRUD

//Create AC
Route::get('/tugascrud/tambah', [AcController::class, 'create']);
Route::post('/tugascrud/store', [AcController::class, 'store']);

//Read AC
Route::get('/tugascrud', [AcController::class, 'read']);

//Update Kipas Angin
Route::get('/tugascrud/edit/{id}', [AcController::class, 'edit']);
Route::post('/tugascrud/update', [AcController::class, 'update']);

//Delete AC
Route::post('/tugascrud/delete/{id}', [AcController::class, 'delete']);

//Search AC
Route::get('/tugascrud/cari', [AcController::class, 'cari']);

// Latihan 1 - Karyawan CRUD

// Create latihan1
Route::get(
    '/latihan1/tambah',
    [KaryawanController::class, 'create']
);

Route::post(
    '/latihan1/store',
    [KaryawanController::class, 'store']
);

// Read
Route::get(
    '/latihan1',
    [KaryawanController::class, 'read']
);

// Update
Route::get(
    '/latihan1/edit/{kodepegawai}',
    [KaryawanController::class, 'edit']
);

Route::post(
    '/latihan1/update',
    [KaryawanController::class, 'update']
);

// Delete
Route::post(
    '/latihan1/delete/{kodepegawai}',
    [KaryawanController::class, 'delete']
);

// Search
Route::get(
    '/latihan1/cari',
    [KaryawanController::class, 'cari']
);
