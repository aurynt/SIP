<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use App\Models\Disclaimer;
use App\Models\Drainase;
use App\Models\Jalan;
use App\Models\Peraturan;
use App\Models\Slider;
use App\Models\Tanah;
use Illuminate\Http\Request;

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
            'tanah' => Tanah::all(),
        ]);
    }

    function ruasJalan()
    {
        return view('admin.data.ruasJalan', [
            'title' => 'Ruas Jalan',
            'ruas' => Jalan::all()
        ]);
    }

    function peraturanDashboard()
    {
        return view('admin.data.peraturanDashboard', [
            'title' => 'Peraturan',
            'data' => Peraturan::all(),
        ]);
    }

    function drainaseDashboard()
    {
        return view('admin.data.drainaseDashboard', [
            'title' => 'Drainase',
            'data' => Drainase::select('drainase.*', 'ref_kecamatan.nama_kecamatan', 'ref_kelurahan.nama_kelurahan')
                ->join('ref_kecamatan', 'drainase.kode_kec', '=', 'ref_kecamatan.id_kecamatan')
                ->join('ref_kelurahan', 'drainase.kode_kel', '=', 'ref_kelurahan.id_kelurahan')
                ->get(),
        ]);
    }
}
