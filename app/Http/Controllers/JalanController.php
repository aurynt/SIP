<?php

namespace App\Http\Controllers;

use App\Models\Jalan;
use Illuminate\Http\Request;

class JalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Jalan $jalan)
    {
        try {
            $res = $jalan->select('jalan.*', 'ref_kecamatan.nama_kecamatan', 'ref_kelurahan.nama_kelurahan')
                ->join('ref_kecamatan', 'jalan.kode_kec', '=', 'ref_kecamatan.id_kecamatan')
                ->join('ref_kelurahan', 'jalan.kode_kel', '=', 'ref_kelurahan.id_kelurahan')
                ->get();
            return response()->json($res);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage()
            ], 400);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $res = Jalan::create($request->all());
            return response()->json($res);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage()
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Jalan $jalan, $id)
    {
        try {
            $res = $jalan->findOrFail($id);
            return response()->json($res);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage()
            ], 400);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jalan $jalan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jalan $jalan, $id)
    {
        try {
            $res = $jalan->findOrFail($id)->update($request->all());
            return response()->json($res);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage()
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jalan $jalan, $id)
    {
        try {
            // $jalan = Jalan::findOrFail($id);
            $res = $jalan->findOrFail($id)->delete();
            return response()->json($res);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage()
            ], 400);
        }
    }
}
