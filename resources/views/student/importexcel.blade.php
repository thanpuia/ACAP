@extends('admin.default')
@section('content')

 {!! Form::open(['url' => '/student/importexcel','method'=>'post', 'enctype' =>'multipart/form-data']) !!}

 <input type="text" name="batch_title" class="form-control">

<input type="file" name="file" class="form-control">
<br>

<!-- <button class="btn btn-success">Import User Data</button> -->
<input type="submit" style="background-color:#ffc117;" class="btn  btn-lg " value="Import">


{!! Form::close() !!} 
@endsection