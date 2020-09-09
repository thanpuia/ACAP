@extends('admin.default')
@section('content')

<div class="container">
    <div class="form p-5">
    <h3 class="card-title"><a href="/student/{{$student->id}}/edit" style="color:grey;">Student Data Edit</a></h3>

    {!! Form::open(['url' => "/student/{$student->id}",'method'=>'put']) !!}
     
    <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="name">Name</label><br>
                    <input type="text" class="form-control" id="name" name="name" value="{{$student->name}}">
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
                <textarea rows="5"  class="form-control" id="detailed_present_address_aizawl" name="detailed_present_address_aizawl" >{{$student->detailed_present_address_aizawl}}</textarea>
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
                    <label for="aadhaar">Aadhaar</label><br>
                    <input type="text"  class="form-control" id="aadhaar" name="aadhaar" value="{{$student->aadhaar}}">
                </div>
            
                <div class="form-group">
                    <label for="mzu_registration">MZU Registration</label><br>
                    <input type="text"  class="form-control" id="mzu_registration" name="mzu_registration" value="{{$student->mzu_registration}}">
                </div>
                <div class="form-group">
                    <label for="college_registration">College Registration</label><br>
                    <input type="text"  class="form-control" id="college_registration" name="college_registration" value="{{$student->college_registration}}">
                </div>
                <div class="form-group">
					    <label for="current_semester">Current Semester</label>
					    <br>
					    <select name="current_semester" id="current_semester" class="form-control">
                            <option value="" disabled selected>Choose Current Semester</option>
                            <option value="1" {{"1"== $student->semester ? 'selected':''}}>1</option>
						    <option value="2"{{"2"== $student->semester ? 'selected':''}} >2</option>
                            <option value="3"{{"3"== $student->semester ? 'selected':''}} >3</option>
						    <option value="4"{{"4"== $student->semester ? 'selected':''}} >4</option>
                            <option value="5"{{"5"== $student->semester ? 'selected':''}} >5</option>
						    <option value="6" {{"6"== $student->semester ? 'selected':''}} >6</option>
					    </select> </div>
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
                            <input type="radio" id="ba"  class="mr-1 form-check-input" name="stream" value="ba"  {{'ba'==$student->stream ? 'checked':''}}>
                            <label for="ba" class="mr-5 form-check-label">B.A </label>
                        </div>
                        <div class='form-check'>
                            <input type="radio" id="bcom" class="mr-1 form-check-input" name="stream" value="bcom"  {{'bcom'==$student->stream ? 'checked':''}}>
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
						    <option value="none">none</option>

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
                                    <option value="{{ $subject->name }}"  {{$subject->name==$student->acquire->sem1_sub1 ?  'selected':''}}>{{ $subject->name}}</option>
                                @endforeach
                            </select>
                           
                        </div>
                        <div class="form-group">
                             <!-- <select name="elective2_sem1" id="elective2_sem1" class="form-control">
                            </select>   -->
                            <select name="sem1_sub2" class="form-control mr-3">
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->name }}"  {{$subject->name==$student->acquire->sem1_sub2 ?  'selected':''}}>{{ $subject->name}}</option>
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
                                    <option value="{{ $subject->name }}"  {{$subject->name==$student->acquire->sem2_sub1 ?  'selected':''}}>{{ $subject->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <!-- <select name="elective2_sem2" id="elective2_sem2" class="form-control">
                            </select>  -->
                            <select name="sem2_sub2" class="form-control mr-3">
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->name }}" {{$subject->name==$student->acquire->sem2_sub2 ?  'selected':''}}>{{ $subject->name}}</option>
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
                                <option value="{{ $subject->name }}"  {{$subject->name==$student->acquire->sem3_sub1 ?  'selected':''}}>{{ $subject->name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <!-- <select name="elective2_sem3" id="elective2_sem3" class="form-control">
                            </select>  -->
                            <select name="sem3_sub2" class="form-control mr-3">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->name }}" {{$subject->name==$student->acquire->sem3_sub2 ?  'selected':''}}>{{ $subject->name}}</option>
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
                                <option value="{{ $subject->name }}" {{$subject->name==$student->acquire->sem4_sub1 ?  'selected':''}}>{{ $subject->name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <!-- <select name="elective2_sem4" id="elective2_sem4" class="form-control">
                            </select>  -->
                            <select name="sem4_sub2" class="form-control mr-3">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->name }}" {{$subject->name==$student->acquire->sem4_sub2 ?  'selected':''}}>{{ $subject->name}}</option>
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
                                    <option value="{{ $subject->name }}" {{$subject->name==$student->acquire->sem5_sub1 ?  'selected':''}}>{{ $subject->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <!-- <select name="elective2_sem5" id="elective2_sem5" class="form-control">
                            </select>  -->
                            <select name="sem5_sub2" class="form-control mr-3">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->name }}"  {{$subject->name==$student->acquire->sem5_sub2 ?  'selected':''}}>{{ $subject->name}}</option>
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
                                <option value="{{ $subject->name }}" {{$subject->name==$student->acquire->sem6_sub1 ?  'selected':''}}>{{ $subject->name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <!-- <select name="elective2_sem6" id="elective2_sem6" class="form-control">
                            </select>  -->
                            <select name="sem6_sub2" class="form-control mr-3">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->name }}" {{$subject->name==$student->acquire->sem6_sub2 ?  'selected':''}}>{{ $subject->name}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    
                    
                </div>
                <div class="col"> 
                        <div class="form-group">
                            <label for="core">Choose Core Subject</label>
                            <br>
                            <select name="core" class="form-control mr-3">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->name }}" {{$subject->name==$student->acquire->core ?  'selected':''}}>{{ $subject->name}}</option>
                            @endforeach
                            </select>
                        </div>
                    <!-- SEMESTER 1_a -->
                    <div id="semester1_a">
                     
                        <br>
                        <br>
                        <div class="form-group pt-2">
                         
                            <select name="sem1_sub3" class="form-control mr-3">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->name }}"  {{$subject->name==$student->acquire->sem1_sub3 ?  'selected':''}}>{{ $subject->name}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>

                    <!-- SEMESTER 2_a -->
                    <div id="semester2_a">
                   
                        <br>
                        <br>
                        <div class="form-group pt-2">
                            <!-- <select name="elective3_sem2" id="elective3_sem2" class="form-control">
                            </select>  -->
                            <select name="sem2_sub3" class="form-control mr-3">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->name }}" {{$subject->name==$student->acquire->sem2_sub3 ?  'selected':''}}>{{ $subject->name}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- SEMESTER 3_a -->
                    <div id="semester3_a">
                      
                        <br>
                        <br>
                        <div class="form-group pt-2">
                         
                            <select name="sem3_sub3" class="form-control mr-3">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->name }}" {{$subject->name==$student->acquire->sem3_sub3 ?  'selected':''}}>{{ $subject->name}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- SEMESTER 4_a -->
                    <div id="semester4_a">
                   
                        <br>
                        <br>
                        <div class="form-group pt-2">
                        
                            <select name="sem4_sub3" class="form-control mr-3">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->name }}" {{$subject->name==$student->acquire->sem4_sub3 ?  'selected':''}}>{{ $subject->name}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- SEMESTER 5_a -->
                    <div id="semester5_a">
                   
                        <br>
                        <br>
                        <div class="form-group pt-2">
                        
                            <select name="sem5_sub3" class="form-control mr-3">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->name }}" {{$subject->name==$student->acquire->sem5_sub3 ?  'selected':''}}>{{ $subject->name}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <!-- SEMESTER 6_a -->
                    <div id="semester6_a">
                
                        <br>
                        <br>
                        <div class="form-group pt-2">
                           
                            <select name="sem6_sub3" class="form-control mr-3">
                            @foreach ($subjects as $subject)
                                <option value="{{ $subject->name }}" {{$subject->name==$student->acquire->sem6_sub3 ?  'selected':''}}>{{ $subject->name}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
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

                    var semesterSubjects = {
                    
                        1: ["Mizo","Hindi"],
                        2: ["Hindi","sub4"],
                        3: ["sub6","Mizo"],
                        4: ["sub7","sub8"],
                        5: ["sub9","sub10"],
                        6: ["sub11","sub12"]
                    }

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

    </div>
</div>

<hr>

   <div class="col text-center peer">
         <button class="btn btn-lg " style="background-color:#ffc117;"><b>Update</b></button>
      </div>

{!! Form::close() !!}


@endsection