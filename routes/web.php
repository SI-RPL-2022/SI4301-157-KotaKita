<?php

use App\Http\Controllers\AduanController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaseController;
use App\Http\Controllers\FaseProgressController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LayananController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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
Route::middleware('auth')->group(function(){
    Route::get('/profile',[ProfileController::class,'index'])->name('profile.index');
    Route::get('/edit-profile',[ProfileController::class,'edit'])->name('profile.edit');
    Route::post('edit-profile',[ProfileController::class,'update'])->name('profile.update');
    Route::post('/update-foto',[ProfileController::class,'fotoUpdate'])->name('profile.foto-update');
    Route::post('/remove-foto',[ProfileController::class,'fotoRemove'])->name('profile.foto-remove');

    // users
    Route::middleware('role:super admin')->prefix('manajemen-users')->group(function(){
        Route::get('/',[UserController::class,'index'])->name('manajemen-users.index');
        Route::post('/',[UserController::class,'index'])->name('manajemen-users.search');
        Route::post('/update',[UserController::class,'update'])->name('manajemen-users.update');
        Route::delete('/{id}/delete',[UserController::class,'destroy'])->name('manajemen-users.destroy');
    });
    // kota
    Route::resource('kota',KotaController::class)->except('show')->middleware('role:super admin|admin');
    // fase
    Route::post('proyek/fase/create',[FaseController::class,'store'])->name('fase.store')->middleware('role:super admin|admin');
    Route::get('proyek/{proyek_id}/fase/create',[FaseController::class,'create'])->name('fase.create')->middleware('role:super admin|admin');

    // progress fase
    Route::get('fase/proress/{id_fase}/create',[FaseProgressController::class,'create'])->name('fase-progress.create')->middleware('role:super admin|admin');
    Route::post('fase/proress/create',[FaseProgressController::class,'store'])->name('fase-progress.store')->middleware('role:super admin|admin');

    Route::get('fasilitas/{id}/edit',[FasilitasController::class,'edit'])->name('fasilitas.edit')->middleware('role:super admin|admin');
    Route::patch('fasilitas/{id}/edit',[FasilitasController::class,'update'])->name('fasilitas.update')->middleware('role:super admin|admin');
    Route::post('fasilitas/get',[FasilitasController::class,'getByKota'])->name('fasilitas.getByKota')->middleware('role:super admin|admin');

    // dashboard
    Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');

    // Aduan proyek
    Route::get('proyek/aduan/create',[AduanController::class,'create'])->name('aduan.create');
    Route::post('proyek/aduan/create',[AduanController::class,'store'])->name('aduan.store');

    // feedback
Route::get('fasilitas/feedback/create',[FeedbackController::class,'create'])->name('feedback.create');
Route::post('fasilitas/feedback/create',[FeedbackController::class,'store'])->name('feedback.store');
});


// proyek
Route::resource('proyek',ProyekController::class);
Route::post('proyek/get',[ProyekController::class,'getByKota'])->name('proyek.getByKota');



// halaman statis
Route::get('/faq', [PageController::class,'faq'])->name('page.faq');
Route::get('/contact', [ContactController::class,'index'])->name('contact.index');
Route::post('/contact', [ContactController::class,'store'])->name('contact.store');

Route::get('layanan',LayananController::class)->name('layanan.index');

Route::post('fase-progress',[FaseProgressController::class,'getByFase'])->name('fase-progress.getByFaseId');

// fasilitas
Route::get('fasilitas',[FasilitasController::class,'index'])->name('fasilitas.index');
Route::get('fasilitas/{id}',[FasilitasController::class,'show'])->name('fasilitas.show');



// laporan
Route::get('laporan',[LaporanController::class,'index'])->name('laporan.index');
Route::get('laporan/search',[LaporanController::class,'index'])->name('laporan.search');
Route::get('laporan/proyek/{proyek_id}/{fase_id}/{gallery_id}/download',[LaporanController::class,'download'])->name('laporan.download');
