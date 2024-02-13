<?php

namespace App\Http\Controllers;

use App\Models\Disclaimer;
use Illuminate\Http\Request;

class DisclaimerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $res = Disclaimer::all();
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
            $res = Disclaimer::create($request->all());
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
    public function show(Disclaimer $disclaimer, $id)
    {
        try {
            $res = $disclaimer->findOrFail($id);
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
    public function edit(Disclaimer $disclaimer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Disclaimer $disclaimer, $id)
    {
        try {
            $res = $disclaimer->findOrFail($id)->update($request->all());
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
    public function destroy(Disclaimer $disclaimer, $id)
    {
        try {
            $res = $disclaimer->findOrFail($id)->delete();
            return response()->json($res);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage()
            ], 400);
        }
    }
}
