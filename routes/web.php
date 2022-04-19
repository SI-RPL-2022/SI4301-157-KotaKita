<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
    return view('index');
});
Route::get('/registrasi', function () {
    return view('registrasi');
});
Route::get('/faq', function () {
    return view('Faq');
});
Route::get('/verif', function () {
    return view('verifikasi');
});
Route::get('/kontak', function () {
    return view('Contact');
});
Route::get('login', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'authenticate']);
