<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;

class RuasJalanOnlyHeading implements WithHeadings, WithEvents
{
    public function headings(): array
    {
        return [
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

                $event->getDelegate()->getColumnDimension('A')->setWidth('5');
                $event->getDelegate()->getColumnDimension('B')->setWidth('30');
                $event->getDelegate()->getColumnDimension('C')->setWidth('20');
                $event->getDelegate()->getColumnDimension('D')->setWidth('20');
                $event->getDelegate()->getColumnDimension('E')->setWidth('20');
                $event->getDelegate()->getColumnDimension('F')->setWidth('20');
                $event->getDelegate()->getColumnDimension('G')->setWidth('10');
                $event->getDelegate()->getColumnDimension('H')->setWidth('10');
                $event->getDelegate()->getColumnDimension('I')->setWidth('20');
                $event->getDelegate()->getColumnDimension('J')->setWidth('20');
                $event->getDelegate()->getColumnDimension('K')->setWidth('15');
                $event->getDelegate()->getColumnDimension('L')->setWidth('30');
                $event->getDelegate()->getColumnDimension('M')->setWidth('15');
                $event->getDelegate()->getColumnDimension('N')->setWidth('15');
                $event->getDelegate()->getColumnDimension('O')->setWidth('15');
                $event->getDelegate()->getColumnDimension('P')->setWidth('20');
                $event->getDelegate()->getColumnDimension('Q')->setWidth('10');
                $event->getDelegate()->getColumnDimension('R')->setWidth('15');
                $event->getDelegate()->getColumnDimension('S')->setWidth('15');
                $event->getDelegate()->getColumnDimension('T')->setWidth('15');
                $event->getDelegate()->getColumnDimension('U')->setWidth('15');
                $event->getDelegate()->getColumnDimension('V')->setWidth('15');
                $event->getDelegate()->getColumnDimension('W')->setWidth('20');
                $event->getDelegate()->getColumnDimension('X')->setWidth('20');
                $event->getDelegate()->getColumnDimension('Y')->setWidth('20');
                $event->getDelegate()->getColumnDimension('Z')->setWidth('15');
                $event->getDelegate()->getColumnDimension('AA')->setWidth('10');
                $event->getDelegate()->getColumnDimension('AB')->setWidth('10');
                $event->getDelegate()->getColumnDimension('AC')->setWidth('10');
                $event->getDelegate()->getColumnDimension('AD')->setWidth('15');
                $event->getDelegate()->getColumnDimension('AE')->setWidth('10');
                $event->getDelegate()->getColumnDimension('AF')->setWidth('10');
            }
        ];
    }
}
