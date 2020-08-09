@extends('admin.default')
@section('content')

<div class="card bg-white p-3 rounded">
    <div class="form p-5">
    
        <h3 class="card-title">New Admission</h3>
        {!! Form::open(['url' => '/student','method'=>'post']) !!}
        
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="name">Name</label><br>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="form-group">
                    <label for="contact">Contact</label><br>
                    <input type="text"  class="form-control" id="contact" name="contact">
                </div>

                <div class="form-group">
                    <label for="fathers_mothers_name">Father's/Mother's Name</label><br>
                    <input type="text" class="form-control" id="fathers_mothers_name" name="fathers_mothers_name">
                </div>

                <div class="form-group">
                    <label for="fathers_mothers_contact">Father's/Mother's Contact</label><br>
                    <input type="text"  class="form-control" id="fathers_mothers_contact" name="fathers_mothers_contact">
                </div>

                <div class="form-group">

                    <label for="sex">Sex</label><br>
                    <select name="sex"  class="form-control">
                        <option value="female">Female</option>
                        <option value="Male">Male</option>
                    </select>
                </div>
            
                <label for="detailed_present_address_aizawl">Detailed Present Address (Aizawl)</label><br>
                <textarea rows="5"  class="form-control" id="detailed_present_address_aizawl" name="detailed_present_address_aizawl"></textarea>
            </div>    


            

                <!-- 2nd column -->
            <div class="col">
                <div class="form-group">

                    <label for="permanent_home_address">Permanet Home Address</label><br>
                    <textarea rows="5"  class="form-control" id="permanent_home_address" name="permanent_home_address"> </textarea>
                </div>
                <div class="form-group">
                    <label for="name_of_guardian">Name of Local Guardian (If any)</label><br>
                    <input type="text" class="form-control" id="name_of_guardian" name="name_of_guardian">
                </div>
                <div class="form-group">
                    <label for="address_of_guardian">Address of Local Guardian (If any)</label><br>
                    <textarea rows="5"  class="form-control" id="address_of_guardian" name="address_of_guardian"> </textarea>
                 </div>
                <div class="form-group">
                    <label for="contact_of_guardian">Guardian Contact (If any)</label><br>
                    <input type="text"  class="form-control" id="contact_of_guardian" name="contact_of_guardian">
                </div>
                <div class ="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob">
                </div>

            </div>

            <!-- 3rd Column -->
            <div class="col">
                <div class="form-group">
                    <label for="community">Community</label>
                    <select name="community"  class="form-control">
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
                    <select name="ration_card"  class="form-control">
                        <option value="bpl">BPL</option>
                        <option value="aay">AAY</option>
                        <option value="apl">APL</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="handicapped">Handicapped</label>
                    <select name="handicapped"  class="form-control">
                        <option value="no" selected>No</option>
                        <option value="yes">Yes</option>
                    </select>
                 </div>
                 <div class="form-group">
                    <label for="urban_rural">Urban Rural</label>
                    <select name="urban_rural"  class="form-control">
                        <option value="urban" selected>Urban</option>
                        <option value="rural">Rural</option>
                      </select>
                 </div>

                 <div class="form-group">
                    <label for="aadhaar">Aadhaar</label><br>
                    <input type="text"  class="form-control" id="aadhaar" name="aadhaar">
                </div>
            
                <div class="form-group">
                    <label for="mzu_registration">MZU Registration</label><br>
                    <input type="text"  class="form-control" id="mzu_registration" name="mzu_registration">
                </div>
                <div class="form-group">
                    <label for="college_registration">College Registration</label><br>
                    <input type="text"  class="form-control" id="college_registration" name="college_registration">
                </div>
            </div>    

        </div>

        <br> <b>Semester I</b> <br>
        <div class="form-group form-check-inline">
          
                <select name="sem1_sub1" class="form-control mr-3" >
                    @foreach ($subjects as $subject)
                        <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                    @endforeach
                </select>
                <select name="sem1_sub2" class="form-control mr-3">
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                @endforeach
                </select>
                <select name="sem1_sub3" class="form-control mr-3">
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                @endforeach
                </select>
               
        </div>

        <br> <b>Semester II</b> <br>
        <div class="form-group form-check-inline">
            <select name="sem2_sub1" class="form-control mr-3">
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                @endforeach
            </select>
            <select name="sem2_sub2" class="form-control mr-3">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->name }}">{{ $subject->name}}</option>
            @endforeach
            </select>
            <select name="sem2_sub3" class="form-control mr-3">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->name }}">{{ $subject->name}}</option>
            @endforeach
            </select>
        </div>

    <br> <b>Semester III</b> <br>
        <div class="form-group form-check-inline">
            <select name="sem3_sub1" class="form-control mr-3">
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                @endforeach
            </select>
            <select name="sem3_sub2" class="form-control mr-3">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->name }}">{{ $subject->name}}</option>
            @endforeach
            </select>
            <select name="sem3_sub3" class="form-control mr-3">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->name }}">{{ $subject->name}}</option>
            @endforeach
            </select>
        </div>
    <br> <b>Semester IV</b> <br>
        <div class="form-group form-check-inline">
            <select name="sem4_sub1" class="form-control mr-3">
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                @endforeach
            </select>
            <select name="sem4_sub2" class="form-control mr-3">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->name }}">{{ $subject->name}}</option>
            @endforeach
            </select>
            <select name="sem4_sub3" class="form-control mr-3">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->name }}">{{ $subject->name}}</option>
            @endforeach
            </select>
        </div>
    <br> <b>Semester V</b> <br>
        <div class="form-group form-check-inline">
            <select name="sem5_sub1" class="form-control mr-3">
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                @endforeach
            </select>
            <select name="sem5_sub2" class="form-control mr-3">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->name }}">{{ $subject->name}}</option>
            @endforeach
            </select>
            <select name="sem5_sub3" class="form-control mr-3">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->name }}">{{ $subject->name}}</option>
            @endforeach
            </select>
        </div>
    <br> <b>Semester VI</b> <br>
        <div class="form-group form-check-inline">
            <select name="sem6_sub1" class="form-control mr-3">
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->name }}">{{ $subject->name}}</option>
                @endforeach
            </select>
            <select name="sem6_sub2" class="form-control mr-3">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->name }}">{{ $subject->name}}</option>
            @endforeach
            </select>
            <select name="sem6_sub3" class="form-control mr-3">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->name }}">{{ $subject->name}}</option>
            @endforeach
            </select>
        </div>
    <br>
    <input type="submit" class="btn btn-warning btn-lg btn-block" value="Submit">

    {!! Form::close() !!}


    </div>
</div>
@endsection