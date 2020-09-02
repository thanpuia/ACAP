@extends('admin.default')
@section('content')
<div class="card bg-white p-3 rounded">
   <div class="form m-40">
      <h3 class="card-title">Bulk Upload</h3>
    

        {!! Form::open(['url' => '/student/importexcel','method'=>'post', 'enctype' =>'multipart/form-data']) !!}

        <input type="text" name="batch_title" class="form-control" placeholder="Upload Title">

        <input type="file" name="file" class="form-control">
        <br>

        <!-- <button class="btn btn-success">Import User Data</button> -->
        <input type="submit" style="background-color:#ffc117;" class="btn  btn-lg " value="Import">


        {!! Form::close() !!} 
    </div>
</div>
@endsection