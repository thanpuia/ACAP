<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Course;
use App\Acquire;
use App\Exports\ExportStudents;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use PDF;

class StudentController extends Controller
{


    public function export() 
    {
    
        $name = "students".time().".xlsx";
        $headers = ['Content-Type: application/xlsx'];
        return Storage::download('tempStudents.xlsx', $name, $headers);
         
    }
    public function index()
    {
      $students = Student::all();
      $subjects = Course::all();
     

      return redirect('student/dashboard');
     // return view('student.index',compact('students','subjects'));
    }

    public function create()
    {
        $subjects = Course::all();
     //   dd($subjects);
        return view ('student.create', compact('subjects') );
    }

    public function store(Request $request)
    {
        $student = new Student();
       // $student = createOrUpdate($student, $request);
        $student->name = $request['name'];
        $student->contact = $request['contact'];
        $student->fathers_mothers_name = $request['fathers_mothers_name'];
        $student->fathers_mothers_contact = $request['fathers_mothers_contact'];
        $student->sex = $request['sex'];
        $student->permanent_home_address = $request['permanent_home_address'];
        $student->detailed_present_address_aizawl = $request['detailed_present_address_aizawl'];
        $student->name_of_guardian = $request['name_of_guardian'];
        $student->address_of_guardian = $request['address_of_guardian'];
        $student->contact_of_guardian = $request['contact_of_guardian'];
        $student->dob = $request['dob'];
        $student->community = $request['community'];
        $student->identification_mark = $request['identification_mark'];
        $student->religion = $request['religion'];
        $student->ration_card = $request['ration_card'];
        $student->handicapped = $request['handicapped'];
        $student->urban_rural = $request['urban_rural'];
        $student->aadhaar = $request['aadhaar'];
        $student->mzu_registration = $request['mzu_registration'];
        $student->college_registration = $request['college_registration'];
        $student->result = $request['result'];
        $student->save();  


       $acquire = new Acquire();
        $acquire->student_id = $student->id;

        //  //YEAR 1
         $acquire->sem1_sub1 = $request['sem1_sub1'];
         $acquire->sem1_sub2 = $request['sem1_sub2'];
         $acquire->sem1_sub3 = $request['sem1_sub3'];
         
         $acquire->sem2_sub1 = $request['sem2_sub1'];
         $acquire->sem2_sub2 = $request['sem2_sub2'];
         $acquire->sem2_sub3 = $request['sem2_sub3'];
         //YEAR 2
         $acquire->sem3_sub1 = $request['sem3_sub1'];
         $acquire->sem3_sub2 = $request['sem3_sub2'];
         $acquire->sem3_sub3 = $request['sem3_sub3'];
         
         $acquire->sem4_sub1 = $request['sem4_sub1'];
         $acquire->sem4_sub2 = $request['sem4_sub2'];
         $acquire->sem4_sub3 = $request['sem4_sub3'];
 
         //YEAR 3
         $acquire->sem5_sub1 = $request['sem5_sub1'];
         $acquire->sem5_sub2 = $request['sem5_sub2'];
         $acquire->sem5_sub3 = $request['sem5_sub3'];
         
         $acquire->sem6_sub1 = $request['sem6_sub1'];
         $acquire->sem6_sub2 = $request['sem6_sub2'];
         $acquire->sem6_sub3 = $request['sem6_sub3'];
        // $semester = $request['semester'];
        
        // $subject1 = 'sem'.$semester.'_sub1';
        // $subject2 = 'sem'.$semester.'_sub2';
        // $subject3 = 'sem'.$semester.'_sub3';
        // $acquire->$subject1 = $request['elective1'];
        // $acquire->$subject2 = $request['elective2'];
        // $acquire->$subject3 = $request['elective3'];
        
       
         $acquire->save();

         return "Create success";
    }

    public function show($id)
    {
       // dd("sdf00");
         $student = Student::withTrashed()->find($id);
         $subjects = Course::all();

       //  $courseTaken = CourseTaken ::where ('student_id','=',$id)->get();
       // dd($student->acquire->sem1_sub1);
                     
        return view ('student.show', compact('student','subjects'));
        
    }

