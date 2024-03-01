<?php

namespace App\Http\Controllers;

use App\Models\Jalan;
use App\Models\Tanah;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function ruasJalan($id)
    {
        $ruasJalan = Jalan::findOrFail($id);
        return view('print.ruas-jalan', compact(['ruasJalan']));
    }

    public function tanahLahan($id)
    {
        $tanah = Tanah::findOrFail($id);
        return view('print.tanah-lahan', compact(['tanah']));
    }
}
