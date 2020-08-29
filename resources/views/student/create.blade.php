@extends('admin.default') @section('content')
<div class="card bg-white p-3 rounded">
	<div class="form m-40">
		<h3 class="card-title">New Admission</h3> {!! Form::open(['url' => '/student','method'=>'post']) !!}
		<div class="row">
			<div class="col">
				<div class="form-group">
					<label for="name">Name</label>
					<br>
					<input type="text" class="form-control" id="name" name="name"> </div>
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
				<div class="form-group">
					<label for="sex">Sex</label>
					<br>
					<select name="sex" class="form-control">
						<option value="female">Female</option>
						<option value="Male">Male</option>
					</select>
				</div>
				<div class="form-group">
					<label for="identification_mark">Identification Mark</label>
					<br>
					<input type="text" class="form-control" id="identification_mark" name="identification_mark"> </div>
				<label for="detailed_present_address_aizawl">Detailed Present Address (Aizawl)</label>
				<br>
				<textarea rows="5" class="form-control" id="detailed_present_address_aizawl" name="detailed_present_address_aizawl"></textarea>
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
					<label for="aadhaar">Aadhaar</label>
					<br>
					<input type="text" class="form-control" id="aadhaar" name="aadhaar"> </div>
				<div class="form-group">
					<label for="mzu_registration">MZU Registration</label>
					<br>
					<input type="text" class="form-control" id="mzu_registration" name="mzu_registration"> </div>
				<div class="form-group">
					<label for="college_registration">College Registration</label>
					<br>
					<input type="text" class="form-control" id="college_registration" name="college_registration"> </div>
			</div>
		</div>
		<hr>
        <div class='ml-3'>
            <div class='row'>
                <h3>Semester/Subject</h3> </div>
            <div class='row'>
                <div class="col">
                    <div class='row'> Stream </div>
                    <div class='row'>
                        <div class='form-check'>    
                            <input type="radio" id="ba"  class="mr-1 form-check-input" name="stream" value="ba">
                            <label for="ba" class="mr-5 form-check-label">B.A </label>
                        </div>
                        <div class='form-check'>
                            <input type="radio" id="bcom" class="mr-1 form-check-input" name="stream" value="bcom">
                            <label for="bcom" class="mr-3 form-check-label">B.Com</label>
                        </div>
                    </div>
                </div>  
                <div class="col"> 

             
                    <div class="form-group">
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
					  <div id="semester1">
                        <div class="form-group">
                            <label for="elective1_sem1">Choose Elective Subject _sem1</label>
                            <br>
                             <!-- <select name="elective1_sem1" id="elective1_sem1" class="form-control">
                            </select>   -->
                            <select name="sem1_sub1" class="form-control mr-3" >
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->name }}" >{{ $subject->name}}</option>
                                @endforeach
                            </select>
                           
                        </div>
                        <div class="form-group">
                             <!-- <select name="elective2_sem1" id="elective2_sem1" class="form-control">
                            </select>   -->
                            <select name="sem1_sub2" class="form-control mr-3">
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->name }}" >{{ $subject->name}}</option>
                                @endforeach
                            </select>
                           
                        </div>
                    </div>
                <!-- SEMESTER 2 -->
                    <div id="semester2">
                        <div class="form-group">
                            <label for="elective1_sem2">Choose Elective Subject _sem2</label>
                            <br>
                            <!-- <select name="elective1_sem2" id="elective1_sem2" class="form-control">
                            </select>  -->
                            <select name="sem2_sub1" class="form-control mr-3">
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->name }}" >{{ $subject->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <!-- <select name="elective2_sem2" id="elective2_sem2" class="form-control">
                            </select>  -->
                            <select name="sem2_sub2" class="form-control mr-3">
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                <!-- SEMESTER 3 -->
                <div id="semester3">
                        <div class="form-group">
                            <label for="elective1_sem3">Choose Elective Subject _sem3</label>
                            <br>
                            <!-- <select name="elective1_sem3" id="elective1_sem3" class="form-control">
                            </select>  -->
                            <select name="sem3_sub1" class="form-control mr-3">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->name }}" >{{ $subject->name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <!-- <select name="elective2_sem3" id="elective2_sem3" class="form-control">
                            </select>  -->
                            <select name="sem3_sub2" class="form-control mr-3">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->name }}" >{{ $subject->name}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                <!-- SEMESTER 4 -->
                    <div id="semester4">
                        <div class="form-group">
                            <label for="elective1_sem4">Choose Elective Subject _sem4</label>
                            <br>
                            <!-- <select name="elective1_sem4" id="elective1_sem4" class="form-control">
                            </select>  -->
                            <select name="sem4_sub1" class="form-control mr-3">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->name }}" >{{ $subject->name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <!-- <select name="elective2_sem4" id="elective2_sem4" class="form-control">
                            </select>  -->
                            <select name="sem4_sub2" class="form-control mr-3">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->name }}" >{{ $subject->name}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- SEMESTER 5 -->
                    <div id="semester5">
                        <div class="form-group">
                            <label for="elective1_sem5">Choose Elective Subject _sem5</label>
                            <br>
                            <!-- <select name="elective1_sem5" id="elective1_sem5" class="form-control">
                            </select>  -->
                            <select name="sem5_sub1" class="form-control mr-3">
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->name }}" >{{ $subject->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <!-- <select name="elective2_sem5" id="elective2_sem5" class="form-control">
                            </select>  -->
                            <select name="sem5_sub2" class="form-control mr-3">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->name }}"   >{{ $subject->name}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                <!-- SEMESTER 6 -->
                    <div id="semester6">
                        <div class="form-group">
                            <label for="elective1_sem6">Choose Elective Subject _sem6</label>
                            <br>
                            <!-- <select name="elective1_sem2" id="elective1_sem6" class="form-control">
                            </select>  -->
                            <select name="sem6_sub1" class="form-control mr-3">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->name }}"  >{{ $subject->name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <!-- <select name="elective2_sem6" id="elective2_sem6" class="form-control">
                            </select>  -->
                            <select name="sem6_sub2" class="form-control mr-3">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->name }}" >{{ $subject->name}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- <div class="form-group">
					    <label for="elective1">Choose Elective Subject</label>
					    <br>
					    <select name="elective1" id="elective1" class="form-control">
					    </select> 
                    </div>
                    <div class="form-group">
					    <select name="elective2" id="elective2" class="form-control">
					    </select> 
                    </div> -->
                </div>
                <div class="col">

				 <!-- SEMESTER 1_a -->
				 <div id="semester1_a">
                        <div class="form-group">
                            <label for="core">Choose Core Subject _sem1</label>
                            <br>
                            <select name="core_sem1" id="core_sem1"  class="form-control">
                                <option value="" disabled selected>Choose Core</option>
                                <option value="core1">core1</option>
                                <option value="core2">core2</option>
                                <option value="core3">core3</option>
                            </select> 
                        </div>
                        <br>
                        <br>
                        <div class="form-group pt-2">
                            <!-- <select name="elective3_sem1" id="elective3_sem1" class="form-control">
                            </select>  -->
                            <select name="sem1_sub3" class="form-control mr-3">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->name }}"   >{{ $subject->name}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>

                    <!-- SEMESTER 2_a -->
                    <div id="semester2_a">
                        <div class="form-group">
                            <label for="core_sem2">Choose Core Subject _sem2</label>
                            <br>
                            <select name="core_sem2" id="core_sem2"  class="form-control">
                                <option value="" disabled selected>Choose Core</option>
                                <option value="core1">core1</option>
                                <option value="core2">core2</option>
                                <option value="core3">core3</option>
                            </select> 
                        </div>
                        <br>
                        <br>
                        <div class="form-group pt-2">
                            <!-- <select name="elective3_sem2" id="elective3_sem2" class="form-control">
                            </select>  -->
                            <select name="sem2_sub3" class="form-control mr-3">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->name }}" >{{ $subject->name}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- SEMESTER 3_a -->
                    <div id="semester3_a">
                        <div class="form-group">
                            <label for="core_sem3">Choose Core Subject _sem3</label>
                            <br>
                            <select name="core_sem3" id="core_sem3"  class="form-control">
                                <option value="" disabled selected>Choose Core</option>
                                <option value="core1">core1</option>
                                <option value="core2">core2</option>
                                <option value="core3">core3</option>
                            </select> 
                        </div>
                        <br>
                        <br>
                        <div class="form-group pt-2">
                            <!-- <select name="elective3_sem3" id="elective3_sem3" class="form-control">
                            </select>  -->
                            <select name="sem3_sub3" class="form-control mr-3">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->name }}"  >{{ $subject->name}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- SEMESTER 4_a -->
                    <div id="semester4_a">
                        <div class="form-group">
                            <label for="core_sem4">Choose Core Subject _sem4</label>
                            <br>
                            <select name="core_sem4" id="core_sem4"  class="form-control">
                                <option value="" disabled selected>Choose Core</option>
                                <option value="core1">core1</option>
                                <option value="core2">core2</option>
                                <option value="core3">core3</option>
                            </select> 
                        </div>
                        <br>
                        <br>
                        <div class="form-group pt-2">
                            <!-- <select name="elective3_sem4" id="elective3_sem4" class="form-control">
                            </select>  -->
                            <select name="sem4_sub3" class="form-control mr-3">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->name }}" >{{ $subject->name}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- SEMESTER 5_a -->
                    <div id="semester5_a">
                        <div class="form-group">
                            <label for="core_sem5">Choose Core Subject _sem5</label>
                            <br>
                            <select name="core_sem5" id="core_sem5"  class="form-control">
                                <option value="" disabled selected>Choose Core</option>
                                <option value="core1">core1</option>
                                <option value="core2">core2</option>
                                <option value="core3">core3</option>
                            </select> 
                        </div>
                        <br>
                        <br>
                        <div class="form-group pt-2">
                            <!-- <select name="elective3_sem5" id="elective3_sem5" class="form-control">
                            </select>  -->
                            <select name="sem5_sub3" class="form-control mr-3">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->name }}" >{{ $subject->name}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- SEMESTER 6_a -->
                    <div id="semester6_a">
                        <div class="form-group">
                            <label for="core_sem6">Choose Core Subject _sem6</label>
                            <br>
                            <select name="core_sem6" id="core_sem6"  class="form-control">
                                <option value="" disabled selected>Choose Core</option>
                                <option value="core1">core1</option>
                                <option value="core2">core2</option>
                                <option value="core3">core3</option>
                            </select> 
                        </div>
                        <br>
                        <br>
                        <div class="form-group pt-2">
                            <!-- <select name="elective3_sem6" id="elective3_sem6" class="form-control">
                            </select>  -->
                            <select name="sem6_sub3" class="form-control mr-3">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->name }}"  >{{ $subject->name}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>


                    <!-- <div class="form-group">
                        <label for="core">Choose Core Subject</label>
                        <br>
                        <select name="core" id="core"  class="form-control">
                            <option value="" disabled selected>Choose Core</option>
                            <option value="core1">core1</option>
                            <option value="core2">core2</option>
                            <option value="core3">core3</option>
                        </select> 
                    </div>
                    <br>
                    <br>
                    <div class="form-group pt-2">
					    <select name="elective3" id="elective3" class="form-control">
					    </select> 
                    </div> -->
                </div>
            </div>
        </div>
		
		<br>
		<input type="submit" style="background-color:#ffc117;" class="btn  btn-lg btn-block" value="Submit"> {!! Form::close() !!} </div>
