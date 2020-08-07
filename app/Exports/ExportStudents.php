<?php

namespace App\Exports;

use App\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class ExportStudents implements FromQuery
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Student::all();
    // }
    
    use Exportable;
    public function __construct(Student $request)
    {
        $this->request = $request;
    }

    public function query()
    {
        return $request;
    }
}
