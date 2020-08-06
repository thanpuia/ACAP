@extends('admin.default')
@section('content')

<table class="table table-dark">
<tr>
    <th>Name </th>
    <th>College ROll no</th>
    <th>Uni Roll no</th>
    <th>Address</th>
    
    <th>View</th>
</tr>

@foreach($acquires as $acquire)
<tr>
    <td>{{$acquire->student->name}}</td>
    <td>{{$acquire->student->mzu_registration}}</td>
    <td>{{$acquire->student->college_registration}}</td>
    <td>{{$acquire->student->sex}}</td>
   
    <td><a href='/student/{{$acquire->student->id}}' class="btn btn-info">show</a>   </td>
</tr>
@endforeach
</table>
@endsection