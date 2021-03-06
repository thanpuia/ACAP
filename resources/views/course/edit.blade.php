@extends('admin.default')
@section('content')

<div class="card bg-white p-20 rounded">
    <div class="form p-5">
    
    <div class="row">
    <div class="col">
        <h3> <a href="/course/{{$course->id}}/edit" style="color:grey;">Edit Subject</a> </h3>
    </div>
    <div class="col">
      <span class="icon-holder mr-2 row justify-content-end">
      <button onclick="history.go(-1)" class="font-weight-bold" style=" background: none!important;border: none;padding: 0!important;color:#ffc117">BACK </button>  
      </span> 
    </div>
  </div>
        {!! Form::open(['url' => "/course/{$course->id}",'method'=>'put']) !!}
        
        <div class="row">
            <div class="form-group">
                <label for="name">Name</label><br>
                <input type="text" class="form-control" id="name" name="name" value="{{$course->name}}">
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <label for="details">Details</label><br>
                <textarea rows="4"  class="form-control" id="details" name="details">{{$course->details}}</textarea>
            </div>
        </div>

        <div class="peer">
         <button class="btn btn-lg " style="background-color:#ffc117;"><b>Update</b></button>
      </div>

        {!! Form::close() !!}

    </div>
</div>
@endsection