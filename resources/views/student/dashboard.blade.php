@extends('admin.default')
@section('content')
<h2>Students Statistics</h2>
<div class='row'>
   <div class='col-4'>
      <div class="card shadow" style="border-radius: 25px;">
         <div class="card-body">
            <h2 style="color:#7030fc;"> {{$studentCount}} </h2>
            <h5>Total Student</h5>
            <!-- <h3>Male:  {{$studentMale}}  Female:  {{$studentFemale}} </h3>  -->
         </div>
      </div>
   </div>
   <div class='col-4'>
      <div class="card shadow" style="border-radius: 25px;">
         <div class="card-body">
            <h2 style="color:#7030fc;"> {{$studentFemale}} </h2>
            <h5>Total Number of Girls </h5>
            <!-- <h5>Semester II   : {{$semester2}} </h5> -->
         </div>
      </div>
   </div>
   <div class='col-4'>
      <div class="card shadow" style="border-radius: 25px;">
         <div class="card-body" >
            <h2 style="color:#7030fc;"> {{$studentMale}} </h2>
            <h5>Total Number of Boys </h5>
         </div>
      </div>
   </div>
   <div class='col-4 mt-3'>
      <div class="card shadow" style="border-radius: 25px;">
         <div class="card-body" >
            <h2 style="color:#7030fc;"> {{$ba}} </h2>
            <h5>Arts Student </h5>
         </div>
      </div>
   </div>
   <div class='col-4 mt-3'>
      <div class="card shadow" style="border-radius: 25px;">
         <div class="card-body" >
            <h2 style="color:#7030fc;"> {{$bcom}} </h2>
            <h5>Commerce Student</h5>
         </div>
      </div>
   </div>
</div>
<h2 class="mt-4"> Religion  </h2>
<div class="row ml-2">
    <div class="card shadow" style="border-radius: 25px;">
        <div class="card-body justify-content-between">
        <div class="row ">
            <div class="col-auto">
                <h2 class="c-pink-200">{{$christianity}}</h2>
                <h5>
                Christianity
                <h5>
            </div>
            <div class="col-auto">
                <h2 class="c-pink-200">{{$hinduism}}</h2>
                <h5>
                Hinduism
                <h5>
            </div>
            <div class="col-auto">
                <h2 class="c-pink-200">{{$islam}}</h2>
                <h5>
                Islam
                <h5>
            </div>
            <div class="col-auto">
                <h2 class="c-pink-200">{{$sikhism}}</h2>
                <h5>
                Sikhism
                <h5>
            </div>
            <div class="col-auto">
                <h2 class="c-pink-200">{{$buddhism}}</h2>
                <h5>
                Buddhism
                <h5>
            </div>
            <div class="col-auto">
                <h2 class="c-pink-200">{{$jainism}}</h2>
                <h5>
                jainism
                <h5>
            </div>
            <div class="col-auto">
                <h2 class="c-pink-200">{{$zoroastrianism}}</h2>
                <h5>
                Zoroastrianism
                <h5>
            </div>
            <div class="col-auto">
                <h2 class="c-pink-200">{{$others}}</h2>
                <h5>
                Others
                <h5>
            </div>
        </div>
        </div>
    </div>
</div>

<h2 class="mt-4"> Area  </h2>
<div class="row ml-2">
    <div class="card shadow" style="border-radius: 25px;">
        <div class="card-body">
        <div class="row justify-content-start">
            <div class="col-auto">
                <h2 class="c-cyan-600">{{$urban}}</h2>
                <h5>Urban</h5>
            </div>
            <div class="col-auto">
                <h2 class="c-cyan-600">{{$rural}}</h2>
                <h5>Rural</h5>
            </div>
        </div>
        </div>
    </div>
</div>

<h2 class="mt-4"> Ration card  </h2>
<div class="row ml-2">
    <div class="card shadow" style="border-radius: 25px;">
        <div class="card-body">
        <div class="row justify-content-start">
            <div class="col-auto">
                <h2 class="c-green-600"> {{$bpl}}</h2>
                <h5>BPL</h5>
            </div>
            <div class="col-auto">
                <h2 class="c-green-600">{{$aay}}</h2>
                <h5>AAY</h5>
            </div>
            <div class="col-auto">
                <h2 class="c-green-600">{{$apl}}</h2>
                <h5>APL</h5>
            </div>
        </div>
        </div>
    </div>
</div>
<h2 class="mt-4"> Handicapped  </h2>
<div class="row ml-2">
    <div class="card shadow" style="border-radius: 25px;">
        <div class="card-body">
        <div class="row justify-content-start">
            <div class="col-auto">
                <h2 class="c-blue-600"> {{$handicappedYes}}</h2>
                <h5>Handicapped</h5>
            </div>
        </div>
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
