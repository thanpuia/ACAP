@extends('admin.default')
@section('content')
<div class="container">
        <div class="table-responsive">
            <table class="table-bordered table-sm">
            <tr>
                <th>Name </th>
                <th>Roll No</th>
                <th>University No</th>
                <th>Semester</th>
                <th>Core Subject</th>
                <th>Community</th>
                <th>Handicapped</th>
                <th>Religion</th>
                <th>Address</th>
            
                <th>View</th>
            </tr>

            @foreach($students as $student)
            <tr>
                <td>{{$student->name}}</td>
                <td>{{$student->college_registration}}</td>
                <td>{{$student->mzu_registration}}</td>
                <td>{{$student->semester}}</td>
                <td>{{$student->sem1_sub1}}</td>
                <td>{{$student->community}}</td>
                <td>{{$student->handicapped}}</td>
                <td>{{$student->religion}}</td>
                <td>{{$student->detailed_present_address_aizawl}}</td>


                <td><a href='/student/{{$student->id}}' class="btn btn-info">show</a>   </td>
            </tr>
            @endforeach
            </table>
        </div>
</div>
@endsection