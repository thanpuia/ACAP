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
            <button onclick="history.go(-1)" class="font-weight-bold" style=" background: none!important;border: none;padding: 0!important;color:#ffc117">BACK </button>  
      </span> 
    </div>
  </div>
  
          <b> {{$student->contact}} </b><br>
          <b> {{$student->semester}} Semester </b><br>
          <b> {{$student->sem1_sub1}} Core </b><br>
        <div class="row ml-1">
          @if($student->status=='passed')
            <span class=" badge bgc-green-50 c-green-700 p-10 lh-0 tt-c badge-pill"> Passed</span>
          @elseif($student->status=='fail')
          <span class="badge bgc-red-50 c-red-700 p-10 lh-0 tt-c badge-pill"> Fail</span>
          @elseif($student->status=='warning')
          <span class="badge bgc-orange-50 c-orange-700 p-10 lh-0 tt-c badge-pill"> Warning</span>
          @elseif($student->status=='dropout')
          <span class="badge badge-danger p-10 lh-0 tt-c badge-pill" data-toggle="popover" title="Remarks" 
              data-content="{{$student->status_details}}"> Dropout</span>
          @elseif($student->status=='none')
          @endif
          
        </div>
          <span class="icon-holder mr-2 row justify-content-end">
            <ul class="list-inline">
            <li class="list-inline-item mr-4">

                <!-- Button trigger modal -->
                <button style=" background: none!important;border: none;padding: 0!important;" type="button"  data-toggle="modal" data-target="#statusModal">
                 <i class="text-dark ti-pulse"></i> Status
                </button>

                <!-- Modal -->
                <div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Update Status</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body d-flex justify-content-center">
                      {!! Form::open(['url' => 'student/studentstatus','method'=>'post']) !!}
                      <input type="hidden" name="student_id" value="{{$student->id}}">
                      <div class="row">
                        <div class="form-check form-check-inline mr-6">
                          <input class="form-check-input" type="radio" name="status" id="passed" value="passed" {{'passed'== $student->status ? 'checked':''}}>
                          <label class="form-check-label" for="passed">Passed</label>
                        </div>
                        <div class="form-check form-check-inline  mr-6">
                          <input class="form-check-input" type="radio" name="status" id="fail" value="fail" {{'fail'== $student->status ? 'checked':''}}>
                          <label class="form-check-label" for="fail">Fail</label>
                        </div>
                        <div class="form-check form-check-inline mr-6">
                          <input class="form-check-input" type="radio" name="status" id="dropout" value="dropout" {{'dropout'== $student->status ? 'checked':''}}>
                          <label class="form-check-label" for="dropout">Drop Out</label>
                        </div>
                        <div class="form-check form-check-inline mr-6">
                          <input class="form-check-input" type="radio" name="status" id="warning" value="warning" {{'warning'== $student->status ? 'checked':''}}>
                          <label class="form-check-label" for="warning">Warning</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="status" id="none" value="none" {{'none'== $student->status ? 'checked':''}}>
                          <label class="form-check-label" for="none">None</label>
                        </div>
                      </div>
                      <br>
                      <div class=""> 
                          <div class="form-group ">
                              <label for="remarks">Remarks</label><br>
                              <textarea rows="4"  class="form-control" id="remarks" name="remarks" placeholder="Enter your remark">{{$student->status_details}} </textarea>
                          </div>
                      </div>
                      <div class="d-flex justify-content-center">
                        <input type="submit" style="background-color:#ffc117" class="btn btn-lg " value="Submit">

                      </div>
                      {!!Form::close()!!}
                      </div>
                      
                    </div>
                  </div>
                </div>




              </li>
              <li class="list-inline-item mr-4">
                <a href="{{route('student.downloadPDF',$student->id)}}" class="text-dark ti-download"> Download (pdf)  </a> 

              </li>
              <!-- <li class="list-inline-item mr-4">
              <a href='/student/{{$student->id}}' class="text-dark ti-printer"> Print  </a>

              </li> -->
              <li class="list-inline-item mr-4">
              <a href='/student/{{$student->id}}/edit' class="text-dark ti-pencil-alt"> Edit</a>
              </li>
              <li class="list-inline-item">
                {!! Form::open([
                  'class'=>'delete',
                  'url'  =>  "/student/{$student->id}", 
                  'method' => 'delete',
                  ]) !!}
     
                  <button style=" background: none!important;border: none;padding: 0!important;"  ><i class="text-dark ti-trash"></i> Delete</button>
                                            
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