<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\Disclaimer;
use App\Models\Jalan;
use App\Models\Tanah;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    function dashboard()
    {
        return view('admin.index', [
            'title' => 'Dashboard'
        ]);
    }

    function pengaturanBeranda()
    {
        return view('admin.manajemen.pengaturanBeranda', [
            'title' => 'Pengaturan Beranda',
            'beranda' => Beranda::first(),
        ]);
    }

    function pengaturanDisclaimer()
    {
        return view('admin.manajemen.pengaturanDisclaimer', [
            'title' => 'Pengaturan Disclaimer',
            'disclaimer' => Disclaimer::first(),
        ]);
    }

    function tanahDanLahan()
    {
        return view('admin.data.tanahDanLahan', [
            'title' => 'Tanah dan Lahan',
            'kecamatan' => DB::table('ref_kecamatan')->get(),
            'kelurahan' => DB::table('ref_kelurahan')->get(),
        ]);
    }

    function ruasJalan()
    {
        return view('admin.data.ruasJalan', [
            'title' => 'Ruas Jalan',
            'kecamatan' => DB::table('ref_kecamatan')->get(),
            'kelurahan' => DB::table('ref_kelurahan')->get(),
        ]);
    }

    function peraturanDashboard()
    {
        return view('admin.data.peraturanDashboard', [
            'title' => 'Peraturan',
            'jenisPeraturan' => DB::table('ref_jenis_peraturan')->get()
        ]);
    }

    function drainaseDashboard()
    {
        return view('admin.data.drainaseDashboard', [
            'title' => 'Drainase',
            'kecamatan' => DB::table('ref_kecamatan')->get(),
            'kelurahan' => DB::table('ref_kelurahan')->get(),
        ]);
    }
}
