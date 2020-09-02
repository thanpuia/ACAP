<?php

namespace App\Imports;

use App\Student;
use App\Acquire;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ImportStudents implements ToCollection
{

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            $student = Student::create([
                'name'                      => $row[0],
                'contact'                   => $row[1],
                'fathers_mothers_name'      => $row[2],
                'fathers_mothers_contact'   => $row[3],
                'sex'                       => $row[4],
                'permanent_home_address'    => $row[5],
                'detailed_present_address_aizawl'=> $row[6],
                'name_of_guardian'          => $row[7],
                'address_of_guardian'       => $row[8],
                'contact_of_guardian'       => $row[9],
                'dob'                       => $row[10],
                'community'                 => $row[11],
                'identification_mark'       => $row[12],
                'religion'                  => $row[13],
                'ration_card'               => $row[14],
                'handicapped'               => $row[15],

                'urban_rural'               => $row[16],
                'aadhaar'                   => $row[17],
                'mzu_registration'          => $row[18],
                'college_registration'      => $row[19],
                'result'                    => $row[20],

                'stream'                    => $row[21],
                'semester'                  => $row[22],
            ]);

            Acquire::create([
                'student_id' => $student->id,
                'core' => $row[23],
                'sem1_sub1' => $row[24],
                'sem1_sub2' => $row[25],
                'sem1_sub3' => $row[26],
                'sem2_sub1' => $row[27],
                'sem2_sub2' => $row[28],
                'sem2_sub3' => $row[29], 
                'sem3_sub1' => $row[30],
                'sem3_sub2' => $row[31],
                'sem3_sub3' => $row[32],
                'sem4_sub1' => $row[33],
                'sem4_sub2' => $row[34],
                'sem4_sub3' => $row[35],
                'sem5_sub1' => $row[36],
                'sem5_sub2' => $row[37],
                'sem5_sub3' => $row[38],
                'sem6_sub1' => $row[39],
                'sem6_sub2' => $row[40],
                'sem6_sub3' => $row[41],
            ]);
        }
    }
  
    // public function model(array $row)
    // {
    //     return new Student([
           
    //             'name'                      => $row[0],
    //             'contact'                   => $row[1],
    //             'fathers_mothers_name'      => $row[2],
    //             'fathers_mothers_contact'   => $row[3],
    //             'sex'                       => $row[4],
    //             'permanent_home_address'    => $row[5],
    //             'detailed_present_address_aizawl'=> $row[6],
    //             'name_of_guardian'          => $row[7],
    //             'address_of_guardian'       => $row[8],
    //             'contact_of_guardian'       => $row[9],
    //             'dob'                       => $row[10],
    //             'community'                 => $row[11],
    //             'identification_mark'       => $row[12],
    //             'religion'                  => $row[13],
    //             'ration_card'               => $row[14],
    //             'handicapped'               => $row[15],

    //             'urban_rural'               => $row[16],
    //             'aadhaar'                   => $row[17],
    //             'mzu_registration'          => $row[18],
    //             'college_registration'      => $row[19],
    //             'result'                    => $row[20],

    //             'stream'                    => $row[21],
    //             'semester'                  => $row[22],

    //     ]);
    // }
}
