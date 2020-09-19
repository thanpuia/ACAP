@extends('admin.default') 
@section('content')
<div class="card bg-white p-3 rounded">
	<div class="form m-40">
		<h3 class="card-title"><a href="/student/archive" style="color:grey;">New Admission</a></h3> {!! Form::open(['url' => '/student','method'=>'post']) !!}
		<div class="row">
			<div class="col">
				<div class="form-group">
					<label for="name">Name</label><span style="color:red;">*</span>
					<br>
					<input type="text" class="form-control" id="name" name="name" required> </div>
				<div class="form-group">
					<label for="contact">Contact</label>
					<br>
					<input type="text" class="form-control" id="contact" name="contact"> </div>
				<div class="form-group">
					<label for="fathers_mothers_name">Father's/Mother's Name</label>
					<br>
					<input type="text" class="form-control" id="fathers_mothers_name" name="fathers_mothers_name"> </div>
				<div class="form-group">
					<label for="fathers_mothers_contact">Father's/Mother's Contact</label>
					<br>
					<input type="text" class="form-control" id="fathers_mothers_contact" name="fathers_mothers_contact"> </div>
				<div class="mb-3">
					<label for="sex">Sex</label>
					<br>
					<!-- <select name="sex" class="form-control">
                  <option value="female">Female</option>
                  <option value="Male">Male</option>
                  </select> -->
					<div class='row ml-1 '>
						<div class='form-check'>
							<input type="radio" id="female" class="mr-1 form-check-input" name="sex" value="female">
							<label for="female" class="mr-5 form-check-label">Female</label>
						</div>
						<div class='form-check'>
							<input type="radio" id="male" class="mr-1 form-check-input" name="sex" value="male">
							<label for="male" class="mr-3 form-check-label">Male</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="identification_mark">Identification Mark</label>
					<br>
					<input type="text" class="form-control" id="identification_mark" name="identification_mark"> </div>
				<label for="detailed_present_address_aizawl">Detailed Present Address (Aizawl)</label>
				<br>
				<textarea rows="9" class="form-control" id="detailed_present_address_aizawl" name="detailed_present_address_aizawl"></textarea>
			</div>
			<!-- 2nd column -->
			<div class="col">
				<div class="form-group">
					<label for="permanent_home_address">Permanet Home Address</label>
					<br>
					<textarea rows="5" class="form-control" id="permanent_home_address" name="permanent_home_address"> </textarea>
				</div>
				<div class="form-group">
					<label for="name_of_guardian">Name of Local Guardian (If any)</label>
					<br>
					<input type="text" class="form-control" id="name_of_guardian" name="name_of_guardian"> </div>
				<div class="form-group">
					<label for="address_of_guardian">Address of Local Guardian (If any)</label>
					<br>
					<textarea rows="5" class="form-control" id="address_of_guardian" name="address_of_guardian"> </textarea>
				</div>
				<div class="form-group">
					<label for="contact_of_guardian">Guardian Contact (If any)</label>
					<br>
					<input type="text" class="form-control" id="contact_of_guardian" name="contact_of_guardian"> </div>
				<div class="form-group">
					<label for="dob">Date of Birth</label>
					<input type="date" class="form-control" id="dob" name="dob"> </div>
				<div class="form-group">
					<label for="aadhaar">Aadhaar</label>
					<br>
					<input type="text" class="form-control" id="aadhaar" name="aadhaar"> </div>
			</div>
			<!-- 3rd Column -->
			<div class="col">
				<div class="form-group">
					<label for="community">Community</label>
					<select name="community" class="form-control">
						<option value="st">ST</option>
						<option value="sc">SC</option>
						<option value="obc">OBC</option>
						<option value="gen">Gen</option>
					</select>
				</div>
				<div class="form-group">
					<label for="religion">Religion</label>
					<select name="religion" class="form-control">
						<option value="christianity">Christianity</option>
						<option value="hinduism">Hinduism</option>
						<option value="islam">Islam</option>
						<option value="sikhism">Sikhism</option>
						<option value="buddhism">Buddhism</option>
						<option value="jainism">Jainism</option>
						<option value="zoroastrianism">Zoroastrianism</option>
						<option value="others">Others/Religion not specified </option>
					</select>
				</div>
				<div class="form-group">
					<label for="ration_card">Ration Card</label>
					<select name="ration_card" class="form-control">
						<option value="bpl">BPL</option>
						<option value="aay">AAY</option>
						<option value="apl">APL</option>
					</select>
				</div>
				<div class="form-group">
					<label for="handicapped">Handicapped</label>
					<select name="handicapped" class="form-control">
						<option value="no" selected>No</option>
						<option value="yes">Yes</option>
					</select>
				</div>
				<div class="form-group">
					<label for="urban_rural">Urban Rural</label>
					<select name="urban_rural" class="form-control">
						<option value="urban" selected>Urban</option>
						<option value="rural">Rural</option>
					</select>
				</div>
				<div class="form-group">
					<label for="mzu_registration">MZU Registration</label>
					<br>
					<input type="text" class="form-control" id="mzu_registration" name="mzu_registration"> </div>
				<div class="form-group">
					<label for="college_registration">Roll Number</label>
					<br>
					<input type="text" class="form-control" id="college_registration" name="college_registration"> </div>
				<div class="form-group">
					<label for="current_semester">Current Semester</label><span style="color:red;">*</span>
					<br>
					<select name="current_semester" id="current_semester" class="form-control" required>
						<option value="" disabled selected>Choose Current Semester</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="none">none</option>
					</select>
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<br>
					<input type="text" class="form-control" id="email" name="email"> </div>
			</div>
		</div>
		<hr>
		
		<div class='ml-3'>
			<div class='row'>
				<h3>Semester/Subject</h3> </div>
			<div class='row'>
				<div class="col">
					<div class='row'> Stream <span style="color:red;">*</span></div>
					<div class='row'>
						<div class='form-check'>
							<input type="radio" onclick="baClick()" id="ba" class="mr-1 form-check-input" name="stream" value="ba" required>
							<label for="ba" class="mr-5 form-check-label">B.A </label>
						</div>
						<div class='form-check'>
							<input type="radio" onclick="bcomClick()" id="bcom" class="mr-1 form-check-input" name="stream" value="bcom" required>
							<label for="bcom" class="mr-3 form-check-label">B.Com</label>
						</div>
					</div>
				</div>
				<div id="semesterCol" class="col">
					<div id="mySemester" class="form-group">
						<label for="semester">Semester</label>
						<br>
						<select name="semester" id="semester" onChange="changeSubject(this.value);" class="form-control">
							<option value="" disabled selected>Choose Semester</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
						</select>
					</div>
					<br>


					<!-- SEMESTER 1 -->
               <b><label id="semester_status"></label></b>
               <div id="elective1" class="form-group">
                  <label>Elective I</label>
                  <select class="form-control mr-3"> @foreach ($subjects as $subject) @if($subject->type=="ba")
                     <option value="{{ $subject->name }}">{{ $subject->name}}</option> @endif @endforeach </select>
               </div>
               <div id="elective2" class="form-group">
                  <label>Elective II</label>
                  <select class="form-control mr-3"> @foreach ($subjects as $subject) @if($subject->type=="ba")
                     <option value="{{ $subject->name }}">{{ $subject->name}}</option> @endif @endforeach </select>
               </div>
					
					
				</div>
				<div id="coreColumn" class="col ">
					<div id="core" class="form-group mb-5">
						<label for="core">Choose Core Subject </label><span style="color:red;">*</span>
						<br>
						<select id="core" name="core" class="form-control" style="margin:0px 0px 65px 0px" required>
							<option value="" disabled selected>Choose Core</option> @foreach ($subjects as $subject) @if($subject->type=="ba")
							<option value="{{ $subject->name }}">{{ $subject->name}}</option> @endif @endforeach </select>
					</div>
					<!-- Compulsory -->
					<div >
						
						<div id="compulsory" class="form-group">
							<label >Compulsory Elective</label>
							<select class="form-control mr-3"> @foreach ($subjects as $subject) @if($subject->type=="compulsory")
								<option value="{{ $subject->name }}">{{ $subject->name}}</option> @endif @endforeach </select>
						</div>
					</div>
					
			</div>
		</div>
	</div>
	<hr>
	<br>
	<div class="col text-center">
		<div class="peer">
			<button class="btn btn-lg " style="background-color:#ffc117;"><b>Submit</b></button>
		</div> {!! Form::close() !!} 
   </div>
