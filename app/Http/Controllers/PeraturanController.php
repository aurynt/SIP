<?php

namespace App\Http\Controllers;

use App\Models\Peraturan;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PeraturanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $res = Peraturan::all();
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
            $file = $request->file('file');
            if (!$file) {
                throw new Error('file not uploaded');
            }
            $file_peraturan = $file->store('public/peraturan/');
            $res = Peraturan::create($request->all());
            return response()->json($res);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Peraturan $peraturan, $id)
    {
        try {
            $res = $peraturan->findOrFail($id);
            return response()->json($res);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peraturan $peraturan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peraturan $peraturan, $id)
    {
        try {
            $dataToUpdate = $request->all();
            $getPeraturan = $peraturan->findOrFail($id);
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                if (!$file) {
                    throw new Error('File cannot be null');
                }
                $file_peraturan = $file->store('public/peraturan/');
                Storage::delete('public/peraturan/'.$getPeraturan->file);
                $dataToUpdate['file'] = $file_peraturan;
            } else {
                $dataToUpdate['file'] = $getPeraturan->file;
            }

            $res = $getPeraturan->update($dataToUpdate);
            return response()->json($res);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peraturan $peraturan, $id)
    {
        try {
            $getPeraturan = $peraturan->findOrFail($id);
            Storage::delete('public/peraturan/'.$getPeraturan->file);
            $res = $getPeraturan->delete();
            return response()->json($res);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
