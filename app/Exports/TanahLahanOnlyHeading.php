<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;

class TanahLahanOnlyHeading implements WithHeadings, WithEvents
{
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

                $event->getDelegate()->getColumnDimension('A')->setWidth('5');
                $event->getDelegate()->getColumnDimension('B')->setWidth('20');
                $event->getDelegate()->getColumnDimension('C')->setWidth('20');
                $event->getDelegate()->getColumnDimension('D')->setWidth('10');
                $event->getDelegate()->getColumnDimension('E')->setWidth('30');
                $event->getDelegate()->getColumnDimension('F')->setWidth('20');
                $event->getDelegate()->getColumnDimension('G')->setWidth('20');
                $event->getDelegate()->getColumnDimension('H')->setWidth('10');
                $event->getDelegate()->getColumnDimension('I')->setWidth('15');
                $event->getDelegate()->getColumnDimension('J')->setWidth('30');
                $event->getDelegate()->getColumnDimension('K')->setWidth('25');
                $event->getDelegate()->getColumnDimension('L')->setWidth('20');
                $event->getDelegate()->getColumnDimension('M')->setWidth('8');
                $event->getDelegate()->getColumnDimension('N')->setWidth('15');
                $event->getDelegate()->getColumnDimension('O')->setWidth('25');
                $event->getDelegate()->getColumnDimension('P')->setWidth('20');
                $event->getDelegate()->getColumnDimension('Q')->setWidth('10');
                $event->getDelegate()->getColumnDimension('R')->setWidth('15');
                $event->getDelegate()->getColumnDimension('S')->setWidth('20');
                $event->getDelegate()->getColumnDimension('T')->setWidth('20');
            }
        ];
    }
}