    public function edit($id)
    {
        $student = Student::find($id);
       // $courseTaken = CourseTaken ::where ('student_id','=',$id)->get();
        $subjects = Course::all();

        return view('student.edit',compact('student','subjects'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $subjects = Course::all();

      //  $student = $this->createOrUpdate($student, $request);
        $student->name = $request['name'];
        $student->contact = $request['contact'];
        $student->fathers_mothers_name = $request['fathers_mothers_name'];
        $student->fathers_mothers_contact = $request['fathers_mothers_contact'];
        $student->sex = $request['sex'];
        $student->permanent_home_address = $request['permanent_home_address'];
        $student->detailed_present_address_aizawl = $request['detailed_present_address_aizawl'];
        $student->name_of_guardian = $request['name_of_guardian'];
        $student->address_of_guardian = $request['address_of_guardian'];
        $student->contact_of_guardian = $request['contact_of_guardian'];
        $student->dob = $request['dob'];
        $student->community = $request['community'];
        $student->identification_mark = $request['identification_mark'];
        $student->religion = $request['religion'];
        $student->ration_card = $request['ration_card'];
        $student->handicapped = $request['handicapped'];
        $student->urban_rural = $request['urban_rural'];
        $student->aadhaar = $request['aadhaar'];
        $student->mzu_registration = $request['mzu_registration'];
        $student->college_registration = $request['college_registration'];
        $student->result = $request['result'];
        
        $student->save();

        $acquire = $student->acquire;

        //dd($acquire);
        //$acquire->student_id = $id;
        //YEAR 1
        $acquire->sem1_sub1 = $request['sem1_sub1'];
        $acquire->sem1_sub2 = $request['sem1_sub2'];
        $acquire->sem1_sub3 = $request['sem1_sub3'];

        $acquire->sem2_sub1 = $request['sem2_sub1'];
        $acquire->sem2_sub2 = $request['sem2_sub2'];
        $acquire->sem2_sub3 = $request['sem2_sub3'];

         //YEAR 2
        $acquire->sem3_sub1 = $request['sem3_sub1'];
        $acquire->sem3_sub2 = $request['sem3_sub2'];
        $acquire->sem3_sub3 = $request['sem3_sub3'];

        $acquire->sem4_sub1 = $request['sem4_sub1'];
        $acquire->sem4_sub2 = $request['sem4_sub2'];
        $acquire->sem4_sub3 = $request['sem4_sub3'];

        //YEAR 3
        $acquire->sem5_sub1 = $request['sem5_sub1'];
        $acquire->sem5_sub2 = $request['sem5_sub2'];
        $acquire->sem5_sub3 = $request['sem5_sub3'];

        $acquire->sem6_sub1 = $request['sem6_sub1'];
        $acquire->sem6_sub2 = $request['sem6_sub2'];
        $acquire->sem6_sub3 = $request['sem6_sub3'];

        //dd($acquire);
        $acquire->update();
    
       return "Update success";
    }

    public function destroy($id)
    {
        Student::withTrashed()->find($id)->delete();
        return redirect('student/listall')->withSuccess(trans('app.success_destroy')); 
    }

    public function listAll(){
        $students = Student::paginate(20);
        $studentsExcel = Student::all();

        $subjects = Course::all();

        $studentsArr = $studentsExcel->toArray();
  
        Excel::store(new ExportStudents($studentsArr), 'tempStudents.xlsx');

       
        return view('student.filter',compact('students','subjects'));
    }

    //1 - 11 hmang tang tai tawh 
    public function searchBy(Request $request){
        $searchBy=$request['searchby'];
        $keyword=$request['keyword'];
  
        //SEARCHBY name collegeno universityno aadhaar
        
        //FOR VIEW
        if($searchBy=="name"){
           // $students = Student::where("name","like","%".$keyword."%")->get();
           $students = DB::table('students')
                ->join('acquires','students.id','=','acquires.student_id')
                ->select('students.*','acquires.*')
                ->where("name","like","%".$keyword."%")->paginate(7);
        }
        else if($searchBy=="collegeno"){
           // $students = Student::where("college_registration","like","%".$keyword."%")->get();
           $students = DB::table('students')
                ->join('acquires','students.id','=','acquires.student_id')
                ->select('students.*','acquires.*')
                ->where("college_registration","like","%".$keyword."%")->paginate(7);
        }
        else if($searchBy=="universityno"){
           // $students = Student::where("mzu_registration","like","%".$keyword."%")->get();
            $students = DB::table('students')
                ->join('acquires','students.id','=','acquires.student_id')
                ->select('students.*','acquires.*')
                ->where("mzu_registration","like","%".$keyword."%")->paginate(7);
        }
        else if($searchBy=="aadhaar"){
            //$students = Student::where("aadhaar","like","%".$keyword."%")->get();
            $students = DB::table('students')
                            ->join('acquires','students.id','=','acquires.student_id')
                            ->select('students.*','acquires.*')
                            ->where("aadhaar","like","%".$keyword."%")->paginate(20);
        }

         //FOR EXCELL
         if($searchBy=="name"){
            // $students = Student::where("name","like","%".$keyword."%")->get();
            $studentsExcel = DB::table('students')
                 ->join('acquires','students.id','=','acquires.student_id')
                 ->select('students.*','acquires.*')
                 ->where("name","like","%".$keyword."%")->get();
         }
         else if($searchBy=="collegeno"){
            // $students = Student::where("college_registration","like","%".$keyword."%")->get();
            $studentsExcel = DB::table('students')
                 ->join('acquires','students.id','=','acquires.student_id')
                 ->select('students.*','acquires.*')
                 ->where("college_registration","like","%".$keyword."%")->get();
         }
         else if($studentsExcel=="universityno"){
            // $students = Student::where("mzu_registration","like","%".$keyword."%")->get();
             $students = DB::table('students')
                 ->join('acquires','students.id','=','acquires.student_id')
                 ->select('students.*','acquires.*')
                 ->where("mzu_registration","like","%".$keyword."%")->get();
         }
         else if($studentsExcel=="aadhaar"){
             //$students = Student::where("aadhaar","like","%".$keyword."%")->get();
             $students = DB::table('students')
                             ->join('acquires','students.id','=','acquires.student_id')
                             ->select('students.*','acquires.*')
                             ->where("aadhaar","like","%".$keyword."%")->get();
         }
         $studentsArr = $studentsExcel->toArray();
  
         Excel::store(new ExportStudents($studentsArr), 'tempStudents.xlsx');

        $subjects = Course::all();

        return view('student.filter',compact('students','subjects'));
    }

    public function filterBy(Request $request){
        
        $subject        = $request['subject'];
        $religion       = $request['religion'];
        $community      = $request['community'];
        $semester       = $request['semester'];
        $urban_rural    = $request['urban_rural'];
        $handicapped    = $request['handicapped'];
 
        $students = DB::table('students')
                        ->join('acquires','students.id','=','acquires.student_id') 
                        ->select('students.*','acquires.*')
                        ->where(function($q) use($subject,$religion,$community,$semester,$urban_rural,$handicapped){
        
            if($subject!="none"){
                $q->where("sem1_sub1","like",$subject)
                ->orWhere("sem1_sub2","like",$subject)->orWhere("sem1_sub3","like",$subject)
                ->orWhere("sem2_sub1","like",$subject)->orWhere("sem2_sub2","like",$subject)->orWhere("sem2_sub3","like",$subject)
                ->orWhere("sem3_sub1","like",$subject)->orWhere("sem3_sub2","like",$subject)->orWhere("sem3_sub3","like",$subject);
            
            }
            if($religion!="none"){
                $q->where("students.religion","like",$religion);
            }
            if($community!="none"){
                $q->where("students.community","like",$community);

            }
            if($semester!="none"){
                $q->where("students.semester","like",$semester);
            }
            if($urban_rural!="none"){
                $q->where("students.urban_rural","like",$urban_rural);
            }
            if($handicapped!="none"){
                $q->where("students.handicapped","like",$handicapped);
            }
        })->paginate(20);
         
        
        $studentsExcel = DB::table('students')
        ->join('acquires','students.id','=','acquires.student_id') 
        ->select('students.*','acquires.*')
        ->where(function($q) use($subject,$religion,$community,$semester,$urban_rural,$handicapped){
            if($subject!="none"){
            $q->where("sem1_sub1","like",$subject)
            ->orWhere("sem1_sub2","like",$subject)->orWhere("sem1_sub3","like",$subject)
            ->orWhere("sem2_sub1","like",$subject)->orWhere("sem2_sub2","like",$subject)->orWhere("sem2_sub3","like",$subject)
            ->orWhere("sem3_sub1","like",$subject)->orWhere("sem3_sub2","like",$subject)->orWhere("sem3_sub3","like",$subject);

            }
            if($religion!="none"){
                $q->where("students.religion","like",$religion);
            }
            if($community!="none"){
                $q->where("students.community","like",$community);

            }
            if($semester!="none"){
                $q->where("students.semester","like",$semester);
            }
            if($urban_rural!="none"){
                $q->where("students.urban_rural","like",$urban_rural);
            }
            if($handicapped!="none"){
                $q->where("students.handicapped","like",$handicapped);
            }
            })->get();
       
        $studentsArr = $studentsExcel->toArray();
  
        Excel::store(new ExportStudents($studentsArr), 'tempStudents.xlsx');
    
        $subjects = Course::all();

        return view('student.filter',compact('students','subjects'));
    }

    public function studentStatus(Request $request){
        $status = $request['status'];
        $details = $request['remarks'];
        $student_id = $request['student_id'];

        $mStudent = Student::find($student_id);
        $subjects = Course::all();

        $mStudent->status = $status;
        $mStudent->status_details = $details;
        $mStudent->save();
        return redirect('student/'.$student_id);
    }

    public function dashboard(){

        $subjects = Course::all();
        //1.total student 2. boys 3.girls 4.semester wise 5.community wise 6.religionwise 7.urban_rural 8.handicapped 9.RationCard
        $studentCount = Student::count();
        $studentMale = Student::where('sex','like','male')->count();
        $studentFemale = Student::where('sex','like','female')->count();

        $semester1 = Student::where('semester','like','1')->count();
        $semester2 = Student::where('semester','like','2')->count();
        $semester3 = Student::where('semester','like','3')->count();
        $semester4 = Student::where('semester','like','4')->count();
        $semester5 = Student::where('semester','like','5')->count();
        $semester6 = Student::where('semester','like','6')->count();
        
        //COMUNITY
        $st = Student::where('community','like','st')->count();
        $sc = Student::where('community','like','sc')->count();
        $obc = Student::where('community','like','obc')->count();
        $gen = Student::where('community','like','gen')->count();

        //RELGION
        $christianity = Student::where('religion','like','christianity')->count();
        $hinduism = Student::where('religion','like','hinduism')->count();
        $islam = Student::where('religion','like','islam')->count();
        $sikhism = Student::where('religion','like','sikhism')->count();
        $buddhism = Student::where('religion','like','buddhism')->count();
        $jainism = Student::where('religion','like','jainism')->count();
        $zoroastrianism = Student::where('religion','like','zoroastrianism')->count();
        $others = Student::where('religion','like','others')->count();

        //AREA
        $urban = Student::where('urban_rural','like','urban')->count();
        $rural = Student::where('urban_rural','like','rural')->count();

        //HANDICAPPED
        $handicappedYes = Student::where('handicapped','like','yes')->count();
        $handicappedNo = Student::where('handicapped','like','no')->count();

        //RATIONCARD
        $bpl = Student::where('ration_card','like','bpl')->count();
        $aay = Student::where('ration_card','like','aay')->count();
        $apl = Student::where('ration_card','like','apl')->count();


        return view('student.dashboard',compact('subjects','studentCount','studentMale','studentFemale',
            'semester1','semester2','semester3','semester4','semester5','semester6',
            'st','sc','obc','gen',
            'christianity','others','zoroastrianism','jainism','buddhism','sikhism','islam','hinduism',
            'urban','rural','handicappedYes','handicappedNo','bpl','aay','apl'  ));
    }
// RESTORE STUFF START!
    public function restore($id){

        Student::withTrashed()->find($id)->restore();
        return redirect('student/listall')->withSuccess(trans('Successfully Restore')); 
    }

    public function listTrash(){

        $restores = Student::onlyTrashed()->get();
        $subjects = Course::all();
        return view('student.restore',compact('restores','subjects'));
    }
    
//RESTORE STUFF END!

//PDF DOWNLOAD FOR SINGLE STUDENT
public function downloadPDF($id) {
    $student = Student::find($id);
    $pdf = PDF::loadView('student.pdfstudent', compact('student'));
    //return $pdf->stream("filename.pdf", array("Attachment" => false));
    return $pdf->download('myStudent.pdf');
}
}
