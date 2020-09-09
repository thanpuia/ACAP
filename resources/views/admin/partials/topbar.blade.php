




<div class="header navbar">
    <div class="header-container">
        <ul class="nav-left" id="topSearch">
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
            <!-- <li>
            <div class="digital_clock_wrapper">
            <div id="digit_clock_time"></div>
            <div id="digit_clock_date"></div>
        </div>
            </li> -->
            <li id="filter">
                                
             <!-- modal -->
                  <!-- Button trigger modal -->
                <a  href="" data-toggle="modal" data-target="#exampleModal">
                <span class="icon-holder">
                    <i class="c-yellow-600 ti-filter"></i>
                    </span>
                    <span class="title" >Filter</span>
                </a>
                
                <!-- Modal -->
               
                <script type="text/javascript">
                    $(document).ready(function () {
                        $("#exampleModal").appendTo("body");
                    });
                </script>
            </li>
            <li class="dropdown">
                <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                     
                    <div class="peer">
                        <span class="fsz-sm c-grey-900">{{ auth()->user()->name }}</span>
                    </div>
                </a>
                <ul class="dropdown-menu fsz-sm">

                    <li>
                        <a href="../../../../student/import" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                            <i class="ti-cloud-up mR-10"></i>
                            <span>Bulk Upload</span>
                        </a>
                    </li>

                    <li>
                        <a href="../../../../student/listbatch" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                            <i class="ti-bag mR-10"></i>
                            <span>Bulk List</span>
                        </a>
                    </li>

                    <li role="separator" class="divider"></li>

                    
                    <li>
                        <a href="../../../../student/showpromote" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                            <i class="ti-arrow-top-right mR-10"></i>
                            <span >Change Sem</span>
                        </a>
                    </li>

                    <li>
                        <a href="../../../../student/archive" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                            <i class="ti-archive mR-10"></i>
                            <span>Archive</span>
                        </a>
                    </li>
                   
                    <li>
                        <a href="../../../../admin/users" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                            <i class="ti-user mR-10"></i>
                            <span>Profile</span>
                        </a>
                    </li>

                     <li>
                        <a href="../../../../student/listtrash" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                            <i class="ti-trash mR-10"></i>
                            <span>Trash Bin</span>
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
