<?php

namespace App\Http\Controllers;

use App\Models\Batas;
use Illuminate\Http\Request;

class BatasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Batas $batas)
    {
        //
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
            $res = Batas::create($request->all());
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
    public function show(Batas $batas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Batas $batas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Batas $batas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Batas $batas)
    {
        //
    }
}
