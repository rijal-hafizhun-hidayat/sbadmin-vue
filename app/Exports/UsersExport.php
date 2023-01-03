<?php

namespace App\Exports;

use App\Http\Controllers\Akun\AkunController;
use App\Models\Akun;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Style;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithBackgroundColor;
use Maatwebsite\Excel\Concerns\FromView;


class UsersExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{

    public function collection()
    {
        return Akun::select('name', 'username', 'created_at', 'updated_at')->get();
    }

    public function headings(): array
    {
        return [
            'Name',
            'Username',
            'Di buat',
            'Terakhir di ubah'
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function (AfterSheet $event) {
                $styleArray = [
                    'font' => [
                        'bold' => true,
                        'size' => 15
                    ],
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        ],
                    ],
                    'fill' => [
                        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                        'startColor' => [
                            'argb' => 'EFFF00',
                        ],
                    ],
                ];

                //$cellRange = 'A1:D1'; // All headers
                $event->sheet->getDelegate()->getStyle('A1:D1')->applyFromArray($styleArray);
                // ->getFill()
                // ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                // ->getStartColor()
                // ->setARGB('EFFF00');
                // ->getFont()
                // ->setSize(14)
                // ->setBold(true);
            },
        ];
    }

    // public function backgroundColor()
    // {
    //     // Return RGB color code.
    //     return 'EFFF00';
    // }
}