</div>

<script>
		
		document.getElementById("semester1").style.display  = "none";
		document.getElementById("semester2").style.display  = "none";
		document.getElementById("semester3").style.display  = "none";
		document.getElementById("semester4").style.display  = "none";
		document.getElementById("semester5").style.display  = "none";
		document.getElementById("semester6").style.display  = "none";

		document.getElementById("semester1_a").style.display  = "none";
		document.getElementById("semester2_a").style.display  = "none";
		document.getElementById("semester3_a").style.display  = "none";
		document.getElementById("semester4_a").style.display  = "none";
		document.getElementById("semester5_a").style.display  = "none";
		document.getElementById("semester6_a").style.display  = "none";

            
		function changeSubject(value){
			if (value.length == 0) document.getElementById("category").innerHTML = "<option></option>";
			else{
				switch (value) {
                                case "1":
                                    document.getElementById("semester1").style.display  = "block";
                                    document.getElementById("semester2").style.display  = "none";
                                    document.getElementById("semester3").style.display  = "none";
                                    document.getElementById("semester4").style.display  = "none";
                                    document.getElementById("semester5").style.display  = "none";
                                    document.getElementById("semester6").style.display  = "none";

                                    document.getElementById("semester1_a").style.display  = "block";
                                    document.getElementById("semester2_a").style.display  = "none";
                                    document.getElementById("semester3_a").style.display  = "none";
                                    document.getElementById("semester4_a").style.display  = "none";
                                    document.getElementById("semester5_a").style.display  = "none";
                                    document.getElementById("semester6_a").style.display  = "none";
                                break;
                                case "2":
                                    document.getElementById("semester1").style.display = "none";
                                    document.getElementById("semester2").style.display = "block";
                                    document.getElementById("semester3").style.display = "none";
                                    document.getElementById("semester4").style.display = "none";
                                    document.getElementById("semester5").style.display = "none";
                                    document.getElementById("semester6").style.display = "none";

                                    document.getElementById("semester1_a").style.display = "none";
                                    document.getElementById("semester2_a").style.display = "block";
                                    document.getElementById("semester3_a").style.display = "none";
                                    document.getElementById("semester4_a").style.display = "none";
                                    document.getElementById("semester5_a").style.display = "none";
                                    document.getElementById("semester6_a").style.display = "none";

                                break;
                                case "3":
                                    document.getElementById("semester1").style.display = "none";
                                    document.getElementById("semester2").style.display = "none";
                                    document.getElementById("semester3").style.display = "block";
                                    document.getElementById("semester4").style.display = "none";
                                    document.getElementById("semester5").style.display = "none";
                                    document.getElementById("semester6").style.display = "none";

                                    document.getElementById("semester1_a").style.display = "none";
                                    document.getElementById("semester2_a").style.display = "none";
                                    document.getElementById("semester3_a").style.display = "block";
                                    document.getElementById("semester4_a").style.display = "none";
                                    document.getElementById("semester5_a").style.display = "none";
                                    document.getElementById("semester6_a").style.display = "none";
                                break;
                                case "4":
                                    document.getElementById("semester1").style.display = "none";
                                    document.getElementById("semester2").style.display = "none";
                                    document.getElementById("semester3").style.display = "none";
                                    document.getElementById("semester4").style.display = "block";
                                    document.getElementById("semester5").style.display = "none";
                                    document.getElementById("semester6").style.display = "none";

                                    document.getElementById("semester1_a").style.display = "none";
                                    document.getElementById("semester2_a").style.display = "none";
                                    document.getElementById("semester3_a").style.display = "none";
                                    document.getElementById("semester4_a").style.display = "block";
                                    document.getElementById("semester5_a").style.display = "none";
                                    document.getElementById("semester6_a").style.display = "none";
                                break;
                                case "5":
                                    document.getElementById("semester1").style.display = "none";
                                    document.getElementById("semester2").style.display = "none";
                                    document.getElementById("semester3").style.display = "none";
                                    document.getElementById("semester4").style.display = "none";
                                    document.getElementById("semester5").style.display = "block";
                                    document.getElementById("semester6").style.display = "none";

                                    document.getElementById("semester1_a").style.display = "none";
                                    document.getElementById("semester2_a").style.display = "none";
                                    document.getElementById("semester3_a").style.display = "none";
                                    document.getElementById("semester4_a").style.display = "none";
                                    document.getElementById("semester5_a").style.display = "block";
                                    document.getElementById("semester6_a").style.display = "none";
                                break;
                                case "6":
                                    document.getElementById("semester1").style.display = "none";
                                    document.getElementById("semester2").style.display = "none";
                                    document.getElementById("semester3").style.display = "none";
                                    document.getElementById("semester4").style.display = "none";
                                    document.getElementById("semester5").style.display = "none";
                                    document.getElementById("semester6").style.display = "block";

                                    document.getElementById("semester1_a").style.display = "none";
                                    document.getElementById("semester2_a").style.display = "none";
                                    document.getElementById("semester3_a").style.display = "none";
                                    document.getElementById("semester4_a").style.display = "none";
                                    document.getElementById("semester5_a").style.display = "none";
                                    document.getElementById("semester6_a").style.display = "block";
                                break;
                                default:
                                    break;
                            }
			}
			
		}

	</script>
 @endsection