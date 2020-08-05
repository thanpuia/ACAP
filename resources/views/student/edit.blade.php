@extends('layouts.app')
@section('content')

<div class="container">
    <div class="form p-5">
    <h3 class="card-title">Student Data Edit</h3>

    {!! Form::open(['url' => "/student/{$student->id}",'method'=>'put']) !!}
<div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="name">Name</label><br>
                    <input type="text" class="form-control" id="name" name="name" value="{{$student->name}}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="contact">Contact</label><br>
                    <input type="text"  class="form-control" id="contact" name="contact" value="{{$student->contact}}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">

                    <label for="sex">Sex</label><br>
                    <select name="sex"  class="form-control">
                        <option value="female">Female</option>
                        <option value="Male">Male</option>
                    </select>
                </div>
            </div>
        </div>

        <div class= "row">
            <div class="col">
                <div class="form-group">
                    <label for="fathers_mothers_name">Father's/Mother's Name</label><br>
                    <input type="text" class="form-control" id="fathers_mothers_name" name="fathers_mothers_name" value="{{$student->fathers_mothers_name}}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="fathers_mothers_contact">Father's/Mother's Contact</label><br>
                    <input type="text"  class="form-control" id="fathers_mothers_contact" name="fathers_mothers_contact" value="{{$student->fathers_mothers_contact}}">
                </div>
            </div>
        </div>
           
        <div class= "row">
            <div class="col">
                <label for="permanent_home_address">Permanet Home Address</label><br>
                <input type="text"  class="form-control" id="permanent_home_address" name="permanent_home_address" value="{{$student->permanent_home_address}}">
            </div>    
        </div>

        <div class= "row">
            <div class="col">
                <label for="detailed_present_address_aizawl">Detailed Present Address (Aizawl)</label><br>
                <input type="text"  class="form-control" id="detailed_present_address_aizawl" name="detailed_present_address_aizawl" value="{{$student->detailed_present_address_aizawl}}">
            </div>
        </div>

        <div class= "row">
            <div class="col">
                <div class="form-group">
                    <label for="name_of_guardian">Name of Local Guardian (If any)</label><br>
                    <input type="text" class="form-control" id="name_of_guardian" name="name_of_guardian" value="{{$student->name_of_guardian}}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="contact_of_guardian">Guardian Contact (If any)</label><br>
                    <input type="text"  class="form-control" id="contact_of_guardian" name="contact_of_guardian" value="{{$student->contact_of_guardian}}">
                </div>
            </div>
        </div>

        <div class= "row">
            <div class="col">
                <label for="address_of_guardian">Address of Local Guardian (If any)</label><br>
                <input type="text"  class="form-control" id="address_of_guardian" name="address_of_guardian" value="{{$student->address_of_guardian}}">
            </div>
        </div>

        <div class= "row">
            <div class ="col">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" value="{{$student->dob}}">
            </div>
            <div class="col">
                <label for="community">Community</label>
                <select name="community"  class="form-control">
                    <option value="st" {{ "st" == $student->community ? 'selected' : '' }}>ST</option>
                    <option value="sc" {{ "sc" == $student->community ? 'selected' : '' }}>SC</option>
                    <option value="obc" {{ "obc" == $student->community ? 'selected' : '' }}>OBC</option>
                    <option value="gen" {{ "gen" == $student->community ? 'selected' : '' }}>Gen</option>
                </select>
            </div>
            <div class="col">
                <label for="religion">Religion</label>
                <select name="religion" class="form-control">
                    <option value="Christianity">Christianity</option>
                    <option value="hinduism">Hinduism</option>
                    <option value="islam">Islam</option>
                    <option value="sikhism">Sikhism</option>
                    <option value="buddhism">Buddhism</option>
                    <option value="jainism">Jainism</option>
                    <option value="zoroastrianism">Zoroastrianism</option>
                    <option value="others">Others/Religion not specified </option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="ration_card">Ration Card</label>
                <select name="ration_card"  class="form-control">
                    <option value="bpl">BPL</option>
                    <option value="aay">AAY</option>
                    <option value="apl">APL</option>
                </select>
            </div>
            <div class="col">
                <label for="handicapped">Handicapped</label>
                <select name="handicapped"  class="form-control">
                    <option value="no" selected>No</option>
                    <option value="yes">Yes</option>
                </select>
            </div>
            <div class="col">
                <label for="urban_rural">Urban Rural</label>
                <select name="urban_rural"  class="form-control">
                    <option value="urban" selected>Urban</option>
                    <option value="rural">Rural</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="aadhaar">Aadhaar</label><br>
                    <input type="text"  class="form-control" id="aadhaar" name="aadhaar" value="{{$student->aadhaar}}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="mzu_registration">MZU Registration</label><br>
                    <input type="text"  class="form-control" id="mzu_registration" name="mzu_registration" value="{{$student->mzu_registration}}">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="college_registration">College Registration</label><br>
                    <input type="text"  class="form-control" id="college_registration" name="college_registration" value="{{$student->college_registration}}">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="result">Result</label><br>
                <input type="text"  class="form-control" id="result" name="result" value="{{$student->result}}">
            </div>
        </div>


        <br> <b>Semester I</b> <br>
        <div class="form-group form-check-inline">
                <select name="sem1_sub1" class="form-control mr-3" >
                    @foreach ($subjects as $subject)
                        <option value="{{ $subject->name }}"  {{$subject->name==$student->acquire->sem1_sub1 ?  'selected':''}}>{{ $subject->name}}</option>
                    @endforeach
                </select>
                <select name="sem1_sub2" class="form-control mr-3">
                    @foreach ($subjects as $subject)
                        <option value="{{ $subject->name }}"  {{$subject->name==$student->acquire->sem1_sub2 ?  'selected':''}}>{{ $subject->name}}</option>
                    @endforeach
                </select>
                <select name="sem1_sub3" class="form-control mr-3">
                    @foreach ($subjects as $subject)
                        <option value="{{ $subject->name }}"  {{$subject->name==$student->acquire->sem1_sub3 ?  'selected':''}}>{{ $subject->name}}</option>
                    @endforeach
                </select>
        </div>

        <br> <b>Semester II</b> <br>
        <div class="form-group form-check-inline">
            <select name="sem2_sub1" class="form-control mr-3">
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->name }}"  {{$subject->name==$student->acquire->sem2_sub1 ?  'selected':''}}>{{ $subject->name}}</option>
                @endforeach
            </select>
            <select name="sem2_sub2" class="form-control mr-3">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->name }}" {{$subject->name==$student->acquire->sem2_sub2 ?  'selected':''}}>{{ $subject->name}}</option>
            @endforeach
            </select>
            <select name="sem2_sub3" class="form-control mr-3">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->name }}" {{$subject->name==$student->acquire->sem2_sub3 ?  'selected':''}}>{{ $subject->name}}</option>
            @endforeach
            </select>
        </div>

    <br> <b>Semester III</b> <br>
        <div class="form-group form-check-inline">
            <select name="sem3_sub1" class="form-control mr-3">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->name }}"  {{$subject->name==$student->acquire->sem3_sub1 ?  'selected':''}}>{{ $subject->name}}</option>
            @endforeach
            </select>
            <select name="sem3_sub2" class="form-control mr-3">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->name }}" {{$subject->name==$student->acquire->sem3_sub2 ?  'selected':''}}>{{ $subject->name}}</option>
            @endforeach
            </select>
            <select name="sem3_sub3" class="form-control mr-3">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->name }}" {{$subject->name==$student->acquire->sem3_sub3 ?  'selected':''}}>{{ $subject->name}}</option>
            @endforeach
            </select>
        </div>
    <br> <b>Semester IV</b> <br>
        <div class="form-group form-check-inline">
            <select name="sem4_sub1" class="form-control mr-3">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->name }}" {{$subject->name==$student->acquire->sem4_sub1 ?  'selected':''}}>{{ $subject->name}}</option>
            @endforeach
            </select>
            <select name="sem4_sub2" class="form-control mr-3">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->name }}" {{$subject->name==$student->acquire->sem4_sub2 ?  'selected':''}}>{{ $subject->name}}</option>
            @endforeach
            </select>
            <select name="sem4_sub3" class="form-control mr-3">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->name }}" {{$subject->name==$student->acquire->sem4_sub3 ?  'selected':''}}>{{ $subject->name}}</option>
            @endforeach
            </select>
        </div>
    <br> <b>Semester V</b> <br>
        <div class="form-group form-check-inline">
            <select name="sem5_sub1" class="form-control mr-3">
                @foreach ($subjects as $subject)
                    <option value="{{ $subject->name }}" {{$subject->name==$student->acquire->sem5_sub1 ?  'selected':''}}>{{ $subject->name}}</option>
                @endforeach
            </select>
            <select name="sem5_sub2" class="form-control mr-3">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->name }}"  {{$subject->name==$student->acquire->sem5_sub2 ?  'selected':''}}>{{ $subject->name}}</option>
            @endforeach
            </select>
            <select name="sem5_sub3" class="form-control mr-3">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->name }}" {{$subject->name==$student->acquire->sem5_sub3 ?  'selected':''}}>{{ $subject->name}}</option>
            @endforeach
            </select>
        </div>
    <br> <b>Semester VI</b> <br>
        <div class="form-group form-check-inline">
            <select name="sem6_sub1" class="form-control mr-3">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->name }}" {{$subject->name==$student->acquire->sem6_sub1 ?  'selected':''}}>{{ $subject->name}}</option>
            @endforeach
            </select>
            <select name="sem6_sub2" class="form-control mr-3">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->name }}" {{$subject->name==$student->acquire->sem6_sub2 ?  'selected':''}}>{{ $subject->name}}</option>
            @endforeach
            </select>
            <select name="sem6_sub3" class="form-control mr-3">
            @foreach ($subjects as $subject)
                <option value="{{ $subject->name }}" {{$subject->name==$student->acquire->sem6_sub3 ?  'selected':''}}>{{ $subject->name}}</option>
            @endforeach
            </select>
        </div>
    <br>


    </div>
</div>

<input type="submit" value="submit">

{!! Form::close() !!}


@endsection