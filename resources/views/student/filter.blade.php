@extends('admin.default')
@section('content')

<div class="card mB-30 p-20">


    <div class="row">
        <div class="col">
            <h2 class="mB-20">Student List</h2>
        </div>
        <div class="col">
               
            <a class="float-right" href="export">
                <span class="icon-holder">
                    <i class="ti-export"></i>
                </span>
                <span class="title">Export</span>
            </a>
        </div>
    </div>
    
    
        <div class="table-responsive rounded">
            @include('table.studentTable',$students)
        </div>
</div>



@endsection