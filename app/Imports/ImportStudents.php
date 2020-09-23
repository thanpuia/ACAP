<?php

namespace App\Imports;

use App\Student;
use App\Acquire;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');

class ImportStudents implements ToCollection, WithHeadingRow
{
    
    protected $mbatch_title=null;

    public function __construct($batch_title)
    {
        
        $this->mbatch_title = $batch_title;
    }

    
    public function collection(Collection $rows)
    {
        //dd($rows);
        foreach ($rows as $row) 
        {
           dd($row);
            $student = Student::create([
                'name'                      => $row['Name'],
                'contact'                   => $row['Contact'],
                'fathers_mothers_name'      => $row["Father's/Mother's Name"],
                'fathers_mothers_contact'   => $row["Father's/Mother's Contact"],
                'sex'                       => $row['Sex'],
                'permanent_home_address'    => $row['Permanent Address'],
                'detailed_present_address_aizawl'=> $row['Present Address'],
                'name_of_guardian'          => $row['Guardian Name'],
                'address_of_guardian'       => $row['Guardian Address'],
                'contact_of_guardian'       => $row['Guardian Contact'],
                'dob'                       => $row['DOB'],
                'community'                 => $row['Community'],
                'identification_mark'       => $row['ID mark'],
                'religion'                  => $row['Religion'],
                'ration_card'               => $row['Ration Card'],
                'handicapped'               => $row['Handicapped'],

                'urban_rural'               => $row['Area'],
                'aadhaar'                   => $row['Aadhaar'],
                'mzu_registration'          => $row['MZU Reg'],
                'college_registration'      => $row['College Reg No'],

                'stream'                    => $row['Stream'],
                'semester'                  => $row['Current Semester'],
                'email'                     => $row['email'],

                'status'                    => $row['status'],
                'status_details'            => $row['status details'],
                'batch_title'               => $this->mbatch_title,
                'batch_upload_time'         => Carbon::now(),
                // 'name'                      => $row[0],
                // 'contact'                   => $row[1],
                // 'fathers_mothers_name'      => $row[2],
                // 'fathers_mothers_contact'   => $row[3],
                // 'sex'                       => $row[4],
                // 'permanent_home_address'    => $row[5],
                // 'detailed_present_address_aizawl'=> $row[6],
                // 'name_of_guardian'          => $row[7],
                // 'address_of_guardian'       => $row[8],
                // 'contact_of_guardian'       => $row[9],
                // 'dob'                       => $row[10],
                // 'community'                 => $row[11],
                // 'identification_mark'       => $row[12],
                // 'religion'                  => $row[13],
                // 'ration_card'               => $row[14],
                // 'handicapped'               => $row[15],

                // 'urban_rural'               => $row[16],
                // 'aadhaar'                   => $row[17],
                // 'mzu_registration'          => $row[18],
                // 'college_registration'      => $row[19],

                // 'stream'                    => $row[20],
                // 'semester'                  => $row[21],
                // 'email'                     => $row[22],

                // 'status'                    => $row[23],
                // 'status_details'            => $row[24],
                // 'batch_title'               => $this->mbatch_title,
                //  'batch_upload_time'         => Carbon::now(),

                
            ]);

                //      dd($student->id);

            Acquire::create([
                'student_id' => $student->id,
                // 'core' => $row[25],
                // 'sem1_sub1' => $row[26],
                // 'sem1_sub2' => $row[27],
                // 'sem1_sub3' => $row[28],
                // 'sem2_sub1' => $row[29],
                // 'sem2_sub2' => $row[30],
                // 'sem2_sub3' => $row[31], 
                // 'sem3_sub1' => $row[32],
                // 'sem3_sub2' => $row[33],
                // 'sem3_sub3' => $row[34],
                // 'sem4_sub1' => $row[35],
                // 'sem4_sub2' => $row[36],
                // 'sem4_sub3' => $row[37],
                // 'sem5_sub1' => $row[38],
                // 'sem5_sub2' => $row[39],
                // 'sem5_sub3' => $row[40],
                // 'sem6_sub1' => $row[41],
                // 'sem6_sub2' => $row[42],
                // 'sem6_sub3' => $row[43],
                'core'      => $row['core'],
                'sem1_sub1' => $row['sem1 sub1'],
                'sem1_sub2' => $row['sem1 sub2'],
                'sem1_sub3' => $row['sem1 comp'],
                'sem2_sub1' => $row['sem2 sub1'],
                'sem2_sub2' => $row['sem2 sub2'],
                'sem2_sub3' => $row['sem2 comp'], 
                'sem3_sub1' => $row['sem3 sub1'],
                'sem3_sub2' => $row['sem3 sub2'],
                'sem3_sub3' => $row['sem3 comp'],
                'sem4_sub1' => $row['sem4 sub1'],
                'sem4_sub2' => $row['sem4 sub2'],
                'sem4_sub3' => $row['sem4 comp'],
                'sem5_sub1' => $row['sem5 sub1'],
                'sem5_sub2' => $row['sem5 sub2'],
                'sem5_sub3' => $row['sem5 comp'],
                'sem6_sub1' => $row['sem6 sub1'],
                'sem6_sub2' => $row['sem6 sub2'],
                'sem6_sub3' => $row['sem6 comp'],
            ]);
        }
    }

    // public function batchSize(): int
    // {
    //     return 1000;
    // }
  
  
}
