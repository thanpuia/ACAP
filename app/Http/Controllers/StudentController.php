<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Course;
use App\Acquire;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    
    public function index()
    {
      $students = Student::all();
      $subjects = Course::all();

      return view('student.index',compact('students','subjects'));
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
 
         $acquire->save();


        // $student->semester_four_subject_one = $request['sem4_sub1'];
        // $student->semester_four_subject_two = $request['sem4_sub2'];
        // $student->semester_four_subject_three = $request['sem4_sub3'];
        // $student->semester_four_subject_four = $request['sem4_sub4'];
        // $student->semester_four_subject_five = $request['sem4_sub5'];
        // $student->semester_four_subject_six = $request['sem4_sub6'];

        // //YEAR 3
        // $student->semester_five_subject_one = $request['sem5_sub1'];
        // $student->semester_five_subject_two = $request['sem5_sub2'];
        // $student->semester_five_subject_three = $request['sem5_sub3'];
        // $student->semester_five_subject_four = $request['sem5_sub4'];
        // $student->semester_five_subject_five = $request['sem5_sub5'];
        // $student->semester_five_subject_six = $request['sem5_sub6'];

        // $student->semester_six_subject_one = $request['sem6_sub1'];
        // $student->semester_six_subject_two = $request['sem6_sub2'];
        // $student->semester_six_subject_three = $request['sem6_sub3'];
        // $student->semester_six_subject_four = $request['sem6_sub4'];
        // $student->semester_six_subject_five = $request['sem6_sub5'];
        // $student->semester_six_subject_six = $request['sem6_sub6'];

       
        
        //return redirect()->route('student', [$student->id]);      
        return "Create success";
    }

    public function show($id)
    {
       // dd("sdf00");
         $student = Student::find($id);
       //  $courseTaken = CourseTaken ::where ('student_id','=',$id)->get();
       // dd($student->acquire->sem1_sub1);
                     
        return view ('student.show', compact('student'));
        
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
        //$acquire->save(); 
        
        //  $student->save();

        // $student->semester_four_subject_one = $request['sem4_sub1'];
        // $student->semester_four_subject_two = $request['sem4_sub2'];
        // $student->semester_four_subject_three = $request['sem4_sub3'];
        // $student->semester_four_subject_four = $request['sem4_sub4'];
        // $student->semester_four_subject_five = $request['sem4_sub5'];
        // $student->semester_four_subject_six = $request['sem4_sub6'];

        // //YEAR 3
        // $student->semester_five_subject_one = $request['sem5_sub1'];
        // $student->semester_five_subject_two = $request['sem5_sub2'];
        // $student->semester_five_subject_three = $request['sem5_sub3'];
        // $student->semester_five_subject_four = $request['sem5_sub4'];
        // $student->semester_five_subject_five = $request['sem5_sub5'];
        // $student->semester_five_subject_six = $request['sem5_sub6'];

        // $student->semester_six_subject_one = $request['sem6_sub1'];
        // $student->semester_six_subject_two = $request['sem6_sub2'];
        // $student->semester_six_subject_three = $request['sem6_sub3'];
        // $student->semester_six_subject_four = $request['sem6_sub4'];
        // $student->semester_six_subject_five = $request['sem6_sub5'];
        // $student->semester_six_subject_six = $request['sem6_sub6'];
        
    

       // return redirect()->route('student', [ $id]);   
       return "Update success";
    }

    public function destroy($id)
    {
        //
    }

    // public static function createOrUpdate(Student $student,Request $request){


    //     $student->registration_number_college = $request['registration_number_college'];
    //     $student->registration_number_university = $request['registration_number_university'];
    //     $student->address = $request['address'];
    //     $student->name = $request['name'];


    //     return $student;
    // }

    public function func(){
        return "fuke";
    }
    public function fun(){
        return "duke";
    }

    //QUERY LIST HO

    // 1. 	Mimal  Details/information kimchang enna 
    public function studentInfo(){
        return "student info";
        
    }
    
    // 2. Hming inang ho zawnna
    public function searchByName(Request $request){
        $name = $request['name'];
        $students = Student::where("name","like","%".$name."%")->get();
        return view('student.filter',compact('students'));
    }

    // 3. 4. 	Subject in ang ho zawng lakchhuahna && Core Subject inang ho zawng lakchuahna
    public function searchBySubject(Request $request){
        $subject = $request['subject'];
        $acquires = Acquire::
        where("sem1_sub1","like",$subject)
        ->orWhere("sem1_sub2","like",$subject)->orWhere("sem1_sub3","like",$subject)
        ->orWhere("sem2_sub1","like",$subject)->orWhere("sem2_sub2","like",$subject)->orWhere("sem2_sub3","like",$subject)
        ->orWhere("sem3_sub1","like",$subject)->orWhere("sem3_sub2","like",$subject)->orWhere("sem3_sub3","like",$subject)
        ->get();
       

        return view('student.filterinverse',compact('acquires','subject'));
    }

    // 5. 	Sakhua (Religion) inang ho zawnchhuahna, Semester WiseA 
    public function searchByReligion(Request $request){
        $religion = $request['religion'];

        $students = Student::where("religion","LIKE","%".$religion."%")->get();
        return view('student.filter',compact('students'));
        
    }
    // 6. Semester Wise Community inang ho zawng zawn chhuahna b (a zat leh an hming list)
    public function searchByCommunity(Request $request){
        $community = $request['community'];
        $students = Student::where("community","LIKE",$community)->get();

        return view('student.filter',compact('students'));
    }
    
    // 7. Semester Wise a zirlai awm zat te, Mipa leh Hmeichhia zat a hrang a enna.
    public function searchBySemester(Request $request){
        $semester = $request['semester'];
        $students = Student::where("semester","LIKE",$semester)->get();

        return view('student.filter',compact('students'));
    }

    // 8. Semester tin a Pass leh Fail enna. A pumpui leh Core wise/Paper Wise 
    public function searchByResult(){

        return "result";
    }

    // 9. Roll No. in dawtin- Hming, Pa Hming, Registration No., Aadhaar No. leh Community leh Subject lak thlan chhuah te hian Excel-ah a Export theih a ngem
    public function listAll(){

        return "list all";
    }

    // 10. Urban leh Rural zat semester Wise
    public function searchByArea(Request $request){
        $area = $request['area'];
       // dd($area);
        $students = Student::where("urban_rural","LIKE",$area)->get();

        return view('student.filter',compact('students'));
    }

    // 11. Disabled zat hriatna/list
    public function searchByDisabled(Request $request){
        $handicapped = $request['handicapped'];
        $students = Student::where("handicapped","LIKE",$handicapped)->get();

        return view('student.filter',compact('students'));
    }

    //1 - 11 hmang tang tai tawh lo

    public function searchBy(Request $request){
        $searchBy=$request['searchby'];
        $keyword=$request['keyword'];
        $student=null;

        if($searchBy=="name"){
           // $students = Student::where("name","like","%".$keyword."%")->get();
           $students = DB::table('students')
                ->join('acquires','students.id','=','acquires.student_id')
                ->select('students.*','acquires.*')
                ->where("name","like","%".$keyword."%")->get();
        }
        else if($searchBy=="collegeno"){
           // $students = Student::where("college_registration","like","%".$keyword."%")->get();
           $students = DB::table('students')
                ->join('acquires','students.id','=','acquires.student_id')
                ->select('students.*','acquires.*')
                ->where("college_registration","like","%".$keyword."%")->get();
        }
        else if($searchBy=="universityno"){
           // $students = Student::where("mzu_registration","like","%".$keyword."%")->get();
            $students = DB::table('students')
                ->join('acquires','students.id','=','acquires.student_id')
                ->select('students.*','acquires.*')
                ->where("mzu_registration","like","%".$keyword."%")->get();
        }
        else if($searchBy=="aadhaar"){
            //$students = Student::where("aadhaar","like","%".$keyword."%")->get();
            $students = DB::table('students')
                            ->join('acquires','students.id','=','acquires.student_id')
                            ->select('students.*','acquires.*')
                            ->where("aadhaar","like","%".$keyword."%")->get();
        }

        return view('student.filter',compact('students'));
    }

    public function filterBy(Request $request){
        
        $subject        = $request['subject'];
        $religion       = $request['religion'];
        $community      = $request['community'];
        $semester       = $request['semester'];
        $area           = $request['area'];
        $handicapped    = $request['handicapped'];

        $students = DB::table('students')
                        ->join('acquires','students.id','=','acquires.student_id') 
                        ->select('students.*','acquires.*')
                        ->where(function($q) use($subject,$religion,$community,$semester,$area,$handicapped){
            if($subject!="none"){
                $q->where("sem1_sub1","like",$subject)
                ->orWhere("sem1_sub2","like",$subject)->orWhere("sem1_sub3","like",$subject)
                ->orWhere("sem2_sub1","like",$subject)->orWhere("sem2_sub2","like",$subject)->orWhere("sem2_sub3","like",$subject)
                ->orWhere("sem3_sub1","like",$subject)->orWhere("sem3_sub2","like",$subject)->orWhere("sem3_sub3","like",$subject);
            
            }
            if($religion!="none"){
                $q->where("students.religion",'LIKE',$religion);
            }
            if($community!="none"){
                $q->where("students.community",'LIKE',$community);

            }
            if($semester!="none"){
                $q->where("students.semester",'LIKE',$semester);
            }
            if($area!="none"){
                $q->where("students.area",'LIKE',$area);
            }
            if($handicapped!="none"){
                $q->where("students.handicapped",'LIKE',$handicapped);
            }
        })->get();
       // dd($students);

        return view('student.filter',compact('students'));
    }
}
