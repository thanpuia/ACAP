@extends('admin.default')
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

                <div class="form-group">

                    <label for="sex">Sex</label><br>
                    <select name="sex"  class="form-control">
                        <option value="female" {{'female'== $student->sex ? 'selected':''}}>Female</option>
                        <option value="Male" {{'male'== $student->sex ? 'selected':''}} >Male</option>
                    </select>
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

<input type="submit" style="background-color:#ffc117;" class="btn  btn-lg btn-block" value="Submit">

{!! Form::close() !!}


@endsection