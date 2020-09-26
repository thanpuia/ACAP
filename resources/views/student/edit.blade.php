@extends('admin.default')
@section('content')

<div class="card bg-white p-3 rounded">
	<div class="form m-40">
    <h3 class="card-title"><a href="/student/{{$student->id}}/edit" style="color:grey;">Student Data Edit</a></h3>

    {!! Form::open(['url' => "/student/{$student->id}",'method'=>'put']) !!}
     
    <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="name">Name</label><span style="color:red;">*</span><br>
                    <input type="text" class="form-control" id="name" name="name" value="{{$student->name}}" required>
                </div>

                <div class="form-group">
                    <label for="contact">Contact</label><br>
                    <input type="text"  class="form-control" id="contact" name="contact" value="{{$student->contact}}">
                </div>

                <div class="form-group">
                    <label for="fathers_mothers_name">Father's/Mother's Name</label><br>
                    <input type="text" class="form-control" id="fathers_mothers_name" name="fathers_mothers_name" value="{{$student->fathers_mothers_name}}">
                </div>

                <div class="form-group">
                    <label for="fathers_mothers_contact">Father's/Mother's Contact</label><br>
                    <input type="text"  class="form-control" id="fathers_mothers_contact" name="fathers_mothers_contact" value="{{$student->fathers_mothers_contact}}">
                </div>

                <!-- <div class="form-group">

                    <label for="sex">Sex</label><br>
                    <select name="sex"  class="form-control">
                        <option value="female" {{'female'== $student->sex ? 'selected':''}}>Female</option>
                        <option value="Male" {{'male'== $student->sex ? 'selected':''}} >Male</option>
                    </select>
                </div> -->

                <div class="mb-3">
					<label for="sex">Sex</label>
					<br>
                    <div class='row ml-1 '>
                        <div class='form-check'>    
                            <input type="radio" id="female"  class="mr-1 form-check-input" name="sex" value="female" {{'female'== $student->sex ? 'checked':''}}>
                            <label for="female" class="mr-5 form-check-label">Female</label>
                        </div>
                        <div class='form-check'>
                            <input type="radio" id="male" class="mr-1 form-check-input" name="sex" value="male" {{'male'==$student->sex ? 'checked':''}}>
                            <label for="male" class="mr-3 form-check-label">Male</label>
                        </div>
                    </div>
				</div>

                
                <div class="form-group">
                    <label for="identification_mark">Identification Mark</label><br>
                    <input type="text"  class="form-control" id="identification_mark" name="identification_mark" value="{{$student->identification_mark}}">
                </div>
            

                <div class="form-group">
                <label for="detailed_present_address_aizawl">Detailed Present Address (Aizawl)</label><br>
                <textarea rows="9"  class="form-control" id="detailed_present_address_aizawl" name="detailed_present_address_aizawl" >{{$student->detailed_present_address_aizawl}}</textarea>
                </div>
           </div>    


            

                <!-- 2nd column -->
            <div class="col">
                <div class="form-group">

                    <label for="permanent_home_address">Permanet Home Address</label><br>
                    <textarea rows="5"  class="form-control" id="permanent_home_address" name="permanent_home_address" >{{$student->permanent_home_address}} </textarea>
                </div>
                <div class="form-group">
                    <label for="name_of_guardian">Name of Local Guardian (If any)</label><br>
                    <input type="text" class="form-control" id="name_of_guardian" name="name_of_guardian" value="{{$student->name_of_guardian}}">
                </div>
                <div class="form-group">
                    <label for="address_of_guardian">Address of Local Guardian (If any)</label><br>
                    <textarea rows="5"  class="form-control" id="address_of_guardian" name="address_of_guardian">{{$student->address_of_guardian}} </textarea>
                 </div>
                <div class="form-group">
                    <label for="contact_of_guardian">Guardian Contact (If any)</label><br>
                    <input type="text"  class="form-control" id="contact_of_guardian" name="contact_of_guardian" value="{{$student->contact_of_guardian}}">
                </div>
                <div class ="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" value="{{$student->dob}}">
                </div>
                <div class="form-group">
					<label for="aadhaar">Aadhaar</label>
					<br>
					<input type="text" class="form-control" id="aadhaar" name="aadhaar" value="{{$student->aadhaar}}"> 
                </div>

            </div>

            <!-- 3rd Column -->
            <div class="col">
                <div class="form-group">
                    <label for="community">Community</label>
                    <select name="community"  class="form-control">
                        <option value="st" {{'st'== $student->community ? 'selected':''}}>ST</option>
                        <option value="sc" {{'sc'== $student->community ? 'selected':''}}>SC</option>
                        <option value="obc" {{'obc'== $student->community ? 'selected':''}}>OBC</option>
                        <option value="gen" {{'gen'== $student->community ? 'selected':''}}>Gen</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="religion">Religion</label>
                    <select name="religion" class="form-control">
                    <option value="christianity" {{'christianity'== $student->religion ? 'selected':''}}>Christianity</option>
                    <option value="hinduism" {{'hinduism'== $student->religion ? 'selected':''}}>Hinduism</option>
                    <option value="islam" {{'islam'== $student->religion ? 'selected':''}}>Islam</option>
                    <option value="sikhism" {{'sikhism'== $student->religion ? 'selected':''}}>Sikhism</option>
                    <option value="buddhism" {{'buddhism'== $student->religion ? 'selected':''}}>Buddhism</option>
                    <option value="jainism" {{'jainism'== $student->religion ? 'selected':''}}>Jainism</option>
                    <option value="zoroastrianism" {{'zoroastrianism'== $student->religion ? 'selected':''}}>Zoroastrianism</option>
                    <option value="others" {{'others'== $student->religion ? 'selected':''}}>Others/Religion not specified </option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="ration_card">Ration Card</label>
                    <select name="ration_card"  class="form-control">
                        <option value="bpl" {{'bpl'== $student->ration_card ? 'selected':''}}>BPL</option>
                        <option value="aay" {{'aay'== $student->ration_card ? 'selected':''}}>AAY</option>
                        <option value="apl" {{'apl'== $student->ration_card ? 'selected':''}}>APL</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="handicapped">Handicapped</label>
                    <select name="handicapped"  class="form-control">
                        <option value="no" {{'no'== $student->handicapped ? 'selected':''}}>No</option>
                        <option value="yes" {{'yes'== $student->handicapped ? 'selected':''}}>Yes</option>
                    </select>
                 </div>
                 <div class="form-group">
                    <label for="urban_rural">Urban Rural</label>
                    <select name="urban_rural"  class="form-control">
                        <option value="urban" {{'urban'== $student->urban_rural ? 'selected':''}}>Urban</option>
                        <option value="rural" {{'rural'== $student->urban_rural ? 'selected':''}}>Rural</option>
                      </select>
                 </div>

            
                <div class="form-group">
                    <label for="mzu_registration">MZU Registration</label><br>
                    <input type="text"  class="form-control" id="mzu_registration" name="mzu_registration" value="{{$student->mzu_registration}}">
                </div>
                <div class="form-group">
                    <label for="college_registration">Roll Number</label><br>
                    <input type="text"  class="form-control" id="college_registration" name="college_registration" value="{{$student->college_registration}}">
                </div>
                <div class="form-group">
					    <label for="current_semester">Current Semester</label><span style="color:red;">*</span>
					    <br>
					    <select name="current_semester" id="current_semester" class="form-control" required>
                            <option value="" disabled selected>Choose Current Semester</option>
                            <option value="1" {{"1"== $student->semester ? 'selected':''}}>1</option>
						    <option value="2"{{"2"== $student->semester ? 'selected':''}} >2</option>
                            <option value="3"{{"3"== $student->semester ? 'selected':''}} >3</option>
						    <option value="4"{{"4"== $student->semester ? 'selected':''}} >4</option>
                            <option value="5"{{"5"== $student->semester ? 'selected':''}} >5</option>
						    <option value="6" {{"6"== $student->semester ? 'selected':''}} >6</option>
					    </select> 
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <br>
                    <input type="text" class="form-control" id="email" name="email" value="{{$student->email}}"> 

                </div>
            </div>    

        </div>


        <p id="dynamic"></p>

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
                    <div id="semester1"> 
                        <div id="elective1" class="form-group">
                            <label>Elective I</label>
                            <select name="sem1_sub1" class="form-control mr-3">
                                @foreach ($subjects as $subject) 
                                    @if($subject->type=="ba")
                                        @if($subject->name==$student->acquire->sem1_sub1)
                                            <option value="{{ $subject->name }}" selected>{{ $subject->name}}</option>
                                        @else
                                            <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                                        @endif 
                                    @endif 
                                @endforeach 
                            </select>
                        </div>
                        <div id="elective2" class="form-group">
                            <label>Elective II</label>
                            <select name="sem1_sub2" class="form-control mr-3"> 
                                @foreach ($subjects as $subject) 
                                    @if($subject->type=="ba")
                                        @if($subject->name==$student->acquire->sem1_sub2)
                                            <option value="{{ $subject->name }}" selected>{{ $subject->name}}</option>
                                        @else
                                            <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                                        @endif 
                                    @endif 
                                @endforeach 
                            </select>
                        </div>
                    </div>

					<!-- SEMESTER 2 -->

                    <div id="semester2"> 
                        <div id="elective1" class="form-group">
                            <label>Elective I</label>
                            <select name="sem2_sub1" class="form-control mr-3">
                                @foreach ($subjects as $subject) 
                                    @if($subject->type=="ba")
                                        @if($subject->name==$student->acquire->sem2_sub1)
                                            <option value="{{ $subject->name }}" selected>{{ $subject->name}}</option>
                                        @else
                                            <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                                        @endif 
                                    @endif 
                                @endforeach 
                            </select>
                        </div>
                        <div id="elective2" class="form-group">
                            <label>Elective II</label>
                            <select name="sem2_sub2" class="form-control mr-3"> 
                                @foreach ($subjects as $subject) 
                                    @if($subject->type=="ba")
                                        @if($subject->name==$student->acquire->sem2_sub2)
                                            <option value="{{ $subject->name }}" selected>{{ $subject->name}}</option>
                                        @else
                                            <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                                        @endif 
                                    @endif 
                                @endforeach 
                            </select>
                        </div>
                    </div>

					<!-- SEMESTER 3 -->

                    <div id="semester3"> 
                        <div id="elective1" class="form-group">
                            <label>Elective I</label>
                            <select name="sem3_sub1" class="form-control mr-3">
                                @foreach ($subjects as $subject) 
                                    @if($subject->type=="ba")
                                        @if($subject->name==$student->acquire->sem3_sub1)
                                            <option value="{{ $subject->name }}" selected>{{ $subject->name}}</option>
                                        @else
                                            <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                                        @endif 
                                    @endif 
                                @endforeach 
                            </select>
                        </div>
                        <div id="elective2" class="form-group">
                            <label>Elective II</label>
                            <select name="sem3_sub2" class="form-control mr-3"> 
                                @foreach ($subjects as $subject) 
                                    @if($subject->type=="ba")
                                        @if($subject->name==$student->acquire->sem3_sub2)
                                            <option value="{{ $subject->name }}" selected>{{ $subject->name}}</option>
                                        @else
                                            <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                                        @endif 
                                    @endif 
                                @endforeach 
                            </select>
                        </div>
                    </div>

    			<!-- SEMESTER 4 -->

                    <div id="semester4"> 
                        <div id="elective1" class="form-group">
                            <label>Elective I</label>
                            <select name="sem4_sub1" class="form-control mr-3">
                                @foreach ($subjects as $subject) 
                                    @if($subject->type=="ba")
                                        @if($subject->name==$student->acquire->sem4_sub1)
                                            <option value="{{ $subject->name }}" selected>{{ $subject->name}}</option>
                                        @else
                                            <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                                        @endif 
                                    @endif 
                                @endforeach 
                            </select>
                        </div>
                        <div id="elective2" class="form-group">
                            <label>Elective II</label>
                            <select name="sem4_sub2" class="form-control mr-3"> 
                                @foreach ($subjects as $subject) 
                                    @if($subject->type=="ba")
                                        @if($subject->name==$student->acquire->sem4_sub2)
                                            <option value="{{ $subject->name }}" selected>{{ $subject->name}}</option>
                                        @else
                                            <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                                        @endif 
                                    @endif 
                                @endforeach 
                            </select>
                        </div>
                    </div>

					<!-- SEMESTER 5 -->

                    <div id="semester5"> 
                        <div id="elective1" class="form-group">
                            <label>Elective I</label>
                            <select name="sem5_sub1" class="form-control mr-3">
                                @foreach ($subjects as $subject) 
                                    @if($subject->type=="ba")
                                        @if($subject->name==$student->acquire->sem5_sub1)
                                            <option value="{{ $subject->name }}" selected>{{ $subject->name}}</option>
                                        @else
                                            <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                                        @endif 
                                    @endif 
                                @endforeach 
                            </select>
                        </div>
                        <div id="elective2" class="form-group">
                            <label>Elective II</label>
                            <select name="sem5_sub2" class="form-control mr-3"> 
                                @foreach ($subjects as $subject) 
                                    @if($subject->type=="ba")
                                        @if($subject->name==$student->acquire->sem5_sub2)
                                            <option value="{{ $subject->name }}" selected>{{ $subject->name}}</option>
                                        @else
                                            <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                                        @endif 
                                    @endif 
                                @endforeach 
                            </select>
                        </div>
                    </div>

					<!-- SEMESTER 6 -->

                    <div id="semester6"> 
                        <div id="elective1" class="form-group">
                            <label>Elective I</label>
                            <select name="sem6_sub1" class="form-control mr-3">
                                @foreach ($subjects as $subject) 
                                    @if($subject->type=="ba")
                                        @if($subject->name==$student->acquire->sem6_sub1)
                                            <option value="{{ $subject->name }}" selected>{{ $subject->name}}</option>
                                        @else
                                            <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                                        @endif 
                                    @endif 
                                @endforeach 
                            </select>
                        </div>
                        <div id="elective2" class="form-group">
                            <label>Elective II</label>
                            <select name="sem6_sub2" class="form-control mr-3"> 
                                @foreach ($subjects as $subject) 
                                    @if($subject->type=="ba")
                                        @if($subject->name==$student->acquire->sem6_sub2)
                                            <option value="{{ $subject->name }}" selected>{{ $subject->name}}</option>
                                        @else
                                            <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                                        @endif 
                                    @endif 
                                @endforeach 
                            </select>
                        </div>
                    </div>
					
				</div>
				<div id="coreColumn" class="col ">
					<div id="core" class="form-group mb-5">
						<label for="core">Choose Core Subject </label><span style="color:red;">*</span>
						<br>
						<select id="core" name="core" class="form-control" style="margin:0px 0px 65px 0px">
							<option value="" disabled selected>Choose Core</option> 
                          
                            @foreach ($subjects as $subject) 
                                @if($subject->type=="ba")
							        @if($subject->name==$student->acquire->core)
                                        <option value="{{ $subject->name }}" selected>{{ $subject->name}}</option> 
                                    @else
                                        <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                                    @endif
                                @endif 
                            @endforeach 
                        </select>
					</div>
					<!-- Compulsory -->
					<div id="compulsorys" >

						<!-- Semester1 -->
						<div id="semester1a" class="form-group">
							<label >Compulsory Elective</label>
							<select name="sem1_sub3" class="form-control mr-3">
                            @foreach ($subjects as $subject) 
                                @if($subject->type=="compulsory")
							        @if($subject->name==$student->acquire->sem1_sub3)
                                        <option value="{{ $subject->name }}" selected>{{ $subject->name}}</option> 
                                    @else
                                        <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                                    @endif
                                @endif 
                            @endforeach
                            </select>
						</div>
                        	<!-- Semester2 -->
						<div id="semester2a" class="form-group">
							<label >Compulsory Elective</label>
							<select name="sem2_sub3" class="form-control mr-3">
                            @foreach ($subjects as $subject) 
                                @if($subject->type=="compulsory")
							        @if($subject->name==$student->acquire->sem2_sub3)
                                        <option value="{{ $subject->name }}" selected>{{ $subject->name}}</option> 
                                    @else
                                        <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                                    @endif
                                @endif 
                            @endforeach
                            </select>
						</div>

                        <!-- Semester3 -->
						<div id="semester3a" class="form-group">
							<label >Compulsory Elective</label>
							<select name="sem3_sub3" class="form-control mr-3">
                            @foreach ($subjects as $subject) 
                                @if($subject->type=="compulsory")
							        @if($subject->name==$student->acquire->sem3_sub3)
                                        <option value="{{ $subject->name }}" selected>{{ $subject->name}}</option> 
                                    @else
                                        <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                                    @endif
                                @endif 
                            @endforeach
                            </select>
						</div>

                        <!-- Semester4 -->
						<div id="semester4a" class="form-group">
							<label >Compulsory Elective</label>
							<select name="sem4_sub3" class="form-control mr-3">
                            @foreach ($subjects as $subject) 
                                @if($subject->type=="compulsory")
							        @if($subject->name==$student->acquire->sem4_sub3)
                                        <option value="{{ $subject->name }}" selected>{{ $subject->name}}</option> 
                                    @else
                                        <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                                    @endif
                                @endif 
                            @endforeach
                            </select>
						</div>

                        	<!-- Semester5 -->
						<div id="semester5a" class="form-group">
							<label >Compulsory Elective</label>
							<select name="sem5_sub3" class="form-control mr-3">
                            @foreach ($subjects as $subject) 
                                @if($subject->type=="compulsory")
							        @if($subject->name==$student->acquire->sem5_sub3)
                                        <option value="{{ $subject->name }}" selected>{{ $subject->name}}</option> 
                                    @else
                                        <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                                    @endif
                                @endif 
                            @endforeach
                            </select>
						</div>

            				<!-- Semester6 -->
						<div id="semester6a" class="form-group">
							<label >Compulsory Elective</label>
							<select name="sem6_sub3" class="form-control mr-3">
                            @foreach ($subjects as $subject) 
                                @if($subject->type=="compulsory")
							        @if($subject->name==$student->acquire->sem6_sub3)
                                        <option value="{{ $subject->name }}" selected>{{ $subject->name}}</option> 
                                    @else
                                        <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                                    @endif
                                @endif 
                            @endforeach
                            </select>
						</div>

					</div>
					
			</div>
		</div>
	</div>
	<hr>
	<br>
	<div class="col text-center">
		<div class="peer">
			<button class="btn btn-lg " style="background-color:#ffc117;"><b>Update</b></button>
		</div> {!! Form::close() !!} 
   </div>
