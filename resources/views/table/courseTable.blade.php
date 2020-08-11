<table id="dataTable" class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>ID </th>
                        <th>Name</th>
                        <th>Details</th>
                        <th>Action</th>
                    </tr>
                </thead>
            
            <tbody class="table-striped">
                @foreach($subjects as $subject)
                <tr>
                 
                    <td>{{$subject->id}}</td>
                     <td>{{$subject->name}}</td>
                    <td>{{$subject->details}}</td>
                
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <span class="icon-holder mr-2"><a href='/course/{{$subject->id}}/edit' class="c-yellow-700 ti-pencil"></a></span>
                            </li>
                            <li class="list-inline-item">
                                {!! Form::open([
                                    'class'=>'delete',
                                    'url'  =>  "/course/{$subject->id}", 
                                    'method' => 'delete',
                                    ]) !!}
    
                                <button class="btn btn-danger btn-sm" title="{{ trans('app.delete_title') }}"><i class="ti-trash"></i></button>
                                            
                                {!! Form::close() !!}
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>
            </table>