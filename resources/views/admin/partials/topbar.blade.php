<div class="header navbar">
    <div class="header-container">
        <ul class="nav-left">
            <li>
                <a id='sidebar-toggle' class="sidebar-toggle" href="javascript:void(0);">
                    <i class="ti-menu"></i>
                </a>
            </li>
        
            {!! Form::open(['url' => '/student/searchby','method'=>'get']) !!}
            <li class="no-pdd-right">
                <table class="mt-2">
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
            </li>
            {!! Form::close() !!}

        </ul>
        <ul class="nav-right">
            <li>
                                
             <!-- modal -->
                  <!-- Button trigger modal -->
                <a  href="" data-toggle="modal" data-target="#exampleModal">
                <span class="icon-holder">
                    <i class="c-yellow-600 ti-filter"></i>
                    </span>
                    <span class="title">Filter</span>
                </a>
                
                <!-- Modal -->
                <div  class="modal fade bd-example-modal-lg"  id="exampleModal" data-backdrop="false" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Filter By</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body p-29">

                                {!! Form::open(['url' => '/student/filterby','method'=>'get']) !!}

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
                                            
                                        </div>
                                    </div>
                                        
                                    

                                    <input class="btn btn-warning btn-block" type="submit" class="btn" value="Submit">
                                {!! Form::close() !!} 


                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
    $(document).ready(function () {


        $("#exampleModal").appendTo("body");


        });
</script>
            </li>
            <li class="dropdown">
                <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                    <div class="peer mR-10">
                        <img class="w-2r bdrs-50p" src="{{ auth()->user()->avatar }}" alt="">
                    </div>
                    <div class="peer">
                        <span class="fsz-sm c-grey-900">{{ auth()->user()->name }}</span>
                    </div>
                </a>
                <ul class="dropdown-menu fsz-sm">
                     <li>
                        <a href="../../../../student/listtrash" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                            <i class="ti-trash mR-10"></i>
                            <span>Trash Bin</span>
                        </a>
                    </li>
                    <li>
                        <a href="../../../../admin/users" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                            <i class="ti-user mR-10"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                   
                    <li role="separator" class="divider"></li>
                    <li>
                        <a href="/logout" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                            <i class="ti-power-off mR-10"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>




    </div>
</div>
