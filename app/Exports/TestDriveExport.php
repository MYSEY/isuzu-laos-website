<?php
namespace App\Exports;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class TestDriveExport implements FromCollection, WithHeadings, WithStyles, WithColumnWidths
{
    protected $carTester;

    public function __construct(Collection $carTester)
    {
        $this->carTester = $carTester;
    }

    public function collection()
    {
        return $this->carTester;
//        return collect([
//            [
//                'name' => 'Povilas',
//                'surname' => 'Korop',
//                'email' => 'povilas@laraveldaily.com',
//                'twitter' => '@povilaskorop'
//            ],
//            [
//                'name' => 'Taylor',
//                'surname' => 'Otwell',
//                'email' => 'taylor@laravel.com',
//                'twitter' => '@taylorotwell'
//            ]
//        ]);
    }

    public function headings(): array
    {
        return [
            'Name',
            'Surname',
            'Tel',
            'Email',
            'Cars',
            'Showrooms'
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $lastRowCount = $sheet->getHighestRow();
        $sheet->getStyle('E1:E' . $lastRowCount)->getAlignment()->setWrapText(true);
        $sheet->getStyle('F1:F' . $lastRowCount)->getAlignment()->setWrapText(true);

//        $sheet->getCell('1')->

        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],

            // Styling a specific cell by coordinate.
            'B2' => ['font' => ['italic' => true]],

            // Styling an entire column.
            'C'  => ['font' => ['size' => 16]],
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 20,
            'B' => 20,
            'C' => 20,
            'D' => 30,
            'E' => 40,
            'F' => 40,
        ];
    }
}
