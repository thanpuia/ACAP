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
                    <i class="ti-new-window"></i>
                </span>
                <span class="title">Export</span>
            </a>
        </div>
    </div>
    
    
        <div class="table-responsive rounded">
            @include('student.table',$students)
        </div>
</div>

<div class="paginator">
				{{ $students->appends($_GET)->onEachSide(1)->links() }}
		</div>

@endsection