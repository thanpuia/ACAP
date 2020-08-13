<table id="dataTable" class="table table-striped">
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
                <tr>
                     <td><a href="{{route('student.show',$student->id)}}">{{$student->name}}</a></td>
                     <td>{{$student->mzu_registration}}</td>
                    <td>{{$student->contact}}</td>
                    <td>{{$student->semester}}</td>
                    <td>{{$student->dob}}</td>
                    <td>{{$student->sem1_sub1}}</td>
                
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