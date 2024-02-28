<?php

namespace App\Imports;

use App\Models\Jalan;
use Maatwebsite\Excel\Concerns\ToModel;

class RuasJalanImport implements ToModel
{
    public function model(array $row){
        if ($row[0] == 'NO') {
            return null;
        }
        return new Jalan([
                'no' => $row[0],
                'nama_ruas' => $row[1],
                'kecamatan' => $row[2],
                'kel' => $row[3],
                'kode_kec' => $row[4],
                'kode_kel' => $row[5],
                'panjang' => $row[6],
                'lebar' => $row[7],
                'luas_sertifikat' => $row[8],
                'luas_peta' => $row[9],
                'status' => $row[10],
                'fungsi' => $row[11],
                'tipe_hak' => $row[12],
                'tipe_produk' => $row[13],
                'tipe_jalan' => $row[14],
                'hp' => $row[15],
                'nib' => $row[16],
                'kode_patok' => $row[17],
                'ruas_awal' => $row[18],
                'ruas_akhir' => $row[19],
                'km_awal' => $row[20],
                'km_akhir' => $row[21],
                'kondisi_ringan' => $row[22],
                'kondisi_sedang' => $row[23],
                'kondisi_rusak' => $row[24],
                'lhrt' => $row[25],
                'vcr' => $row[26],
                'mst' => $row[27],
                'tanah' => $row[28],
                'macadam' => $row[29],
                'aspal' => $row[30],
                'tahun' => $row[31]
        ]);
    }
}
