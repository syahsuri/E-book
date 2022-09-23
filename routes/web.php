<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CallArticleController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProgressController;

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


Route::controller(ArticleController::class)->group(function () {
    Route::get('/article', 'index1');
    Route::get('/article2', 'index2');
    Route::get('/article3', 'index3');
    Route::get('/article4', 'index4');
    Route::get('/article5', 'index5');
    Route::get('/article6', 'index6');
    Route::get('/quiz', 'quiz');
});

// call materi 1
Route::post('/call1', [CallArticleController::class, 'call1'])->name('call1');
Route::post('/call2', [CallArticleController::class, 'call2'])->name('call2');
Route::post('/call3', [CallArticleController::class, 'call3'])->name('call3');
Route::post('/call4', [CallArticleController::class, 'call4'])->name('call4');
Route::post('/call5', [CallArticleController::class, 'call5'])->name('call5');
Route::post('/call6', [CallArticleController::class, 'call6'])->name('call6');
Route::post('/call7', [CallArticleController::class, 'call7'])->name('call7');


Route::get('/beranda', [BerandaController::class, 'index'])->middleware('auth');

// Dashboard
Route::prefix('/dashboard')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

    Route::resource('/user/list-user', DashboardUserController::class)->middleware('dashboard');;
    Route::post('/user/list-user/reset-password', [DashboardUserController::class, 'resetPasswordAdmin'])->middleware('dashboard');

    Route::get('/progress/materi-1', [DashboardProgressController::class, 'materi1'])->middleware('dashboard');
    Route::get('/progress/materi-2', [DashboardProgressController::class, 'materi2'])->middleware('dashboard');
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
