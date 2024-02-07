<?php

namespace App\Http\Controllers;

use App\Models\Drainase;
use Illuminate\Http\Request;

class DrainaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $res = Drainase::all();
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
            $res = Drainase::create($request->all());
            return response()->json($res);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Drainase $drainase, $id)
    {
        try {
            $res = $drainase->findOrFail($id);
            return response()->json($res);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Drainase $drainase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Drainase $drainase, $id)
    {
        try {
            $res = $drainase->findOrFail($id)->update($request->all());
            return response()->json($res);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Drainase $drainase, $id)
    {
        try {
            $res = $drainase->findOrFail($id)->delete();
            return response()->json($res);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
