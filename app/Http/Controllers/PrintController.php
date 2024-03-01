<?php

namespace App\Http\Controllers;

use App\Models\Jalan;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function ruasJalan($id)
    {
        $ruasJalan = Jalan::findOrFail($id);
        return view('print.ruas-jalan',compact(['ruasJalan']));
    }
}
