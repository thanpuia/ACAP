@extends('admin.default')
@section('content')
    <div class="card mB-30 p-20">
        <h2 class="mB-20">Trash</h2>
        <div class="table-reponsive rounded">
            <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead class="thead-dark">
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Deleted At </th>
                    <th>Action</th>
                </thead>
                <tbody class="table-striped">
                    @foreach($restores as $restore)
                        <tr>    
                            <td><a href="{{route('student.show',$restore->id)}}" >{{$restore->name}}</a> </td>
                            <td>{{$restore->contact}} </td>
                            <td>{{$restore->deleted_at->format('d-m-Y h:i:s A')}} </td>
                            <td><a href="{{route('student.restore',$restore->id)}}"><i class="text-dark"></i>Restore</a> </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection