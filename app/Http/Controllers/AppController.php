<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    function dashboard(){
        return view('admin.index',[
            'title' => 'Dashboard'
        ]);
    }

    function pengaturanBeranda(){
        return view('admin.manajemen.pengaturanBeranda',[
            'title' => 'Pengaturan Beranda'
        ]);
    }

    function pengaturanDisclaimer(){
        return view('admin.manajemen.pengaturanDisclaimer',[
            'title' => 'Pengaturan Disclaimer'
        ]);
    }

    function tanahDanLahan(){
        return view('admin.data.tanahDanLahan',[
            'title' => 'Tanah dan Lahan'
        ]);
    }

    function ruasJalan(){
        return view('admin.data.ruasJalan',[
            'title' => 'Ruas Jalan'
        ]);
    }

    function peraturanDashboard(){
        return view('admin.data.peraturanDashboard',[
            'title' => 'Peraturan'
        ]);
    }

    function drainaseDashboard(){
        return view('admin.data.drainaseDashboard',[
            'title' => 'Drainase'
        ]);
    }
}
