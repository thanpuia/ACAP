<?php

namespace App\Exports;

use App\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExportStudents implements FromView
{
    
    // public function collection()
    // {
    //     return Student::all();
    // }
    
    // use Exportable;
    // public function __construct(Student $request)
    // {
    //     $this->request = $request;
    // }

    // public function query()
    // {
    //     return $request;
    // }
    public function view(): View
    {
        return view('student.filter', [
            'students' => Student::all()
        ]);
    }
}
