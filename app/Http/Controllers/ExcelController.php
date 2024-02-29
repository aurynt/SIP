<?php

namespace App\Http\Controllers;

use App\Exports\RuasJalalnExport;
use App\Exports\RuasJalanOnlyHeading;
use App\Exports\TanahLahanExport;
use App\Exports\TanahLahanOnlyHeading;
use App\Imports\RuasJalanImport;
use App\Imports\TanahLahanImport;
use App\Models\Tanah;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function TanahExport(){
        $date = Carbon::now()->format('Y-m-d_H-i-s');
        return Excel::download(new TanahLahanExport, "Data Tanah dan Lahan - {$date}.xlsx");
    }
    public function TanahImport(Request $request){
        $request->validate([
            'tanahLahanFile' => 'required|file|mimes:xlsx,xls,csv',
        ]);
        $path = $request->file('tanahLahanFile')->store('temp');
        Excel::import(new TanahLahanImport, $path);
        return redirect()->back()->with('success', "Data Successfuly imported");
    }
    public function TanahExportOnlyHeading(){
        $export = new TanahLahanOnlyHeading();
        return Excel::download($export, 'Template_Excel_Tegal.xlsx');
    }


    public function JalanExport(){
        $date = Carbon::now()->format('Y-m-d_H-i-s');
        return Excel::download(new RuasJalalnExport, "Data Ruas Jalan - {$date}.xlsx");
    }
    public function JalanImport(Request $request){
        $request->validate([
            'ruasJalanFile' => 'required|file|mimes:xlsx,xls,csv'
        ]);
        $path = $request->file('ruasJalanFile')->store('jalan-temp');
        Excel::import(new RuasJalanImport, $path);
        return redirect()->back()->with('success', "Data Successfuly imported");
    }
    public function JalanExportOnlyHeading(){
        $export = new RuasJalanOnlyHeading();
        return Excel::download($export, 'Template_Ruas_Jalan_Excel_Tegal.xlsx');
    }
}
