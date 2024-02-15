<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditController extends Controller
{
    function editTanahLahan(){
        return view('admin.edit.editTanahDanLahanDashboard',[
            'title' => 'Edit Tanah Dan Lahan',
        ]);
    }
    function editRuasJalan(){
        return view('admin.edit.editRuasJalan',[
            'title' => 'Edit Ruas Jalan'
        ]);
    }
    function editPeraturan(){
        return view('admin.edit.editPeraturanDashboard', [
            'title' => 'Edit Peraturan'
        ]);
    }
    function editDrainase(){
        return view('admin.edit.editDrainaseDashboard', [
            'title' => 'Edit Drainase'
        ]);
    }
}
