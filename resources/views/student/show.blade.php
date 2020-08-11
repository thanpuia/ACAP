@extends('admin.default')

@section('content')

<div class="container">
  <div class="card p-30">
  <div class="row">
    <div class="col">
        <h3> <b>{{$student->name}}</b> </h3>
    </div>
    <div class="col">
      <span class="icon-holder mr-2 row justify-content-end">
            <button onclick="history.go(-1)">  Go back </button>  
      </span> 
    </div>
  </div>
  
          <b> {{$student->contact}} </b><br>
          <b> {{$student->semester}} Semester </b><br>
          <b> {{$student->sem1_sub1}} Core </b><br>
          <span class="icon-holder mr-2 row justify-content-end">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href='/student/{{$student->id}}' class="c-yellow-700 ti-download"> Download  </a> 

              </li>
              <li class="list-inline-item">
              <a href='/student/{{$student->id}}' class="c-yellow-700 ti-printer"> Print  </a>

              </li>
              <li class="list-inline-item">
              <a href='/student/{{$student->id}}/edit' class="c-yellow-700 ti-pencil">Edit</a>
              </li>
              <li class="list-inline-item">
                {!! Form::open([
                  'class'=>'delete',
                  'url'  =>  "/student/{$student->id}", 
                  'method' => 'delete',
                  ]) !!}
    
                  <button class="btn btn-danger btn-sm" ><i class="ti-trash"></i></button>
                                            
                {!! Form::close() !!}
              </li>
            </ul>
          </span>

<hr>
    <div class="row">
      <div class="col">
        <b>Present Address: </b> {{$student->detailed_present_address_aizawl}}
      </div>
    </div>

    <div class="row">
      <div class="col">
        <b>Permanent Address: </b> {{$student->permanent_home_address}}
      </div>
    </div>

    <div class="row">
      <div class="col">
        <b>Guardian Name: </b> {{$student->name_of_guardian}}
      </div>
    
      <div class="col">
        <b>Guardian Mobile: </b> {{$student->contact_of_guardian}}
      </div>
    </div>

    <div class="row">
      <div class="col">
        <b>Guardian Address: </b> {{$student->address_of_guardian}}
      </div>
    </div>

    <div class="row">
      <div class="col">
      <b>Date Of Birth: </b> {{$student->dob}}

      </div>
      <div class="col">
      <b>ID Mark: </b> {{$student->identification_mark}}

      </div>
      <div class="col">
      <b>Handicapped: </b> {{$student->handicapped}}

      </div>
    </div>

    <div class="row">
      <div class="col">
        <b>Community: </b> {{$student->community}}
      </div>
      <div class="col">
        <b>Religion: </b> {{$student->religion}}
      </div>
      <div class="col">
        <b>Ration Card: </b> {{$student->ration_card}}
      </div>
      <div class="col">
        <b>Area: </b> {{$student->urban_rural}}
      </div>
    </div>

    <div class="row">
      <div class="col">
        <b>Aadhaar: </b> {{$student->aadhaar}}
      </div>
    </div>
<!--     
    <div class="row">
      <div class="col">

      </div>
      <div class="col">

      </div>
      <div class="col">

      </div>
    </div> -->
    <div class="row">
      <div class="col">

      </div>
      <div class="col">

      </div>
      <div class="col">

      </div>
    </div>
    
    <div class="row">
      <div class="col">

      </div>
      <div class="col">

      </div>
      <div class="col">

      </div>
    </div>

    <div class="row mt-2" >
      <div class="col">
        <h5>Semester 1</h5>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <b>Subject 1:</b> {{$student->acquire->sem1_sub1}} 
      </div>
      <div class="col">
        <b>Subject 2:</b> {{$student->acquire->sem1_sub2}} 
      </div>
      <div class="col">
        <b>Subject 3:</b> {{$student->acquire->sem1_sub3}}
      </div>  
    </div>

    <div class="row mt-2">
      <div class="col">
        <h5>Semester 2</h5>
      </div>
    </div>
    <div class="row">
          <div class="col">
              <b>Subject 1:</b> {{$student->acquire->sem2_sub1}}
          </div>
          <div class="col">
              <b>Subject 2:</b> {{$student->acquire->sem2_sub2}} 
          </div>
          <div class="col">
              <b>Subject 3:</b> {{$student->acquire->sem2_sub3}}
          </div>
    </div>

    <div class="row mt-2">
      <div class="col">
        <h5>Semester 3</h5>
      </div>
    </div>
    <div class="row">
          <div class="col">
              <b>Subject 1:</b> {{$student->acquire->sem3_sub1}}
          </div>
          <div class="col">
              <b>Subject 2:</b> {{$student->acquire->sem3_sub2}} 
          </div>
          <div class="col">
              <b>Subject 3:</b> {{$student->acquire->sem3_sub3}}
          </div>
    </div>

    
    <div class="row mt-2">
      <div class="col">
        <h5>Semester 4</h5>
      </div>
    </div>
    <div class="row">
          <div class="col">
              <b>Subject 1:</b> {{$student->acquire->sem4_sub1}}
          </div>
          <div class="col">
              <b>Subject 2:</b> {{$student->acquire->sem4_sub2}} 
          </div>
          <div class="col">
              <b>Subject 3:</b> {{$student->acquire->sem4_sub3}}
          </div>
    </div>

    
    <div class="row mt-2">
      <div class="col">
        <h5>Semester 5</h5>
      </div>
    </div>
    <div class="row">
          <div class="col">
              <b>Subject 1:</b> {{$student->acquire->sem5_sub1}}
          </div>
          <div class="col">
              <b>Subject 2:</b> {{$student->acquire->sem5_sub2}} 
          </div>
          <div class="col">
              <b>Subject 3:</b> {{$student->acquire->sem5_sub3}}
          </div>
    </div>


    <div class="row mt-2">
      <div class="col">
        <h5>Semester 6</h5>
      </div>
    </div>
    <div class="row">
          <div class="col">
              <b>Subject 1:</b> {{$student->acquire->sem6_sub1}}
          </div>
          <div class="col">
              <b>Subject 2:</b> {{$student->acquire->sem6_sub2}} 
          </div>
          <div class="col">
              <b>Subject 3:</b> {{$student->acquire->sem6_sub3}}
          </div>
    </div>
     <a href='/student/{{$student->id}}/edit' class="btn btn-primary btn-block mt-4">EDIT</a>

  </div>
</div>
     
  
@endsection