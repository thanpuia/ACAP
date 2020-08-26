<table id=" " class="table table-striped table-bordered" cellspacing="0" width="100%">
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
                                <span class="icon-holder mr-2"><a href='/course/{{$subject->id}}/edit' class="text-dark ti-pencil-alt"></a></span>
                            </li>
                            <li class="list-inline-item">
                                {!! Form::open([
                                    'class'=>'delete',
                                    'url'  =>  "/course/{$subject->id}", 
                                    'method' => 'delete',
                                    ]) !!}
    
                                <button  style=" background: none!important;border: none;padding: 0!important;" class="btn btn-link"  title="{{ trans('app.delete_title') }}"><i class="text-dark ti-trash"></i></button>
                                            
                                {!! Form::close() !!}
                            </li>
                        </ul>
                    </td>
                </tr>
            @endforeach
            </tbody>
            </table>
            <div class="paginator">
				{{ $subjects->appends($_GET)->onEachSide(1)->links() }}
		</div>