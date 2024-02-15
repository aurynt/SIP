<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateController extends Controller
{
    function tanahDanLahan(){
        return view('admin.create.createTanahDanLahan',[
            'title' => 'Tambah Tanah dan Lahan',
            'data' => DB::table('ref_kecamatan')->get(),
        ]);
    }

    function ruasJalan(){
        return view('admin.create.createRuasJalan',[
            'title' => 'Tambah Ruas Jalan'
        ]);
    }
    function peraturan(){
        return view('admin.create.createPeraturan', [
            'title' => 'Tambah Peraturan',
            'jenisPeraturan' => DB::table('ref_jenis_peraturan')->get()
        ]);
    }

    function drainase(){
        return view('admin.create.createDrainase', [
            'title' => 'Tambah Drainase',
            'kecamatan' => DB::table('ref_kecamatan')->get(),
        ]);
    }
}
