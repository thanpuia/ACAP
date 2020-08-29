<?php

namespace App\Exports;

use App\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportStudents implements FromArray, WithHeadings
{
    
    // public function collection()
    // {
    //     return Student::all();
    // }
    
    protected $students;

    public function __construct(array $students)
    {
        $this->students = $students;
    }

    public function array(): array
    {
        return $this->students;
    }

    public function headings(): array

    {

        return [

            'Sl/No','Name','Contact','Father\'s/Mother\'s Name','Father\'s/Mother\'s Contact','Sex','Permanent Address','Present Address','Guardian Name','Guardian Address','Guardian Contact','DOB','Community','ID mark','Religion','Ration Card','Handicapped','Area','Aadhaar','MZU Reg No','College Reg No','','Stream','Current Semester','result'
        ];

    }
}

