<?php

namespace App\Http\Controllers;

use App\Models\Beranda;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\fileExists;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $res = Beranda::first();
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
            $file = $request->file('logo');
            if (!$file) {
                throw new Error('file not uploaded');
            }
            $logo = $file->store('public/logo');
            $data = $request->all();
            $data['logo'] = basename($logo);
            $res = Beranda::create($data);
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
    public function show(Beranda $beranda, $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Beranda $beranda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Beranda $beranda)
    {
        try {
            $file = $request->file('logo');
            $beranda = $beranda->first();
            $data = $request->all();
            $data['logo'] = $beranda->logo;
            if ($file) {
                Storage::delete("public/logo/$beranda->logo");
                $logo = $file->store('public/logo');
                $data['logo'] = basename($logo);
            }
            $data['updated_at'] = now();
            $res = $beranda->update($data);
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
    public function destroy(Beranda $beranda, $id)
    {
        try {
            $beranda = $beranda->findOrFail($id);
            Storage::delete("public/logo/$beranda->logo");
            $res = $beranda->delete();
            return response()->json($res);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage()
            ], 400);
        }
    }
}
