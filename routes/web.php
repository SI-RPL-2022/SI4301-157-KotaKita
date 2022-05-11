<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProyekController;

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


// Route::get('/faq', function () {
//     return view('Faq');
// });
// Route::get('/verif', function () {
//     return view('verifikasi');
// });
// Route::get('/kontak', function () {
//     return view('Contact');
// });
// Route::get('/editprofile', function () {
//     return view('editprofile1');
// });
// Route::get('/pilihproyek', function () {
//     return view('pilihproyek');
// });
// Route::get('/proyek', function () {
//     return view('proyek');
// });
// Route::get('/fase', function () {
//     return view('fasebaru');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profile',[ProfileController::class,'index'])->name('profile.index');
Route::get('/edit-profile',[ProfileController::class,'edit'])->name('profile.edit');

// proyek
Route::get('/proyek',[ProyekController::class,'index'])->name('proyek.index');
