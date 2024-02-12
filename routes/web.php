<?php

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
    return view('tanah-lahan',[
        'title' => 'Tanah dan Lahan |'
    ]);
});

Route::get('/ruas-jalan', function () {
    return view('ruas-jalan',[
        'title' => 'Ruas Jalan |'
    ]);
});

Route::get('/peraturan', function () {
    return view('peraturan', [
        'title' => 'Peraturan |'
    ]);
});

Route::get('/statistik', function () {
    return view('statistik',[
        'title' => 'Statistik |'
    ]);
});

Route::get('/drainase', function () {
    return view('drainase',[
        'title' => 'Drainase |'
    ]);
});

Route::get('/peta', function () {
    return view('peta',[
        'title' => 'Peta |'
    ]);
});

Route::get('/dashboard', function () {
    return view('admin.index',[
        'title' => 'Dashboard'
    ]);
});

Route::get('/pengaturanBeranda', function () {
    return view('admin.manajemen.pengaturanBeranda',[
        'title' => 'Pengaturan Beranda'
    ]);
});

Route::get('/pengaturanDisclaimer', function () {
    return view('admin.manajemen.pengaturanDisclaimer',[
        'title' => 'Pengaturan Disclaimer'
    ]);
});

Route::get('/tanahDanLahan', function () {
    return view('admin.data.tanahDanLahan',[
        'title' => 'Tanah dan Lahan'
    ]);
});

Route::get('/ruasJalan', function () {
    return view('admin.data.ruasJalan',[
        'title' => 'Ruas Jalan'
    ]);
});

Route::get('/peraturanDashboard', function () {
    return view('admin.data.peraturanDashboard',[
        'title' => 'Peraturan'
    ]);
});

Route::get('/drainaseDashboard', function () {
    return view('admin.data.drainaseDashboard',[
        'title' => 'Drainase'
    ]);
});

Route::get('/createTanahDanLahan', function () {
    return view('admin.create.createTanahDanLahan',[
        'title' => 'Tambah Tanah Dan Lahan'
    ]);
});

Route::get('/createRuasJalan', function () {
    return view('admin.create.createRuasJalan',[
        'title' => 'Tambah Ruas Jalan'
    ]);
});

Route::get('/createRuasJalan', function () {
    return view('admin.create.createPeraturan',[
        'title' => 'Tambah Peraturan'
    ]);
});

Route::get('/createDrainase', function () {
    return view('admin.create.createDrainase',[
        'title' => 'Tambah Drainase'
    ]);
});