</div>

<script>
var mySemester = document.getElementById("mySemester");
var elective1 = document.getElementById("elective1");
var elective2 = document.getElementById("elective2");
var core = document.getElementById("core");
var compulsory = document.getElementById("compulsory");
var semester_status = document.getElementById("semester_status");

var stream = document.getElementsByName("stream");

var myStream = "";

mySemester.style.display = "none";
elective2.style.display = "none";
elective1.style.display = "none";
core.style.display = "none";
compulsory.style.display = "none";


function baClick() {
	mySemester.style.display = "block";
 
   core.style.display = "block";

   //get the stream value
   for(i = 0; i < stream.length; i++) { 
      if(stream[i].checked) 
      //document.getElementById("semester_status").innerHTML =  stream[i].value; 
      myStream = stream[i].value; 
      } 
   }

function bcomClick() {
	mySemester.style.display = "block";
   elective2.style.display = "none";
   elective1.style.display = "none";
   core.style.display = "none";
   compulsory.style.display = "block";
   semester_status.style.display="none";

   document.getElementById("core").required = false;

//get the stream value
   for(i = 0; i < stream.length; i++) { 
      if(stream[i].checked) 
      //document.getElementById("semester_status").innerHTML =  stream[i].value; 
      myStream = stream[i].value; 
   } 
}

function changeSubject(value) {

      if(value.length == 0) document.getElementById("category").innerHTML = "<option></option>";
      else {
         if(myStream=='ba'){
            elective2.style.display = "block";
            elective1.style.display = "block";
            semester_status.style.display="block";

         }
         compulsory.style.display = "block";

         switch(value) {
            case "1":
               elective1.name = "sem1_sub1";
               elective2.name = "sem1_sub2"; 
               compulsory.name = "sem1_sub3";
               semester_status.innerHTML = "Semester I"; 

               break;
            case "2":
               elective1.name = "sem2_sub1";
               elective2.name = "sem2_sub2"; 
               compulsory.name = "sem2_sub3";
               semester_status.innerHTML = "Semester II"; 
               break;
            case "3":
               elective1.name = "sem3_sub1";
               elective2.name = "sem3_sub2"; 
               compulsory.name = "sem3_sub3";
               semester_status.innerHTML = "Semester III";
               break;
            case "4":
               elective1.name = "sem4_sub1";
               elective2.name = "sem4_sub2"; 
               compulsory.name = "sem4_sub3";
               semester_status.innerHTML = "Semester IV";
               break;
            case "5":
               elective1.name = "sem5_sub1";
               elective2.name = "sem5_sub2"; 
               compulsory.name = "sem5_sub3";
               semester_status.innerHTML = "Semester V";
               break;
            case "6":
               elective1.name = "sem6_sub1";
               elective2.name = "sem6_sub2"; 
               compulsory.name = "sem6_sub3";
               semester_status.innerHTML = "Semester VI";
               break;
            default:
               break;
         }
      }

}
</script> @endsection