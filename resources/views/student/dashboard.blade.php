@extends('admin.default')
@section('content')

 

<div class='row'>

    <div class='col'>
        <div class="card">
            <div class="card-body">
                <h2 class="c-yellow-400">Total Student: {{$studentCount}} </h2>
                <h3>Male:  {{$studentMale}}  Female:  {{$studentFemale}} </h3> 
            </div>
        </div>
    </div>
    <div class='col'>
        <div class="card">
            <div class="card-body">
                <h2 class="c-green-500"> Semester Wise Students </h2>
                <h5>Semester I    : {{$semester1}} </h5>
                <h5>Semester II   : {{$semester2}} </h5>
                <h5>Semester III  : {{$semester3}} </h5>
                <h5>Semester IV   : {{$semester4}} </h5>
                <h5>Semester V    : {{$semester5}} </h5>
                <h5>Semester VI   : {{$semester6}} </h5>
            </div>
        </div>
    </div>
    <div class='col'>
        <div class="card">
            <div class="card-body">
                <h2 class="c-blue-500">Religion</h2>
                <h5>Christianity : {{$christianity}} </h5>
                <h5>Hinduism : {{$hinduism}} </h5>    
                <h5>Islam : {{$islam}} </h5>
                <h5>Sikhism : {{$sikhism}} </h5>
                <h5>Buddhism : {{$buddhism}} </h5>
                <h5>Jainism : {{$jainism}} </h5>
                <h5>Zoroastrianism : {{$zoroastrianism}}  </h5>
                <h5>Others : {{$others}} </h5>
            </div>
        </div>
    </div>
</div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2 class="c-blue-600">Community</h2>
                    <h5>ST: {{$st}}</h5>
                    <h5>SC: {{$sc}}</h5>
                    <h5>OBC: {{$obc}}</h5>
                    <h5>GEN: {{$gen}}</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h2 class="c-blue-600">Area</h2>
                    <h5>Urban: {{$urban}}</h5>
                    <h5>Rural: {{$rural}}</h5>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
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