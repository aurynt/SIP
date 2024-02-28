<?php

namespace App\Imports;

use App\Models\Tanah;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Row;

class TanahLahanImport implements ToModel
{
    public function model(array $row){
        if ($row[0] == 'NO') {
            return null;
        }
        return new Tanah([
                'no' => $row[0],
                'kecamatan' => $row[1],
                'kelurahan' => $row[2],
                'nomor' => $row[3],
                'noreg' => $row[4],
                'status' => $row[5],
                'tahun_sertifikat' => $row[6],
                'kode' => $row[7],
                'papan_nama' => $row[8],
                'penggunaan' => $row[9],
                'rencana_pola' => $row[10],
                'alamat' => $row[11],
                'luas' => $row[12],
                'pemegang_hak' => $row[13],
                'pengguna_barang' => $row[14],
                'lahan_terbangun' => $row[15],
                'patok' => $row[16],
                'zona_nilai' => $row[17],
                'kode_kec' => $row[18],
                'kode_kel' => $row[19]
        ]);
    }
}
