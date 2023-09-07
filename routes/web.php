<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\registrasiController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/data-sosial', [HomeController::class, 'dasos']);
Route::get('/antrian', [HomeController::class, 'antrian']);
Route::controller(HomeController::class)->group(function () {
    Route::get('registrasi', 'registrasi');
    Route::get('registrasiSearch', 'registrasiSearch')->name('registrasiSearch');
    Route::get('getDasos', 'getDasos')->name('getDasos');
});

Route::post('/create-dasos', [registrasiController::class, 'store']);

Route::get('/registrasi', [HomeController::class, 'registrasi']);
