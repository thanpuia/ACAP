@extends('admin.default')
@section('content')
<div class="card bg-white p-3 rounded">
   <div class="form m-40">
      <h3 class="card-title">Bulk Upload List</h3>

<table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead class="thead-dark">
                    <tr>
                        <th>Title </th>
                        <th>Upload Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
            
            <tbody class="table-striped">
                @foreach($batches as $batch)
                <tr>
                     <td><a href="{{ url('student/listsome/'.$batch->batch_upload_time)}}">{{$batch->batch_title}}</a></td>
                    <td>{{ \Carbon\Carbon::parse($batch->batch_upload_time)->format('j F, Y h:i:s') }}</td>
                
                    <td>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                {!! Form::open([
                                    'class'=>'delete',
                                    'url'  =>  "/student/deletebatch/{$batch->batch_upload_time}", 
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
  

@endsection