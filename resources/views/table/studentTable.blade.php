<table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead class="thead-dark">
                    <tr>
                        <th>Roll No </th>
                        <th>Name</th>
                        <th>Regd. No</th>
                        <th>Pa Hming</th>
                        <th>Sem</th>
                        <th>Core Subject</th>
                        <th>D.O.B</th>
                        <th>Phone</th>
                        <th>Aadhaar</th>
                               
                        <th>Action</th>
                    </tr>
                </thead>
            
            <tbody class="table-striped">
          
                @foreach($students as $student)
                <tr>
                
                     <td><a href="{{route('student.show',$student->id)}}" style="color:#3b3b3b;">
                     {{$student->college_registration}}</a></td>
                     <td><a href="{{route('student.show',$student->id)}}" style="color:#3b3b3b;">
                     {{$student->name}}</a></td>
                    <td><a href="{{route('student.show',$student->id)}}" style="color:#3b3b3b;">
                    {{$student->mzu_registration}}</a></td>
                    <td><a href="{{route('student.show',$student->id)}}" style="color:#3b3b3b;">
                    {{$student->fathers_mothers_name}}</a></td>
                    <td><a href="{{route('student.show',$student->id)}}" style="color:#3b3b3b;">
                    {{$student->semester}}</a></td>
                    <td><a href="{{route('student.show',$student->id)}}" style="color:#3b3b3b;">
                    {{$student->acquire->core??""}}</a></td>            
                    <td><a href="{{route('student.show',$student->id)}}" style="color:#3b3b3b;">
                    {{ \Carbon\Carbon::parse($student->dob)->format('d/m/Y') }}</a></td>
                    <td><a href="{{route('student.show',$student->id)}}" style="color:#3b3b3b;">
                    {{$student->contact}}</a></td>
                    <td><a href="{{route('student.show',$student->id)}}" style="color:#3b3b3b;">
                    {{$student->aadhaar}}</a></td>
                    
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
            @if($students->isEmpty())
            No matching records found
            @endif   
            <div class="paginator">
				{{ $students->appends($_GET)->onEachSide(1)->links() }}
		</div>