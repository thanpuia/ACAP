@extends('admin.default')
@section('content')
<h5>Students Statistics</h5>
<div class='row'>
   <div class='col-4'>
      <div class="card" style="border-radius: 25px;">
         <div class="card-body">
            <h1 style="color:#7030fc; font-size:45px;"> {{$studentCount}} </h1>
            Total Student
            <!-- <h3>Male:  {{$studentMale}}  Female:  {{$studentFemale}} </h3>  -->
         </div>
      </div>
   </div>
   <div class='col-4'>
      <div class="card" style="border-radius: 25px;">
         <div class="card-body">
            <h2 style="color:#7030fc;font-size:45px;"> {{$studentFemale}} </h2>
            Total Number of Girls
            <!-- <h5>Semester II   : {{$semester2}} </h5> -->
         </div>
      </div>
   </div>
   <div class='col-4'>
      <div class="card" style="border-radius: 25px;">
         <div class="card-body" >
            <h2 style="color:#7030fc;font-size:45px;"> {{$studentMale}} </h2>
            Total Number of Boys
         </div>
      </div>
   </div>
   <div class='col-4 mt-3'>
      <div class="card" style="border-radius: 25px;">
         <div class="card-body" >
            <h2 style="color:#7030fc;font-size:45px;"> {{$ba}} </h2>
            Arts Student
         </div>
      </div>
   </div>
   <div class='col-4 mt-3'>
      <div class="card" style="border-radius: 25px;">
         <div class="card-body" >
            <h2 style="color:#7030fc;font-size:45px;"> {{$bcom}} </h2>
            Commerce Student
         </div>
      </div>
   </div>
</div>
<h5 class="mt-4"> Religion  </h5>
<div class="row ml-2">
    <div class="card" style="border-radius: 25px;">
        <div class="card-body justify-content-between">
        <div class="row ">
            <div class="col-auto">
                <h1  style="font-size:45px;" class="c-pink-200">{{$christianity}}</h1>
                 
                Christianity
                
            </div>
            <div class="col-auto">
                <h1  style="font-size:45px;" class="c-pink-200">{{$hinduism}}</h1>
                 
                Hinduism
                 
            </div>
            <div class="col-auto">
                <h1  style="font-size:45px;" class="c-pink-200">{{$islam}}</h1>
                 
                Islam
                 
            </div>
            <div class="col-auto">
                <h1 style="font-size:45px;"  class="c-pink-200">{{$sikhism}}</h1>
                 
                Sikhism
                
            </div>
            <div class="col-auto">
                <h1  style="font-size:45px;" class="c-pink-200">{{$buddhism}}</h1>
                 
                Buddhism
                    
            </div>
            <div class="col-auto">
                <h1  style="font-size:45px;" class="c-pink-200">{{$jainism}}</h1>
                
                jainism
                
            </div>
            <div class="col-auto">
                <h1  style="font-size:45px;" class="c-pink-200">{{$zoroastrianism}}</h1>
                 
                Zoroastrianism
                 
            </div>
            <div class="col-auto">
                <h1  style="font-size:45px;" class="c-pink-200">{{$others}}</h1>
                
                Others
                
            </div>
        </div>
        </div>
    </div>
</div>

<h5 class="mt-4"> Area  </h5>
<div class="row ml-2">
    <div class="card" style="border-radius: 25px;">
        <div class="card-body">
        <div class="row justify-content-start">
            <div class="col-auto">
                <h1  style="font-size:45px;" class="c-cyan-600">{{$urban}}</h1>
                Urban
            </div>
            <div class="col-auto">
                <h1  style="font-size:45px;" class="c-cyan-600">{{$rural}}</h1>
                Rural
            </div>
        </div>
        </div>
    </div>
</div>

<h5 class="mt-4"> Ration card  </h5>
<div class="row ml-2">
    <div class="card" style="border-radius: 25px;">
        <div class="card-body">
        <div class="row justify-content-start">
            <div class="col-auto">
                <h1 style="font-size:45px;"  class="c-green-600"> {{$bpl}}</h1>
                BPL
            </div>
            <div class="col-auto">
                <h1  style="font-size:45px;" class="c-green-600">{{$aay}}</h1>
                AAY
            </div>
            <div class="col-auto">
                <h1  style="font-size:45px;" class="c-green-600">{{$apl}}</h1>
                APL
            </div>
        </div>
        </div>
    </div>
</div>
<h5 class="mt-4"> Handicapped  </h5>
<div class="row ml-2">
    <div class="card" style="border-radius: 25px;">
        <div class="card-body">
        <div class="row justify-content-start">
            <div class="col-auto">
                <h1 style="font-size:45px;" class="c-blue-600"> {{$handicappedYes}}</h1>
                Handicapped
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
