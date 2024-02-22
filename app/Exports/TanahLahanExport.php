<?php

namespace App\Exports;

use App\Models\Tanah;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;

class TanahLahanExport implements FromCollection, WithHeadings, WithEvents
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $records = Tanah::all();
        $data = [];
        $rowNumber = 1;

        foreach ($records as $item) {
            $data[] = [
                'NO' => $rowNumber++,
                'KECAMATAN' => $item->kecamatan,
                'KELURAHAN' => $item->kelurahan,
                'NOMOR' => $item->nomor,
                'NOMOR REGISTRASI' => $item->noreg,
                'STATUS' => $item->status,
                'TAHUN SERTIFIKAT' => $item->tahun_sertifikat,
                'KODE' => $item->kode,
                'PAPAN NAMA' => $item->papan_nama,
                'PENGGUNAAN' => $item->penggunaan,
                'RENCANA POLA' => $item->rencana_pola,
                'ALAMAT' => $item->alamat,
                'LUAS' => $item->luas,
                'PEMEGANG HAK' => $item->pemegang_hak,
                'PENGGUNAAN BARANG' => $item->pengguna_barang,
                'LAHAN TERBANGUN' => $item->lahan_terbangun,
                'PATOK' => $item->patok,
                'ZONA NILAI' => $item->zona_nilai,
                'KODE KECAMATAN' => $item->kode_kec,
                'KODE KELURAHAN' => $item->kode_kel
            ];
        }
        return collect($data);
    }
    public function headings(): array
    {
        return [
            'NO',
            'KECAMATAN',
            'KELURAHAN',
            'NOMOR',
            'NOMOR REGISTRASI',
            'STATUS',
            'TAHUN SERTIFIKAT',
            'KODE',
            'PAPAN NAMA',
            'PENGGUNAAN',
            'RENCANA POLA',
            'ALAMAT',
            'LUAS',
            'PEMEGANG HAK',
            'PENGGUNAAN BARANG',
            'LAHAN TERBANGUN',
            'PATOK',
            'ZONA NILAI',
            'KODE KECAMATAN',
            'KODE KELURAHAN'
        ];
    }
    public function registerEvents(): array{
        return[
            AfterSheet::class => function(AfterSheet $event){
                $styleArray = [
                    'font' => [
                        'bold' => true,
                    ],
                ];
                $event->getDelegate()->getStyle('A1:'.$event->getDelegate()->getHighestColumn().'1')->applyFromArray($styleArray);

                $event->getDelegate()->getColumnDimension('A')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('B')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('C')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('D')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('E')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('F')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('G')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('H')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('I')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('J')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('K')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('L')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('M')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('N')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('O')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('P')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('Q')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('R')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('S')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('T')->setAutoSize(true);
            }
        ];
    }
}