</div>

<script>
var mySemester = document.getElementById("mySemester");

var semester1 = document.getElementById("semester1");
var semester2 = document.getElementById("semester2");
var semester3 = document.getElementById("semester3");
var semester4 = document.getElementById("semester4");
var semester5 = document.getElementById("semester5");
var semester6 = document.getElementById("semester6");

var semester1a = document.getElementById("semester1a");
var semester2a = document.getElementById("semester2a");
var semester3a = document.getElementById("semester3a");
var semester4a = document.getElementById("semester4a");
var semester5a = document.getElementById("semester5a");
var semester6a = document.getElementById("semester6a");

var core = document.getElementById("core");
var compulsory = document.getElementById("compulsorys");
var semester_status = document.getElementById("semester_status");

var stream = document.getElementsByName("stream");
//testing
var dynamic = document.getElementById("dynamic");

var myStream = "";


mySemester.style.display = "none";

semester1.style.display = "none";
semester2.style.display = "none";
semester3.style.display = "none";
semester4.style.display = "none";
semester5.style.display = "none";
semester6.style.display = "none";
semester1a.style.display = "none";
semester2a.style.display = "none";
semester3a.style.display = "none";
semester4a.style.display = "none";
semester5a.style.display = "none";
semester6a.style.display = "none";

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

    semester1.style.display = "none";
    semester2.style.display = "none";
    semester3.style.display = "none";
    semester4.style.display = "none";
    semester5.style.display = "none";
    semester6.style.display = "none";
    // semester1a.style.display = "none";
    // semester2a.style.display = "none";
    // semester3a.style.display = "none";
    // semester4a.style.display = "none";
    // semester5a.style.display = "none";
    // semester6a.style.display = "none";

   core.style.display = "none";
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
           
            semester_status.style.display="block";

         }
         compulsory.style.display = "block";

         switch(value) {
            case "1":
                if(myStream=='ba'){
                    semester1.style.display = "block";
                    semester2.style.display = "none";
                    semester3.style.display = "none";
                    semester4.style.display = "none";
                    semester5.style.display = "none";
                    semester6.style.display = "none";
                }

                semester1a.style.display = "block";
                semester2a.style.display = "none";
                semester3a.style.display = "none";
                semester4a.style.display = "none";
                semester5a.style.display = "none";
                semester6a.style.display = "none";

               semester_status.innerHTML = "Semester I"; 
               
               dynamic.innerHTML = "sem1_sum1";
               break;
            case "2":
                if(myStream=='ba'){
                    semester1.style.display = "none";
                    semester2.style.display = "block";
                    semester3.style.display = "none";
                    semester4.style.display = "none";
                    semester5.style.display = "none";
                    semester6.style.display = "none";
                }
                semester1a.style.display = "none";
                semester2a.style.display = "block";
                semester3a.style.display = "none";
                semester4a.style.display = "none";
                semester5a.style.display = "none";
                semester6a.style.display = "none";

               semester_status.innerHTML = "Semester II"; 

               dynamic.innerHTML = "sem1_sum2";
               break;
            case "3":
                if(myStream=='ba'){
                    semester1.style.display = "none";
                    semester2.style.display = "none";
                    semester3.style.display = "block";
                    semester4.style.display = "none";
                    semester5.style.display = "none";
                    semester6.style.display = "none";
                }
                semester1a.style.display = "none";
                semester2a.style.display = "none";
                semester3a.style.display = "block";
                semester4a.style.display = "none";
                semester5a.style.display = "none";
                semester6a.style.display = "none";

               semester_status.innerHTML = "Semester III";

               dynamic.innerHTML = "sem1_sum3";
               break;
            case "4":
                if(myStream=='ba'){
                    semester1.style.display = "none";
                    semester2.style.display = "none";
                    semester3.style.display = "none";
                    semester4.style.display = "block";
                    semester5.style.display = "none";
                    semester6.style.display = "none";
                }
                semester1a.style.display = "none";
                semester2a.style.display = "none";
                semester3a.style.display = "none";
                semester4a.style.display = "block";
                semester5a.style.display = "none";
                semester6a.style.display = "none";

               semester_status.innerHTML = "Semester IV";

               dynamic.innerHTML = "sem1_sum4";
               break;
            case "5":
                if(myStream=='ba'){
                    semester1.style.display = "none";
                    semester2.style.display = "none";
                    semester3.style.display = "none";
                    semester4.style.display = "none";
                    semester5.style.display = "block";
                    semester6.style.display = "none";
                }
                semester1a.style.display = "none";
                semester2a.style.display = "none";
                semester3a.style.display = "none";
                semester4a.style.display = "none";
                semester5a.style.display = "block";
                semester6a.style.display = "none";

               semester_status.innerHTML = "Semester V";
               break;
            case "6":
                if(myStream=='ba'){
                    semester1.style.display = "none";
                    semester2.style.display = "none";
                    semester3.style.display = "none";
                    semester4.style.display = "none";
                    semester5.style.display = "none";
                    semester6.style.display = "block";
                }
                semester1a.style.display = "none";
                semester2a.style.display = "none";
                semester3a.style.display = "none";
                semester4a.style.display = "none";
                semester5a.style.display = "none";
                semester6a.style.display = "block";

               semester_status.innerHTML = "Semester VI";
               break;
            default:
               break;
         }
      }

}
</script> @endsection