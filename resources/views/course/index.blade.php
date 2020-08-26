@extends('admin.default')
@section('content')

    <div class="row">
        <div class="col">
            <h2 class="mB-20">Subject List</h2>
        </div>
        <div class="col">
               
            <a class="float-right" href="course/create">
                <span class="icon-holder">
                    <i class="ti-new-window"></i>
                </span>
                <span class="title">Add Subject</span>
            </a>
        </div>
    </div>
    
  

<div class="table-responsive rounded">
            @include('table.courseTable',$subjects)
        </div>
@endsection