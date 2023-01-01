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
                $cellRange = 'A1:W1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14)->setBold(true);
            },
        ];
    }

    // public function view(): View
    // {
    //     return view('Prints/Akun', [
    //         'akuns' => Akun::select('name', 'username', 'created_at', 'updated_at')->get(),
    //     ]);
    // }
}
