<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/article', function () {
    return view('article');
});

Route::get('/beranda', [BerandaController::class, 'index'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/dashboard/mahasiswa/list-mahasiswa', function () {
    return view('dashboard.mahasiswa.index');
});

Route::get('/dashboard/progress/materi-1', function () {
    return view('dashboard.materi1.index');
});

Route::get('/dashboard/progress/materi-2', function () {
    return view('dashboard.materi2.index');
});

Route::get('/dashboard/mahasiswa/list-mahasiswa/create', function () {
    return view('dashboard.mahasiswa.create');
});

Route::get('/dashboard/mahasiswa/list-mahasiswa/edit', function () {
    return view('dashboard.mahasiswa.edit');
});

Route::get('/dashboard/mahasiswa/progress-mahasiswa', function () {
    return view('dashboard.progress.index');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'index');
    Route::post('/register', 'store');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/', 'index')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout');
});
