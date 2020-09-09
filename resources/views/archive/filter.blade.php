@extends('admin.default')
@section('content')

<div class="card mB-30 p-20">


    <div class="row">
        <div class="col">
            <h2 class="mB-20"><a href="/student/archive" style="color:grey;">Archive List</a></h2>
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
    <div class="row ml-1 mb-2">
        <div class="col">
            {!! Form::open(['url' => '/student/searchby_archive','method'=>'get']) !!}
                <table>
                    <tr>
                        <td>         
                            <select name="searchby"  class="form-control mr--1">
                            <option value="name" selected>Name</option>
                            <option value="collegeno">College Roll Number</option>
                            <option value="universityno">University Registration Number</option>
                            <option value="aadhaar">Aadhaar</option>
                            </select>
                        </td>
                        <td>
                            <input  type="text"  class="form-control" name="keyword" placeholder="Search...">
                        </td>
                    </tr>
                </table>

            {!! Form::close() !!}  
        </div>
        <div class="col">
        <a  href="" data-toggle="modal" data-target="#archiveModal">
                <span class="icon-holder">
                    <i class="c-yellow-600 ti-filter"></i>
                    </span>
                    <span class="title" >Filter</span>
                </a>
        </div>
        
    </div>
    
    
        <div class="table-responsive rounded">
            @include('table.studentTable',$students)
        </div>
</div>



    <!-- MODAL START -->
    <div  class="modal fade bd-example-modal-lg"  id="archiveModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Filter By</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body p-29">
                                
                                {!! Form::open(['url' => '/student/filterby_archive','method'=>'get']) !!}

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="subject">Subject</label><br>
                                                <select name="subject" id="subject" class="form-control">
                                                    @foreach($subjects as $subject)
                                                        <option value="{{ $subject->name}}">{{$subject->name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="religion">Religion</label><br>
                                                <select name="religion" class="form-control">
                                                    <option value="none">None</option>
                                                    <option value="christianity">Christianity</option>
                                                    <option value="hinduism">Hinduism</option>
                                                    <option value="islam">Islam</option>
                                                    <option value="sikhism">Sikhism</option>
                                                    <option value="buddhism">Buddhism</option>
                                                    <option value="jainism">Jainism</option>
                                                    <option value="zoroastrianism">Zoroastrianism</option>
                                                    <option value="others">Others/Religion not specified </option>
                                                </select>

                                            </div>
                                            <div class="form-group">
                                                <label for="community">Community</label><br>
                                                <select name="community" class="form-control">
                                                    <option value="none">none/all</option>
                                                    <option value="st">ST</option>
                                                    <option value="sc">SC</option>
                                                    <option value="obc">OBC</option>
                                                    <option value="gen">Gen</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="semester">Semester</label><br>
                                                <select name="semester" class="form-control">
                                                    <option value="none">none/all</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>   
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group">
                                                <label for="urban_rural">Area</label><br>
                                                <select name="urban_rural" class="form-control">
                                                    <option value="none">none/all</option>
                                                    <option value="urban">Urban</option>
                                                    <option value="rural">Rural</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                            <label for="handicapped">Handicapped</label><br>
                                                <select name="handicapped" class="form-control">
                                                    <option value="none">none</option>
                                                    <option value="no">No</option>
                                                    <option value="yes">Yes</option>
                                                </select>   
                                            </div>
                                            <div class="form-group">
                                            <label for="sex">Sex</label><br>
                                                <select name="sex" class="form-control">
                                                    <option value="none">none</option>
                                                    <option value="female">Female</option>
                                                    <option value="male">Male</option>
                                                </select> 
                                            </div> 
                                            
                                            <div class="form-group">
                                                <label for="year">Year</label><br>
                                                <select name="year" class="form-control">
                                                @for($i=1950;$i<2050;$i++)
                                                    @if($i!=2010)
                                                    <option value="{{$i}}" >{{$i}}</option>
                                                    @else
                                                    <option value="{{$i}}" selected >{{$i}}</option>
                                                    @endif
                                                @endfor
                                                <option value="none" >none</option>

                                                </select> 
                                            </div>
                                            
                                        </div>
                                    </div>
                                        
                                    

                                    <input style="background-color:#ffc117;" class="btn btn-block" type="submit" class="btn" value="Submit">
                                {!! Form::close() !!} 


                            </div>
                        </div>
                    </div>
                </div>

              
    <!-- MODAL END -->



<script>
    document.getElementById("topSearch").style.display = "none";
    document.getElementById("filter").style.display = "none";

</script>
@endsection