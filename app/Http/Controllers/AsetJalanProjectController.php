<?php

namespace App\Http\Controllers;

use App\Models\AsetJalanProject;
use Illuminate\Http\Request;

class AsetJalanProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $res = AsetJalanProject::all();
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
            $res = AsetJalanProject::create($request->all());
            return response()->json($res);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(AsetJalanProject $asetJalanProject, $id)
    {
        try {
            $res = $asetJalanProject->findOrFail($id);
            return response()->json($res);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AsetJalanProject $asetJalanProject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AsetJalanProject $asetJalanProject, $id)
    {
        try {
            $res = $asetJalanProject->findOrFail($id)->update($request->all());
            return response()->json($res);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AsetJalanProject $asetJalanProject, $id)
    {
        try {
            $res = $asetJalanProject->findOrFail($id)->delete();
            return response()->json($res);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
