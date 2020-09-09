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
<!-- 
<style>
#digit_clock_time {
  font-family: 'Work Sans', sans-serif;
  color: #66ff99;
  font-size: 15px;
  text-align: center;
  padding-top: 5px;
}
#digit_clock_date {
  font-family: 'Work Sans', sans-serif;
  color: #66ff99;
  font-size: 15px;
  text-align: center;
  padding-top: 5px;
  padding-bottom: 5px;
}
 .digital_clock_wrapper{
    background-color: #333;
    padding: 5px;
    max-width: 350px;
    width: 100%;
    text-align: center;
    border-radius: 5px;
    margin: 1 auto;
} 
</style> -->

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
                <span>An official Government Aizawl College Admission Portal</span>
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
    <!-- <script type="text/javascript">
function currentTime() {
  var date = new Date(); /* creating object of Date class */
  var hour = date.getHours();
  var min = date.getMinutes();
  var sec = date.getSeconds();
  var midday = "AM";
  midday = (hour >= 12) ? "PM" : "AM"; /* assigning AM/PM */
  hour = (hour == 0) ? 12 : ((hour > 12) ? (hour - 12): hour); /* assigning hour in 12-hour format */
  hour = changeTime(hour);
  min = changeTime(min);
  sec = changeTime(sec);
  document.getElementById("digit_clock_time").innerText = hour + " : " + min + " : " + sec + " " + midday; /* adding time to the div */
 
  var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
  var days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
 
  var curWeekDay = days[date.getDay()]; // get day
  var curDay = date.getDate();  // get date
  var curMonth = months[date.getMonth()]; // get month
  var curYear = date.getFullYear(); // get year
  var date = curWeekDay+", "+curDay+" "+curMonth+" "+curYear; // get full date
  document.getElementById("digit_clock_date").innerHTML = date;
 
  var t = setTimeout(currentTime, 1000); /* setting timer */
}
 
function changeTime(k) { /* appending 0 before time elements if less than 10 */
  if (k < 10) {
    return "0" + k;
  }
  else {
    return k;
  }
}
 
currentTime();
 
</script>  -->

    <script src="{{ mix('/js/app.js') }}"></script>

    @yield('js')

 
</body>

</html>
