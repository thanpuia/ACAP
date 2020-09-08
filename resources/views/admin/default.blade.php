    <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'ACAP') }}</title> -->
    <title>GACAP</title>
    <link rel = "icon" href =  "/images/acap_mini.png"

        type = "image/x-icon"> 

        


    <!-- Styles -->
	<link href="{{ mix('/css/app.css') }}" rel="stylesheet"> 
	{{-- <link href="{{ mix('/css/rtl.css') }}" rel="stylesheet">  --}}
<!-- the above is new for multiselect -->
 
<!-- the above is new for multiselect -->



	@yield('css')


</head>

<body class="app">

 

    @include('admin.partials.spinner')

    <div>
        <!-- #Left Sidebar ==================== -->
        @include('admin.partials.sidebar')

        <!-- #Main ============================ -->
        <div class="page-container">
            <!-- ### $Topbar ### -->
            @include('admin.partials.topbar')

            <!-- ### $App Screen Content ### -->
            <main class='main-content bgc-grey-100'>
                <div id='mainContent'>
                    <div class="container-fluid">

                        <h4 class="c-grey-900 mT-10 mB-30">@yield('page-header')</h4>

						@include('admin.partials.messages') 
						@yield('content')

                    </div>
                </div>
            </main>

            <!-- ### $App Screen Footer ### -->
            <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
                <span>An official Government Aizawl College Administration Portal</span>
            </footer>
        </div>
    </div>


    <!-- MODAL START -->
    <div  class="modal fade bd-example-modal-lg"  id="exampleModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        
                                    

                                    <input style="background-color:#ffc117;" class="btn btn-block" type="submit" class="btn" value="Submit">
                                {!! Form::close() !!} 


                            </div>
                        </div>
                    </div>
                </div>
    <!-- MODAL END -->


    <script src="{{ mix('/js/app.js') }}"></script>

    @yield('js')

 
</body>

</html>
