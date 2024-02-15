<?php

namespace App\Http\Controllers;

use App\Models\Jalan;
use App\Models\Tanah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    function detailTanahLahan(Tanah $id){
        return view('admin.detail.detailTanahDanLahan', [
            'title' => 'Detail Tanah dan Lahan',
            'tanah' => $id

        ]);
    }
    function detailRuasJalan(Jalan $id){
        return view('admin.detail.detailRuasJalanDashboard', [
            'title' => 'Detail Ruas Jalan',
            'jalan' => $id
        ]);
    }
    function detailPeraturan(){
        return view('admin.detail.detailPeraturanDashboard', [
            'title' => 'Detail Peraturan'
        ]);
    }
    function detailDrainase(){
        return view('admin.detail.detailDrainase', [
            'title' => 'Detail Drainase'
        ]);
    }
}
