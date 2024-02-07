<?php

namespace App\Http\Controllers;

use App\Models\Jalan;
use Illuminate\Http\Request;

class JalanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $res = Jalan::all();
            return response()->json($res);
        } catch (\Throwable $th) {
            throw $th;
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
            throw $th;
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
            throw $th;
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
            throw $th;
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
            throw $th;
        }
    }
}
