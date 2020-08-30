@extends('admin.default')

@section('content')

<div class="">
  <div class="card p-30">
  <div class="row">
    <div class="col">
        <h3> <b>{{$student->name}}</b> </h3>
    </div>
    <div class="col">
      <span class="icon-holder mr-2 row justify-content-end">
            <button onclick="history.go(-1)" class="font-weight-bold" style=" background: none!important;border: none;padding: 0!important;color:#ffc117">BACK </button>  
      </span> 
    </div>
  </div>
  
          <b> {{$student->contact}} </b><br>
          <b> {{$student->semester}} Semester </b><br>
          <b> {{$student->sem1_sub1}} Core </b><br>
        <div class="row ml-1">
          @if($student->status=='passed')
          <h4><span class="badge bgc-green-50 c-green-700 p-15 lh-0 tt-c badge-pill"> Passed</span></h4>
          @elseif($student->status=='fail')
          <h4><span class="badge bgc-red-50 c-red-700 p-15 lh-0 tt-c badge-pill"> Fail</span></h4>
          @elseif($student->status=='warning')
          <h4><span class="badge bgc-orange-50 c-orange-700 p-15 lh-0 tt-c badge-pill"> Warning</span></h4>
          @elseif($student->status=='dropout')
          <h4><span class="badge bgc-blue-50 c-blue-700 p-15 lh-0 tt-c badge-pill" data-toggle="popover" title="Remarks" 
              data-content="{{$student->status_details}}"> Dropout</span></h4>
          @elseif($student->status=='none')
          @endif
          
        </div>
          <span class="icon-holder mr-2 row justify-content-end">
            <ul class="list-inline">
            <li class="list-inline-item mr-4">
            <a href="{{route('student.restore',$student->id)}}"><i class="text-dark"></i>Restore</a>

            </li>
            
            </ul>
          </span>

<hr>
  
  <div class="row justify-content-between">
    <div class="col-4">
      
      <div class="row">
        <div class="col">
                  Parent name
        </div>
        <div class="col">
                  <b>: {{$student->fathers_mothers_name}} </b>
        </div>
      </div>      

      <div class="row">
        <div class="col">
                  Parent number
        </div>
        <div class="col">
        <b>: {{$student->fathers_mothers_contact}}</b>
        </div>
      </div>   

      <div class="row">
        <div class="col">
                  Permanent
        </div>
        <div class="col">
        <b>: {{$student->permanent_home_address}} </b>
        </div>
      </div>   

      <div class="row">
        <div class="col">
            Guardian
        </div>
        <div class="col">
        <b>: {{$student->name_of_guardian}} </b>
        </div>
      </div>   



    </div>
    <div class="col-3" >
      <div class="card p-40 shadow mb-5 bg-white rounded">

        <h4 class="mr-5"><b>Subject</b></h4>
        <hr>
        Core<br>
        <div class="mb-3" style="background-color:#ffc117;color:#000"><b>{{$student->acquire->core}} </b></div>
         

         <br>
        <br>Elective<br>
        @if($student->semester=="1")
                 <b> {{$student->acquire->sem1_sub1}}</b><br>
                 <b>{{$student->acquire->sem1_sub2}}</b><br>
                 <b>{{$student->acquire->sem1_sub3}}</b><br>
        @elseif($student->semester=="2")
        <b> {{$student->acquire->sem2_sub1}}</b><br>
        <b>        {{$student->acquire->sem2_sub2}}</b><br>
        <b>        {{$student->acquire->sem2_sub3}}</b><br>
        @elseif($student->semester=="3")
        <b>         {{$student->acquire->sem3_sub1}}</b><br>
        <b>       {{$student->acquire->sem3_sub2}}</b><br>
        <b>       {{$student->acquire->sem3_sub3}}</b><br>
        @elseif($student->semester=="4")
        <b>      {{$student->acquire->sem4_sub1}}</b><br>
        <b>       {{$student->acquire->sem4_sub2}}</b><br>
        <b>       {{$student->acquire->sem4_sub3}}</b><br>
        @elseif($student->semester=="5")
        <b>       {{$student->acquire->sem5_sub1}}</b><br>
        <b>       {{$student->acquire->sem5_sub2}}</b><br>
        <b>       {{$student->acquire->sem5_sub3}}</b><br>
        @elseif($student->semester=="6")
        <b>       {{$student->acquire->sem6_sub1}}</b><br>
        <b>       {{$student->acquire->sem6_sub2}}</b><br>
        <b>       {{$student->acquire->sem6_sub3}}</b><br>
        @endif
        
      </div>
    </div>
  </div>

  <a href='/student/{{$student->id}}/edit' class="btn btn-primary btn-block mt-4">EDIT</a> -->

  </div>
</div>
     
  
@endsection