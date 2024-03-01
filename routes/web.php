<?php

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\DetailUserController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\PrintController;
use Illuminate\Support\Facades\DB;
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


Route::group(['middleware' => 'guest'], function () {
    Route::get('/sign-in', function () {
        return view('sign.sign-in', [
            'title' => 'Login |'
        ]);
    })->name('login-web');

    Route::post('/auth/login', [AuthController::class, 'login'])->name('loginPost');
});

Route::group(['middleware' => 'auth'], function () {

    Route::post('/auth/logout', [AuthController::class, 'logout'])->name('logout-web');

    Route::get('/', function () {
        return view('index', [
            'title' => ''
        ]);
    });

    Route::get('/tanah-lahan', function () {
        return view('tanah-lahan', [
            'title' => 'Tanah dan Lahan |',
            'kecamatan' => DB::table('ref_kecamatan')->get(),
            'kelurahan' => DB::table('ref_kelurahan')->get(),
        ]);
    });

    Route::get('/ruas-jalan', function () {
        return view('ruas-jalan', [
            'title' => 'Ruas Jalan |',
            'kecamatan' => DB::table('ref_kecamatan')->get(),
            'kelurahan' => DB::table('ref_kelurahan')->get(),
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
            'title' => 'Drainase |',
            'kecamatan' => DB::table('ref_kecamatan')->get(),
            'kelurahan' => DB::table('ref_kelurahan')->get(),
        ]);
    });

    Route::get('/peta', function () {
        return view('peta', [
            'title' => 'Peta |'
        ]);
    });

    Route::prefix('dashboard')->group(function () {
        Route::name('page.')->group(function () {
            Route::get('/', [AppController::class, 'dashboard'])->name('home');
            Route::get('/pengaturan-beranda', [AppController::class, 'pengaturanBeranda'])->name('setBeranda');
            Route::get('/pengaturan-disclaimer', [AppController::class, 'pengaturanDisclaimer'])->name('setDisclaimer');
            Route::get('/tanah-lahan-dashboard', [AppController::class, 'tanahDanLahan'])->name('tanah-lahan');
            Route::get('/ruas-jalan-dashboard', [AppController::class, 'ruasJalan'])->name('jalan');
            Route::get('/peraturan-dashboard', [AppController::class, 'peraturanDashboard'])->name('peraturan');
            Route::get('/drainase-dashboard', [AppController::class, 'drainaseDashboard'])->name('drainase');
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
        Route::name('file.')->group(function () {
            Route::get('export-tanah-lahan', [ExcelController::class, 'TanahExport'])->name('tanah-lahan');
            Route::get('export-ruas-jalan', [ExcelController::class, 'JalanExport'])->name('jalan');
            Route::get('export-template-excel', [ExcelController::class, 'TanahExportOnlyHeading'])->name('template-excel');
            Route::get('export-template-excel-jalan', [ExcelController::class, 'JalanExportOnlyHeading'])->name('template-excel-jalan');
            Route::post('import-tanah-lahan', [ExcelController::class, 'TanahImport'])->name('tanah-lahan-import');
            Route::post('import-ruas-jalan', [ExcelController::class, 'JalanImport'])->name('ruas-jalan-import');
        });
    });

    Route::name('detailUser.')->group(function () {
        Route::get('detail-tanah-lahan/{id}', [DetailUserController::class, 'detailUserTanahLahan'])->name('tanah-lahan');
        Route::get('detail-ruas-jalan/{id}', [DetailUserController::class, 'detailUserRuasJalan'])->name('jalan');
        Route::get('detail-drainase/{id}', [DetailUserController::class, 'detailUserDrainase'])->name('drainase');
    });

    Route::name('print.')->group(function () {
        Route::get('ruas-jalan/print/{id}', [PrintController::class, 'ruasJalan'])->name('ruas-jalan');
        Route::get('tanah-lahan/print/{id}', [PrintController::class, 'tanahLahan'])->name('tanah-lahan');
    });
});
