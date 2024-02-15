<?php

namespace App\Http\Controllers;

use App\Models\Drainase;
use App\Models\Jalan;
use App\Models\Peraturan;
use App\Models\Tanah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditController extends Controller
{
    function editTanahLahan(Tanah $tanah, $id)
    {
        return view('admin.edit.editTanahDanLahanDashboard', [
            'title' => 'Edit Tanah Dan Lahan',
            'data' => $tanah->findOrFail($id)
        ]);
    }
    function editRuasJalan(Jalan $jalan, $id)
    {
        return view('admin.edit.editRuasJalan', [
            'title' => 'Edit Ruas Jalan',
            'data' => $jalan->findOrFail($id)
        ]);
    }
    function editPeraturan(Peraturan $peraturan, $id)
    {
        return view('admin.edit.editPeraturanDashboard', [
            'title' => 'Edit Peraturan',
            'jenisPeraturan' => DB::table('ref_jenis_peraturan')->get(),
            'data' => $peraturan->select('peraturan.*', 'ref_jenis_peraturan.jenis')
                ->join('ref_jenis_peraturan', 'peraturan.id_jenis', '=', 'ref_jenis_peraturan.id')->findOrFail($id)
        ]);
    }
    function editDrainase(Drainase $drainase, $id)
    {
        return view('admin.edit.editDrainaseDashboard', [
            'title' => 'Edit Drainase',
            'kecamatan' => DB::table('ref_kecamatan')->get(),
            'data' => $drainase->select('drainase.*', 'ref_kecamatan.nama_kecamatan', 'ref_kelurahan.nama_kelurahan')
                ->join('ref_kecamatan', 'drainase.kode_kec', '=', 'ref_kecamatan.id_kecamatan')
                ->join('ref_kelurahan', 'drainase.kode_kel', '=', 'ref_kelurahan.id_kelurahan')
                ->findOrFail($id),
        ]);
    }
}
