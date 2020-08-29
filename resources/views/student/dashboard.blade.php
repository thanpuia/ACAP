@extends('admin.default')
@section('content')



 
<h2>Students Statistics</h2>

<div class='row'>


    <div class='col'>

        <div class="card" style="border-radius: 25px;">
            <div class="card-body">
                <h2 style="color:#7030fc;"> {{$studentCount}} </h2>
                <h4>Total Student
                <!-- <h3>Male:  {{$studentMale}}  Female:  {{$studentFemale}} </h3>  -->
            </div>
        </div>
    </div>
    <div class='col'>
        <div class="card" style="border-radius: 25px;">
            <div class="card-body">
                <h2 style="color:#7030fc;"> {{$studentFemale}} </h2>
                <h4>Total Number of Girls </h4>
                <!-- <h5>Semester II   : {{$semester2}} </h5> -->
               
            </div>
        </div>
    </div>
    <div class='col'>
        <div class="card" style="border-radius: 25px;">
            <div class="card-body" >
                <h2 style="color:#7030fc;"> {{$studentMale}} </h2>
                <h4>Total Number of Boys </h4>
            </div>
        </div>
    </div>
</div>

    <div class="row pt-5">
        <div class="col">
       <h2> Religion  </h2>
            <div class="card" style="border-radius: 25px;">
                <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h2 class="c-red-800">{{$christianity}}</h2>
                        <h4>Christianity</h4>
                    </div>
                    <div class="col">
                        <h2 class="c-red-800">{{$hinduism}}</h2>
                        <h4>Hinduism</h4>
                    </div>
                    <div class="col">
                        <h2 class="c-red-800">{{$islam}}</h2>
                        <h4>Islam</h4>
                    </div>
                    <div class="col">
                        <h2 class="c-red-800">{{$sikhism}}</h2>
                        <h4>Sikhism</h4>
                    </div>
                    <div class="col">
                        <h2 class="c-red-800">{{$buddhism}}</h2>
                        <h4>Buddhism</h4>
                    </div>
                    <div class="col">
                        <h2 class="c-red-800">{{$jainism}}</h2>
                        <h4>jainism</h4>
                    </div>
                    <div class="col">
                        <h2 class="c-red-800">{{$zoroastrianism}}</h2>
                        <h4>Zoroastrianism</h4>
                    </div>
                    <div class="col">
                        <h2 class="c-red-800">{{$others}}</h2>
                        <h4>Others</h4>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-5 ">
    <h2> Area</h2>
        <br>
            <div class="card" style="border-radius: 25px;">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h2 class="c-blue-600">{{$urban}}</h2>
                            <h5>Urban</h5>
                        </div>
                        <div class="col">
                            <h2 class="c-blue-600">{{$rural}}</h2>
                            <h5>Rural</h5>
                        </div>
                    </div>
                </div>
            </div>
    </div>
        <div class="col">
            <div class="card rounded-0">
                <div class="card-body">
                    <h2 class="c-blue-600">Ration Card</h2>
                    <h5>BPL: {{$bpl}}</h5>
                    <h5>AAY: {{$aay}}</h5>
                    <h5>APL: {{$apl}}</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2 class="c-blue-600">Handicapped</h2>
                    <h5>Handicapped: {{$handicappedYes}}</h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!--  return view('student.dashboard',compact('subjects','studentCount','studentMale','studentFemale',
            'semester1','semester2','semester3','semester4','semester5','semester6',
            'st','sc','obc','gen',
            'christianity','others','zoroastrianism','jainism','buddhism','sikhism','islam','hinduism',
            'urban','rural','handicappedYes','handicappedNo','bpl','aay','apl'  ));
 -->