<?php

namespace App\Http\Controllers;

use App\Models\Tanah;
use Illuminate\Http\Request;

class TanahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Tanah $tanah)
    {
        try {
            $res = $tanah->select('tanah.*', 'tanah_has_batas.type as type_batas', 'tanah_has_batas.coordinates as koordinat_batas')
                ->join('tanah_has_batas', 'tanah_has_batas.id_tanah', '=', 'tanah.id')
                ->get();;
            return response()->json($res);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getDataLuasKecamatan()
    {
        try {
            $res = Tanah::all(['kecamatan', 'luas'])->whereNotNull('luas');
            $groupedChartData = $res->groupBy('kecamatan')->map(function ($group) {
                return [
                    'kecamatan' => $group->first()->kecamatan,
                    'luas' => $group->sum('luas'),
                ];
            })->values();

            return response()->json($groupedChartData);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getDataLuasKelurahan()
    {
        try {
            $res = Tanah::all(['kelurahan', 'luas'])->whereNotNull('luas');
            $groupedChartData = $res->groupBy('kelurahan')->map(function ($group) {
                return [
                    'kelurahan' => $group->first()->kelurahan,
                    'luas' => $group->sum('luas'),
                ];
            })->values();

            return response()->json($groupedChartData);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getDataAsetPerKelurahan()
    {
        try {
            $res = Tanah::all(['kelurahan', 'luas'])->whereNotNull('luas');
            $groupedChartData = $res->groupBy('kelurahan')->map(function ($group) {
                return [
                    'kelurahan' => $group->first()->kelurahan,
                    'luas' => $group->sum('luas'),
                ];
            })->values();

            return response()->json($groupedChartData);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getLahanTerbangunPercentage()
    {
        try {
            $totalData = Tanah::count();

            $terbangunCount = Tanah::where('lahan_terbangun', 'Terbangun')->count();
            $nonTerbangunCount = Tanah::where('lahan_terbangun', 'Non Terbangun')->count();
            $terbangunSebagianCount = Tanah::where('lahan_terbangun', 'Terbangun Sebagian')->count();

            $percentageData = [
                'Terbangun' => ($terbangunCount / $totalData) * 100,
                'Non Terbangun' => ($nonTerbangunCount / $totalData) * 100,
                'Terbangun Sebagian' => ($terbangunSebagianCount / $totalData) * 100,
            ];

            return response()->json($percentageData);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getLegalitasAsetPercentage()
    {
        try {
            $totalData = Tanah::count();

            $sudahCount = Tanah::where('status', 'Sudah Bersertifikat')->count();
            $belumCount = Tanah::where('status', 'Belum Bersertifikat')->count();
            $hilangCount = Tanah::where('status', 'Sudah Bersertifikat (Hilang)')->count();
            $skCount = Tanah::where('status', 'Tanah SK')->count();

            $percentageData = [
                'Sudah Bersertifikat' => ($sudahCount / $totalData) * 100,
                'Belum Bersertifikat' => ($belumCount / $totalData) * 100,
                'Sudah Bersertifikat (Hilang)' => ($hilangCount / $totalData) * 100,
                'Tanah SK' => ($skCount / $totalData) * 100,
            ];

            return response()->json($percentageData);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getPemegangHakPercentage()
    {
        try {
            $totalData = Tanah::count();

            $depPKKanwil = Tanah::where('pemegang_hak', 'Departemen P & K Cq. KANWIL DEPDIKBUD Prop Jateng')->count();
            $depPK = Tanah::where('pemegang_hak', 'Departemen P & K Prop Jateng')->count();
            $depdikbudSmp2 = Tanah::where('pemegang_hak', 'Departemen Pendidikan dan Kebudayaan Cq. SMP N 2 Tegal')->count();
            $depdikbudSmp13 = Tanah::where('pemegang_hak', 'Departemen Pendidikan dan Kebudayaan Prop Jawa Tengah Cq. SMP N 13 Tegal')->count();
            $depdikbudRi = Tanah::where('pemegang_hak', 'Departemen Pendidikan dan Kebudayaan RI')->count();
            $desaKraton = Tanah::where('pemegang_hak', 'Desa Kraton')->count();
            $kanwilDepKop = Tanah::where('pemegang_hak', 'KANWIL Departemen Koperasi Provinsi Jawa Tengah')->count();
            $kanwilDepDikBud = Tanah::where('pemegang_hak', 'KANWIL Departemen Pendidikan dan Kebudayaan Propinsi Jawa Tengah')->count();
            $kanwilDepPen = Tanah::where('pemegang_hak', 'KANWIL Departemen Penerangan Propinsi Jawa Tengah')->count();
            $kelurahanKejambon = Tanah::where('pemegang_hak', 'Kelurahan Kejambon')->count();
            $pemerintahKotaTegal = Tanah::where('pemegang_hak', 'Pemerintah Kota Tegal')->count();

            $percentageData = [
                'Departemen P & K Cq. KANWIL DEPDIKBUD Prop Jateng' => ($depPKKanwil / $totalData) * 100,
                'Departemen P & K Prop Jateng' => ($depPK / $totalData) * 100,
                'Departemen Pendidikan dan Kebudayaan Cq. SMP N 2 Tegal' => ($depdikbudSmp2 / $totalData) * 100,
                'Departemen Pendidikan dan Kebudayaan Prop Jawa Tengah Cq. SMP N 13 Tegal' => ($depdikbudSmp13 / $totalData) * 100,
                'Departemen Pendidikan dan Kebudayaan RI' => ($depdikbudRi / $totalData) * 100,
                'Desa Kraton' => ($desaKraton / $totalData) * 100,
                'KANWIL Departemen Koperasi Provinsi Jawa Tengah' => ($kanwilDepKop / $totalData) * 100,
                'KANWIL Departemen Pendidikan dan Kebudayaan Propinsi Jawa Tengah' => ($kanwilDepDikBud / $totalData) * 100,
                'KANWIL Departemen Penerangan Propinsi Jawa Tengah' => ($kanwilDepPen / $totalData) * 100,
                'Kelurahan Kejambon' => ($kelurahanKejambon / $totalData) * 100,
                'Pemerintah Kota Tegal' => ($pemerintahKotaTegal / $totalData) * 100,
            ];

            return response()->json($percentageData);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getBerdasarkanPolaRuang()
    {
        try {
            $data = Tanah::selectRaw('rencana_pola, COUNT(*) as jumlah')
                ->groupBy('rencana_pola')
                ->get();

            return response()->json($data);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getBerdasarkanKeberadaanPapanNamaPemkotPercentage()
    {
        try {
            $totalData = Tanah::count();

            $rusak = Tanah::where('papan_nama', 'Rusak')->count();
            $sedang = Tanah::where('papan_nama', 'Sedang')->count();
            $tidakAda = Tanah::where('papan_nama', 'Tidak Ada')->count();
            $baik = Tanah::where('papan_nama', 'Baik')->count();

            $percentageData = [
                'Rusak' => ($rusak / $totalData) * 100,
                'Sedang' => ($sedang / $totalData) * 100,
                'Tidak Ada' => ($tidakAda / $totalData) * 100,
                'Baik' => ($baik / $totalData) * 100,
            ];

            return response()->json($percentageData);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getBerdasarkanKeberadaanPatokBatasTanahPercentage()
    {
        try {
            $totalData = Tanah::count();

            $rusak = Tanah::where('patok', 'Rusak')->count();
            $sedang = Tanah::where('patok', 'Sedang')->count();
            $tidakAda = Tanah::where('patok', 'Tidak Ada')->count();
            $baik = Tanah::where('patok', 'Baik')->count();

            $percentageData = [
                'Rusak' => ($rusak / $totalData) * 100,
                'Sedang' => ($sedang / $totalData) * 100,
                'Tidak Ada' => ($tidakAda / $totalData) * 100,
                'Baik' => ($baik / $totalData) * 100,
            ];

            return response()->json($percentageData);
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
            $res = Tanah::create($request->all());
            return response()->json($res);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Tanah $tanah, $id)
    {
        try {
            $res = $tanah->findOrFail($id);
            return response()->json($res);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tanah $tanah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tanah $tanah, $id)
    {
        try {
            $res = $tanah->findOrFail($id)->update($request->all());
            return response()->json($res);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tanah $tanah, $id)
    {
        try {
            $res = $tanah->findOrFail($id)->delete();
            return response()->json($res);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
