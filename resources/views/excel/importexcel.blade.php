@extends('admin.default')
@section('content')
<div class="container card bg-white p-3 rounded" style="width: 40rem;">
   <div class="form m-40">
      <h3 class="card-title">Bulk Upload</h3>
    

        {!! Form::open(['url' => '/student/importexcel','method'=>'post', 'enctype' =>'multipart/form-data']) !!}

        <input type="text" name="batch_title" class="form-control" placeholder="Upload Title" required>

        <input type="file" name="file" class="mt-2 form-control" required>
        <br>
        <div class="d-flex justify-content-center">
          <button class="btn" style="background-color:#ffc117;"><b>Import</b></button>
        </div>

        {!! Form::close() !!} 
    </div>
</div>
@endsection