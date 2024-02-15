<?php

namespace App\Http\Controllers;

use App\Models\Drainase;
use App\Models\Peraturan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    function detailTanahLahan()
    {
        return view('admin.detail.detailTanahDanLahan', [
            'title' => 'Detail Tanah dan Lahan',

        ]);
    }
    function detailRuasJalan()
    {
        return view('admin.detail.detailRuasJalanDashboard', [
            'title' => 'Detail Ruas Jalan',
        ]);
    }
    function detailPeraturan(Peraturan $peraturan, $id)
    {
        return view('admin.detail.detailPeraturanDashboard', [
            'title' => 'Detail Peraturan',
            'data' => $peraturan->select('peraturan.*', 'ref_jenis_peraturan.jenis')
                ->join('ref_jenis_peraturan', 'peraturan.id_jenis', '=', 'ref_jenis_peraturan.id')->findOrFail($id),
        ]);
    }
    function detailDrainase(Drainase $drainase, $id)
    {
        return view('admin.detail.detailDrainase', [
            'title' => 'Detail Drainase',
            'data' => $drainase->select('drainase.*', 'ref_kecamatan.nama_kecamatan', 'ref_kelurahan.nama_kelurahan')
                ->join('ref_kecamatan', 'drainase.kode_kec', '=', 'ref_kecamatan.id_kecamatan')
                ->join('ref_kelurahan', 'drainase.kode_kel', '=', 'ref_kelurahan.id_kelurahan')
                ->findOrFail($id),
        ]);
    }
}
