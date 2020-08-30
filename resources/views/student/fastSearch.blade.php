@extends('admin.default')
@section('content')

<div class="card mB-30 p-20">


    <div class="row">
        <div class="col">
            <h2 class="mB-20">Student List Fast Search</h2>
        </div>
    </div>
    
    
        <div class="table-responsive rounded">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead class="thead-dark">
                    <tr>
                        <th>Name </th>
                        <th>Contact</th>
                        <th>Parent</th>
                        <th>Parent's Contact</th>
                        <th>Present Address</th>
                        <th>Aadhar</th>
                        <th>MZU Reg. No</th>
                        <th>College No.</th>
                        <th>Core</th>
                        <th>Current Semeter</th>
                        <th>DOB</th>
                        <th>Action</th>
                    </tr>
                </thead>
            
            <tbody class="table-striped">
                @foreach($students as $student)
                <tr>
                     <td><a href="{{route('student.show',$student->id)}}">{{$student->name}}</a></td>
                     <td>{{$student->contact}}</td>
                    <td>{{$student->fathers_mothers_name}}</td>
                    <td>{{$student->fathers_mothers_contact}}</td>
                    <td>{{$student->detailed_present_address_aizawl}}</td>
                    <td>{{$student->aadhaar}}</td>
                    <td>{{$student->mzu_registration}}</td>
                    <td>{{$student->college_registration}}</td>
                    <td>{{$student->acquire->core}}</td>
                    <td>{{$student->current_semester}}</td>
                    <td>{{ \Carbon\Carbon::parse($student->dob)->format('j F, Y') }}</td>                
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                            <span class="icon-holder mr-2"><a href='/student/{{$student->id}}/edit' class="text-dark ti-pencil-alt"></a></span> </li>
                            <li class="list-inline-item">
                                {!! Form::open([
                                    'class'=>'delete',
                                    'url'  =>  "/student/{$student->id}", 
                                    'method' => 'delete',
                                    ]) !!}
    
                                <button  style=" background: none!important;border: none;padding: 0!important;" class="btn btn-link" title="{{ trans('app.delete_title') }}"><i class="text-dark ti-trash"></i></button>
                                            
                                {!! Form::close() !!}
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>    
            </table>

        
        </div>
</div>

<script>
    document.getElementById("topSearch").style.display = "none";


</script>
@endsection