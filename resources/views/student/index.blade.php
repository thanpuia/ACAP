@extends('admin.default')
@section('content')


<h2>Search by</h2>
{!! Form::open(['url' => '/student/searchby','method'=>'post']) !!}
    <label for="searchby">Search by </label>
    <select name="searchby" >
        <option value="name">Name</option>
        <option value="collegeno">College No</option>
        <option value="universityno">University No</option>
        <option value="aadhaar">Aadhaar</option>
    
    </select>
    <input type = "text" id="keyword" name="keyword">
    <input type="submit" class="btn" value="Search">
{!! Form::close() !!}

<br>
<br>

<!-- {!! Form::open(['url' => '/student/searchbyname','method'=>'post']) !!}
<label for="name">Search by Name</label>
<input type="text" id="name" name="name">
<input type="submit" class="btn" value="Submit">
{!! Form::close() !!}  -->

<h2>Filter by</h2>


{!! Form::open(['url' => '/student/filterby','method'=>'post']) !!}

<label for="subject">Subject</label>
<select name="subject" id="subject">
    @foreach($subjects as $subject)
        <option value="{{ $subject->name}}">{{$subject->name}} </option>
    @endforeach
</select>

<br>

<label for="religion">Religion</label>
<select name="religion" >
    <option value="none">None</option>
    <option value="christianity">Christianity</option>
    <option value="hinduism">Hinduism</option>
    <option value="islam">Islam</option>
    <option value="sikhism">Sikhism</option>
    <option value="buddhism">Buddhism</option>
    <option value="jainism">Jainism</option>
    <option value="zoroastrianism">Zoroastrianism</option>
    <option value="others">Others/Religion not specified </option>
</select>

<br>

<label for="community">Community</label>
<select name="community" >
    <option value="none">none/all</option>
    <option value="st">ST</option>
    <option value="sc">SC</option>
    <option value="obc">OBC</option>
    <option value="gen">Gen</option>
</select>

<br>

<label for="semester">Semester</label>
<select name="semester" >
        <option value="none">none/all</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
    </select>   

    <br>

<label for="area">Area</label>
<select name="area" >
    <option value="none">none/all</option>
    <option value="urban">Urban</option>
    <option value="rural">Rural</option>
</select>

<br>

<label for="handicapped">Handicapped</label>
<select name="handicapped" >
    <option value="none">none</option>
    <option value="no">No</option>
    <option value="yes">Yes</option>
</select>   

<br>

<label for="sex">Sex</label>
<select name="sex">
    <option value="none">none</option>
    <option value="female">Female</option>
    <option value="male">Male</option>
</select> 

<br>

<input type="submit" class="btn" value="Submit">
{!! Form::close() !!} 


<!-- old START  -->
<!-- 
{!! Form::open(['url' => '/student/searchbysubject','method'=>'post']) !!}
<label for="name">Search by subject</label>
<select name="subject">
    @foreach($subjects as $subject)
        <option value="{{ $subject->name}}">{{$subject->name}} </option>
    @endforeach
<input type="submit" class="btn" value="Submit">
{!! Form::close() !!} 


{!! Form::open(['url' => '/student/searchbyreligion','method'=>'post']) !!}
<label for="religion">Search by Religion</label>
    <select name="religion" >
        <option value="none">None</option>
        <option value="christianity">Christianity</option>
        <option value="hinduism">Hinduism</option>
        <option value="islam">Islam</option>
        <option value="sikhism">Sikhism</option>
        <option value="buddhism">Buddhism</option>
        <option value="jainism">Jainism</option>
        <option value="zoroastrianism">Zoroastrianism</option>
        <option value="others">Others/Religion not specified </option>

    </select>
<input type="submit" class="btn" value="Submit">
{!! Form::close() !!} 


{!! Form::open(['url' => '/student/searchbycommunity','method'=>'post']) !!}
    <label for="community">Search by Community</label>
    <select name="community" >
        <option value="st">ST</option>
        <option value="sc">SC</option>
        <option value="obc">OBC</option>
        <option value="gen">Gen</option>
    </select>
    <input type="submit" class="btn" value="Submit">
{!! Form::close() !!}


{!! Form::open(['url' => '/student/searchbysemester','method'=>'post']) !!}
<label for="semester">Search by Semester</label>
<select name="semester" >
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
    </select>   
<input type="submit" class="btn" value="Submit">
{!! Form::close() !!} 


{!! Form::open(['url' => '/student/searchbyarea','method'=>'post']) !!}
<label for="area">Search by Area</label>
<select name="area" >
        <option value="urban">Urban</option>
        <option value="rural">Rural</option>
    </select>   
<input type="submit" class="btn" value="Submit">
{!! Form::close() !!} 


{!! Form::open(['url' => '/student/searchbydisabled','method'=>'post']) !!}
<label for="handicapped">Search by Handicapped</label>
<select name="handicapped" >
        <option value="no">No</option>
        <option value="yes">Yes</option>
    </select>   
<input type="submit" class="btn" value="Submit">
{!! Form::close() !!}  -->
<!-- old ends -->


<!-- 

<a href='/'>1. Mimal  Details/information kimchang enna (Get Student Info) </a> <br>
<a href='/'>2. Hming inang ho zawnna(Search by Name)</a><br>
<a href='/'>3. Subject in ang ho zawng lakchhuahna (A hming list leh a zat hriat nan)(Search by Subject)</a><br>
<a href='/'>4. Core Subject inang ho zawng lakchuahna (Hming leh a zat) </a><br>
<a href='/'>5. Sakhua (Religion) inang ho zawnchhuahna, Semester WiseA (Search By Religion)(Filter by semester)</a><br>
<a href='/'>6. Semester Wise Community inang ho zawng zawn chhuahna b (a zat leh an hming list)(Search by community)</a><br>
<a href='/'>7.	Semester Wise a zirlai awm zat te, Mipa leh Hmeichhia zat a hrang a enna.(Search by semsester)(FilterbyGender)</a><br>
<a href='/'>8.	Semester tin a Pass leh Fail enna. A pumpui leh Core wise/Paper Wise (Search by result)</a><br>
<a href='/'>9.	Roll No. in dawtin- Hming, Pa Hming, Registration No., Aadhaar No. leh Community leh Subject lak thlan chhuah te hian Excel-ah a Export theih a ngem? (List all)</a><br>
<a href='/'>10. Urban leh Rural zat semester Wise (Search by rural or urban) </a><br>
<a href='/'>11. Disabled zat hriatna/list (Search by Disable) </a><br> -->

<!-- 
<table class="table table-dark">
<tr>
    <th>Name </th>
    <th>College ROll no</th>
    <th>Uni Roll no</th>
    <th>Address</th>
    <th>Sem 1 Subj 1</th>
    <th>Sem 1 Subj 2</th>
    <th>Sem 2 Subj 1</th>
    <th>Sem 2 Subj 2</th>
    <th>View</th>
</tr>

@foreach($students as $student)
<tr>
    <td>{{$student->name}}</td>
    <td>{{$student->registration_number_college}}</td>
    <td>{{$student->registration_number_university}}</td>
    <td>{{$student->address}}</td>
    <td>{{$student->semester_one_subject_one}}</td>
    <td>{{$student->semester_one_subject_two}}</td>
    <td>{{$student->semester_two_subject_one}}</td>
    <td>{{$student->semester_two_subject_two}}</td>
    <td><a href='/student/{{$student->id}}' class="btn btn-info">show</a>   </td>
</tr>
@endforeach
</table> -->


@endsection