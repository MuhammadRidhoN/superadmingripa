<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardMitraController;
use App\Http\Controllers\DashboardPelangganController;
use App\Http\Controllers\DetailMitraController;
use App\Http\Controllers\EvpController;
use App\Http\Controllers\KelolaPvpController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LvpController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PvpController;
use App\Http\Controllers\TvpController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [LoginController::class , 'index']);
Route::get('/beranda', [BerandaController::class , 'index']);
Route::get('/mitra', [MitraController::class , 'index']);
Route::get('/dbmitra', [DashboardMitraController::class , 'index']);
Route::get('/pelanggan', [PelangganController::class , 'index']);
Route::get('/dbpelanggan', [DashboardPelangganController::class , 'index']);
Route::get('/pvp', [PvpController::class , 'index']);
Route::get('/dm', [DetailMitraController::class , 'index']);
Route::get('/kelolapvp', [KelolaPvpController::class , 'index']);
Route::get('/tvp', [TvpController::class , 'index']);
Route::get('/evp', [EvpController::class , 'index']);
Route::get('/lvp', [LvpController::class , 'index']);