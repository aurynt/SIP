<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\EditController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index', [
        'title' => ''
    ]);
});

Route::get('/tanah-lahan', function () {
    return view('tanah-lahan', [
        'title' => 'Tanah dan Lahan |'
    ]);
});

Route::get('/ruas-jalan', function () {
    return view('ruas-jalan', [
        'title' => 'Ruas Jalan |'
    ]);
});

Route::get('/peraturan', function () {
    return view('peraturan', [
        'title' => 'Peraturan |'
    ]);
});

Route::get('/statistik', function () {
    return view('statistik', [
        'title' => 'Statistik |'
    ]);
});

Route::get('/drainase', function () {
    return view('drainase', [
        'title' => 'Drainase |'
    ]);
});

Route::get('/peta', function () {
    return view('peta', [
        'title' => 'Peta |'
    ]);
});

Route::get('/sign_in', function () {
    return view('sign.sign-in', [
        'title' => 'Login |'
    ]);
});

// Route::name('sign.')->group(function () {

// });

Route::name('page.')->group(function () {
    Route::get('/dashboard', [AppController::class, 'dashboard'])->name('home');
    Route::get('/pengaturan-beranda', [AppController::class, 'pengaturanBeranda'])->name('setBeranda');
    Route::get('/pengaturan-disclaimer', [AppController::class, 'pengaturanDisclaimer'])->name('setDisclaimer');
    Route::get('/tanah-lahan', [AppController::class, 'tanahDanLahan'])->name('tanah-lahan');
    Route::get('/ruas-jalan', [AppController::class, 'ruasJalan'])->name('jalan');
    Route::get('/peraturan', [AppController::class, 'peraturanDashboard'])->name('peraturan');
    Route::get('/drainase', [AppController::class, 'drainaseDashboard'])->name('drainase');
});

Route::name('detail.')->group(function () {
    Route::get('detail-tanah-lahan/{id}', [DetailController::class, 'detailTanahLahan'])->name('detail-tanah');
    Route::get('detail-ruas-jalan/{id}', [DetailController::class, 'detailRuasJalan'])->name('jalan');
    Route::get('detail-peraturan/{id}', [DetailController::class, 'detailPeraturan'])->name('peraturan');
    Route::get('detail-drainase/{id}', [DetailController::class, 'detailDrainase'])->name('drainase');
});

Route::name('create.')->group(function () {
    Route::get('tambah-tanah-lahan', [CreateController::class, 'tanahDanLahan'])->name('tanah-lahan');
    Route::get('tambah-ruas-jalan', [CreateController::class, 'ruasJalan'])->name('jalan');
    Route::get('tambah-peraturan', [CreateController::class, 'peraturan'])->name('peraturan');
    Route::get('tambah-drainase', [CreateController::class, 'drainase'])->name('drainase');
});

Route::name('edit.')->group(function () {
    Route::get('edit-tanah-lahan/{id}', [EditController::class, 'editTanahLahan'])->name('tanah-lahan');
    Route::get('edit-ruas-jalan/{id}', [EditController::class, 'editRuasJalan'])->name('jalan');
    Route::get('edit-peraturan/{id}', [EditController::class, 'editPeraturan'])->name('peraturan');
    Route::get('edit-drainase/{id}', [EditController::class, 'editDrainase'])->name('drainase');
});
