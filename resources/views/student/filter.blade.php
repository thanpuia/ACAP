@extends('admin.default')
@section('content')

<div class="card mB-30 p-20">



    <h2 class="mB-20">Student List</h2>
    
    <a class="btn btn-info" href="export">Export File</a>
        <div class="table-responsive rounded">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Name </th>
                        <th>University No</th>
                        <th>Phone No</th>
                        <th>Semester</th>
                        <th>DOB</th>
                        <th>Core Subject</th>
                       
                        <th>Action</th>
                    </tr>
                </thead>
            
            <tbody class="table-striped">
                @foreach($students as $student)
                <tr onclick="window.location='{{$student->id}}'">
                 
                    <td>{{$student->name}}</td>
                     <td>{{$student->mzu_registration}}</td>
                    <td>{{$student->contact}}</td>
                    <td>{{$student->semester}}</td>
                    <td>{{$student->dob}}</td>
                    <td>{{$student->sem1_sub1}}</td>
                
                    <td>
                    <span class="icon-holder mr-2"><a href='/student/{{$student->id}}/edit' class="c-yellow-700 ti-pencil-alt"></a></span> 
                    <span class="icon-holder mr-2"><a href='/student/{{$student->id}}' class="ti-trash"></a>  </span>
                    </td>
                </tr>
            @endforeach
            </tbody>
            </table>
        </div>
</div>

<div class="paginator">
				{{ $students->appends($_GET)->onEachSide(1)->links() }}
		</div>

@endsection