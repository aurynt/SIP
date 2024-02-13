<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    function detailTanahLahan(){
        return view('admin.detail.detailTanahDanLahan', [
            'title' => 'Detail Tanah dan Lahan'
        ]);
    }
    function detailRuasJalan(){
        return view('admin.detail.detailRuasJalanDashboard', [
            'title' => 'Detail Ruas Jalan'
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
