<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('article');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/dashboard/mahasiswa/list-mahasiswa', function () {
    return view('dashboard.mahasiswa.index');
});

