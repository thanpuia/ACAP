@extends('admin.default')

@section('content')

<div class="h-100 d-flex justify-content-center align-items-center">

    <!-- Button trigger modal -->
  
        <button type="button"  style="background-color:#ffc117;" class="btn btn-lg m-5" data-toggle="modal" data-target="#promote">
       <b> Promote</b>
        </button>
        <br>
    <button type="button" class="btn btn-lg btn-secondary m-5" data-toggle="modal" data-target="#demote">
    Demote
    </button>


   
      


</div>


<!-- Modal -->
<div class="modal fade" id="promote" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Promote All</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Promote all students from all semester 
        {!! Form::open(['url' => '/student/promote','method'=>'post']) !!}
            <div class="form-group">
                <label for="semester">Semester</label>
                <select name="semester" class="form-control">
                    <option value="1">1st Semester</option>
                    <option value="2">2nd Semester</option>
                    <option value="3">3rd Semester</option>
                    <option value="4">4th Semester</option>
                    <option value="5">5th Semester</option>
                    <option value="6">6th Semester</option>

                    <option value="7">All Semester</option>
                </select>
            </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Ok</button>

        {!!Form::close() !!}
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="demote" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Demote All</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Demote all students from all semester 
        {!! Form::open(['url' => '/student/promote','method'=>'post']) !!}
            <div class="form-group">
                <label for="semester">Semester</label>
                <select name="semester" class="form-control">
                    <option value="91">1st Semester</option>
                    <option value="92">2nd Semester</option>
                    <option value="93">3rd Semester</option>
                    <option value="94">4th Semester</option>
                    <option value="95">5th Semester</option>
                    <option value="96">6th Semester</option>

                    <option value="97">All Semester</option>
                </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Ok</button>

        {!!Form::close() !!}
      </div>
    </div>
  </div>
</div>
@endsection