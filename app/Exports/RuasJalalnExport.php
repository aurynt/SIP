<?php

namespace  App\Exports;

use App\Models\Jalan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;

class RuasJalalnExport implements FromCollection, WithHeadings, WithEvents
{
    public function collection(){
        $records = Jalan::all();
        $data = [];
        $rowNumber = 1;

        foreach ($records as $item) {
            $data [] = [
                'NO' => $rowNumber++,
                'NAMA RUAS' => $item->nama_ruas,
                'KECAMATAN' => $item->kecamatan,
                'KELURAHAN' => $item->kel,
                'KODE KECAMATAN' => $item->kode_kec,
                'KODE KELURAHAN' => $item->kode_kel,
                'PANJANG' => $item->panjang,
                'LEBAR' => $item->lebar,
                'LUAS SERTIFIKAT' => $item->luas_sertifikat,
                'LUAS PETA' => $item->luas_peta,
                'STATUS' => $item->status,
                'FUNGSI' => $item->fungsi,
                'TIPE HAK' => $item->tipe_hak,
                'TIPE PRODUK' => $item->tipe_produk,
                'TIPE JALAN' => $item->tipe_jalan,
                'HP' => $item->hp,
                'NIB' => $item->nib,
                'KODE PATOK' => $item->kode_patok,
                'RUAS AWAL' => $item->ruas_awal,
                'RUAS AKHIR' => $item->ruas_akhir,
                'KM AWAL' => $item->km_awal,
                'KM FEEDER' => $item->km_akhir,
                'KONDISI RINGAN' => $item->kondisi_ringan,
                'KONDISI SEDANG' => $item->kondisi_sedang,
                'KONDISI RUSAK' => $item->kondisi_rusak,
                'LHRT' => $item->lhrt,
                'VCR' => $item->vcr,
                'MST' => $item->mst,
                'TANAH' => $item->tanah,
                'MACADAM' => $item->macadam,
                'ASPAL' => $item->aspal,
                'TAHUN'=> $item->tahun
            ];
        }
        return collect($data);
    }
    public function headings(): array{
        return[
            'NO',
            'NAMA RUAS',
            'KECAMATAN',
            'KELURAHAN',
            'KODE KECAMATAN',
            'KODE KELURAHAN',
            'PANJANG',
            'LEBAR',
            'LUAS SERTIFIKAT',
            'LUAS PETA',
            'STATUS',
            'FUNGSI',
            'TIPE HAK',
            'TIPE PRODUK',
            'TIPE JALAN',
            'HP',
            'NIB',
            'KODE PATOK',
            'RUAS AWAL',
            'RUAS AKHIR',
            'KM AWAL',
            'KM FEEDER',
            'KONDISI RINGAN',
            'KONDISI SEDANG',
            'KONDISI RUSAK',
            'LHRT',
            'VCR',
            'MST',
            'TANAH',
            'MACADAM',
            'ASPAL',
            'TAHUN'
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
                $event->getDelegate()->getColumnDimension('U')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('V')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('W')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('X')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('Y')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('Z')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('AA')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('AB')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('AC')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('AD')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('AE')->setAutoSize(true);
                $event->getDelegate()->getColumnDimension('AF')->setAutoSize(true);
            }
        ];
    }
}
