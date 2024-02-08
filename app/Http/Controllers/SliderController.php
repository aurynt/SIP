<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $res = Slider::all();
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
            $file = $request->file('gambar_slider');
            if (!$file) {
                throw new Error('file not uploaded');
            }
            $logo = $file->store('public/slider');
            $data['gambar_slider'] = basename($logo);
            $data['created_at'] = now();
            $res = Slider::create($data);
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
    public function show(Slider $slider, $id)
    {
        try {
            $res = $slider->findOrFail($id);
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
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider, $id)
    {
        try {
            $slider = $slider->findOrFail($id);
            $res = $slider->delete();
            return response()->json($res);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage()
            ], 400);
        }
    }
}
