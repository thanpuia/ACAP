@extends('admin.default') @section('content')
<h6 class="mt-3">STUDENT INFORMATION</h6>
<div class="">
	<div class="masonry-item w-400 container-fluid">
		<div class="row gap-20">
			<div class="col">
				<div class="layers bd bgc-white p-15">
					<div class="layer w-100 mB-10">
						<h6 class="lh-1">Total No Student</h6> </div>
					<div class="peers ai-sb fxw-nw">
						<div class="peer mr-5 mb-3 w-20" style="color:#7030fc; font-size:33px; line-height: 40%;font-weight:600"> {{$studentCount}} </div>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="layers bd bgc-white p-15">
					<div class="layer w-100 mB-10">
						<h6 class="lh-1">Total No Boys</h6> </div>
					<div class="peers ai-sb fxw-nw">
						<div class="peer mr-5 w-20" style="color:#4caf50; font-size:33px; line-height: 40%;font-weight:600"> {{$studentMale}} </div>
						<div class="peer"> <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">
                            @php 
                                $malePercent = 100 * ($studentMale/$studentCount);  
                                echo number_format($malePercent,1).'%';
                            @endphp </span> </div>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="layers bd bgc-white p-15">
					<div class="layer w-100 mB-10">
						<h6 class="lh-1">Total No Girls</h6> </div>
					<div class="peers ai-sb fxw-nw">
						<div class="peer mr-5 w-20" style="color:#219fff; font-size:33px; line-height: 40%;font-weight:600"> {{$studentFemale}} </div>
						<div class="peer"> <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">
                            @php 
                                $femalePercent = 100 * ($studentFemale/$studentCount);  
                                echo number_format($femalePercent,1).'%';
                            @endphp</span> </div>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="layers bd bgc-white p-15">
					<div class="layer w-100 mB-10">
						<h6 class="lh-1">Arts Student</h6> </div>
					<div class="peers ai-sb fxw-nw">
						<div class="peer  mr-5 w-20" style="color:#f86519; font-size:33px; line-height: 40%;font-weight:600"> {{$ba}} </div>
						<div class="peer"> <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-orange-50 c-orange-500">
                            @php 
                                $baPercent = 100 * ($ba/$studentCount);  
                                echo number_format($baPercent,1).'%';
                            @endphp</span> </div>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="layers bd bgc-white p-15">
					<div class="layer w-100 mB-10">
						<h6 class="lh-1">Commerce Student</h6> </div>
					<div class="peers ai-sb fxw-nw">
						<div class="peer  mr-5 w-20" style="color:#ff21ae; font-size:33px; line-height: 40%;font-weight:600"> {{$bcom}} </div>
						<div class="peer"> <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-pink-50 c-pink-500">
                            @php 
                                $bcomPercent = 100 * ($bcom/$studentCount);  
                                echo number_format($bcomPercent,1).'%';
                            @endphp </span> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
    
		<div class="col-8">
        <h6 class="mt-4">SEMETER STATS</h6>

			<div class="masonry-item w-400 container-fluid">
				<div class="row gap-20">
					<div class="col">
						<div class="layers bd bgc-white ">
							<table class="table table-striped">
								<thead style="background:#fa596e;color:white;">
									<tr>
										<th>1st Semester</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>Eco</th>
										<th> </th>
									</tr>
									<tr>
										<th>Edu</th>
										<th> </th>
									</tr>
									<tr>
										<th>Eng</th>
										<th> </th>
									</tr>
									<tr>
										<th>Hindi</th>
										<th> </th>
									</tr>
									<tr>
										<th>Hst</th>
										<th> </th>
									</tr>
									<tr>
										<th>Pol Sc</th>
										<th> </th>
									</tr>
									<tr>
										<th>Soc</th>
										<th> </th>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col">
						<div class="layers bd bgc-white ">
							<table class="table table-striped">
								<thead style="background:#f64698;color:white;">
									<tr>
										<th>2nd Semester</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>Eco</th>
										<th> </th>
									</tr>
									<tr>
										<th>Edu</th>
										<th> </th>
									</tr>
									<tr>
										<th>Eng</th>
										<th> </th>
									</tr>
									<tr>
										<th>Hindi</th>
										<th> </th>
									</tr>
									<tr>
										<th>Hst</th>
										<th> </th>
									</tr>
									<tr>
										<th>Pol Sc</th>
										<th> </th>
									</tr>
									<tr>
										<th>Soc</th>
										<th> </th>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col">
						<div class="layers bd bgc-white">
							<table class="table table-striped">
								<thead style="background:#f35ac5;color:white;">
									<tr>
										<th>3rd Semester</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>Eco</th>
										<th> </th>
									</tr>
									<tr>
										<th>Edu</th>
										<th> </th>
									</tr>
									<tr>
										<th>Eng</th>
										<th> </th>
									</tr>
									<tr>
										<th>Hindi</th>
										<th> </th>
									</tr>
									<tr>
										<th>Hst</th>
										<th> </th>
									</tr>
									<tr>
										<th>Pol Sc</th>
										<th> </th>
									</tr>
									<tr>
										<th>Soc</th>
										<th> </th>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="masonry-item w-400 container-fluid">
				<div class="row gap-20">
					<div class="col">
						<div class="layers bd bgc-white ">
							<table class="table table-striped">
								<thead style="background:#a74bf7;color:white;">
									<tr>
										<th>4th Semester</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>Eco</th>
										<th> </th>
									</tr>
									<tr>
										<th>Edu</th>
										<th> </th>
									</tr>
									<tr>
										<th>Eng</th>
										<th> </th>
									</tr>
									<tr>
										<th>Hindi</th>
										<th> </th>
									</tr>
									<tr>
										<th>Hst</th>
										<th> </th>
									</tr>
									<tr>
										<th>Pol Sc</th>
										<th> </th>
									</tr>
									<tr>
										<th>Soc</th>
										<th> </th>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col">
						<div class="layers bd bgc-white ">
							<table class="table table-striped">
								<thead style="background:#475dee;color:white;">
									<tr>
										<th>5th Semester</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>Eco</th>
										<th> </th>
									</tr>
									<tr>
										<th>Edu</th>
										<th> </th>
									</tr>
									<tr>
										<th>Eng</th>
										<th> </th>
									</tr>
									<tr>
										<th>Hindi</th>
										<th> </th>
									</tr>
									<tr>
										<th>Hst</th>
										<th> </th>
									</tr>
									<tr>
										<th>Pol Sc</th>
										<th> </th>
									</tr>
									<tr>
										<th>Soc</th>
										<th> </th>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="col">
						<div class="layers bd bgc-white">
							<table class="table table-striped">
								<thead style="background:#59a6ff;color:white;">
									<tr>
										<th>6th Semester</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>Eco</th>
										<th> </th>
									</tr>
									<tr>
										<th>Edu</th>
										<th> </th>
									</tr>
									<tr>
										<th>Eng</th>
										<th> </th>
									</tr>
									<tr>
										<th>Hindi</th>
										<th> </th>
									</tr>
									<tr>
										<th>Hst</th>
										<th> </th>
									</tr>
									<tr>
										<th>Pol Sc</th>
										<th> </th>
									</tr>
									<tr>
										<th>Soc</th>
										<th> </th>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
        </div>
        <div class="col-4">
			<div>
				<h6 class="mt-4">RELIGION</h6>

				<div class="bd bgc-white p-30">

					<div>
						<h5 class="fw-700"> {{$christianity}} </h5> <small class="fw-700 c-grey-700">Christian</small> <span class="pull-right c-grey-600 fsz-sm"> @php echo (100*($christianity/$studentCount))."%";  @endphp </span>
						<div class="progress mT-2">
							<div id="christianity" class="progress-bar bgc-cyan-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">  </div>
						</div>
					</div>
					<div>
						<h5 class="fw-700">  {{$hinduism}}  </h5> <small class="fw-700 c-grey-700">Hindu</small> <span class="pull-right c-grey-600 fsz-sm"> @php echo (100*($hinduism/$studentCount))."%";  @endphp  </span>
						<div class="progress mT-2">
							<div id="hinduism" class="progress-bar bgc-green-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"> </div>
						</div>
					</div>
					<div>
						<h5 class="fw-700">  {{$islam}}  </h5> <small class="fw-700 c-grey-700">Islam</small> <span class="pull-right c-grey-600 fsz-sm"> @php echo (100*($islam/$studentCount))."%";  @endphp </span>
						<div class="progress mT-2">
							<div id="islam" class="progress-bar bgc-blue-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"> </div>
						</div>
					</div>
					<div>
						<h5 class="fw-700">  {{$sikhism}}  </h5> <small class="fw-700 c-grey-700">Sikh</small> <span class="pull-right c-grey-600 fsz-sm"> @php echo (100*($sikhism/$studentCount))."%";  @endphp </span>
						<div class="progress mT-2">
							<div id="sikhism" class="progress-bar bgc-orange-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"> </div>
						</div>
					</div>
					<div>
						<h5 class="fw-700">  {{$buddhism}}  </h5> <small class="fw-700 c-grey-700">Bhudhist</small> <span class="pull-right c-grey-600 fsz-sm"> @php echo (100*($buddhism/$studentCount))."%";  @endphp </span>
						<div class="progress mT-2">
							<div id="buddhism" class="progress-bar bgc-red-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"> </div>
						</div>
					</div>
					<div>
						<h5 class="fw-700">  {{$jainism}}  </h5> <small class="fw-700 c-grey-700">Jain</small> <span class="pull-right c-grey-600 fsz-sm"> @php echo (100*($jainism/$studentCount))."%";  @endphp </span>
						<div class="progress mT-2">
							<div id="jainism" class="progress-bar bgc-pink-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"> </div>
						</div>
					</div>
					<div>
						<h5 class="fw-700">  {{$zoroastrianism}}  </h5> <small class="fw-700 c-grey-700">Zoro</small> <span class="pull-right c-grey-600 fsz-sm"> @php echo (100*($zoroastrianism/$studentCount))."%";  @endphp </span>
						<div class="progress mT-2">
							<div id="zoroastrianism" class="progress-bar bgc-teal-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"> </div>
						</div>
					</div>
					<div>
						<h5 class="fw-700">  {{$others}}  </h5> <small class="fw-700 c-grey-700">Others</small> <span class="pull-right c-grey-600 fsz-sm"> @php echo (100*($others/$studentCount))."%";  @endphp </span>
						<div class="progress mT-2">
							<div id="others" class="progress-bar bgc-purple-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">  </div>
						</div>
					</div>
				</div>

				<h6 class="mt-4">AREA</h6>
				<div class="bd bgc-white p-30">
					<div>
						<h5 class="fw-700"> {{$urban}} </h5> <small class="fw-700 c-grey-700">Urban</small> <span class="pull-right c-grey-600 fsz-sm"> @php echo (100*($urban/$studentCount))."%";  @endphp </span>
						<div class="progress mT-2">
							<div id="christianity" class="progress-bar bgc-blue-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">  </div>
						</div>
					</div>
					<div>
						<h5 class="fw-700">  {{$rural}}  </h5> <small class="fw-700 c-grey-700">Rural</small> <span class="pull-right c-grey-600 fsz-sm"> @php echo (100*($rural/$studentCount))."%";  @endphp  </span>
						<div class="progress mT-2">
							<div id="hinduism" class="progress-bar bgc-green-500" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"> </div>
						</div>
					</div>
			</div>

        </div>
    </div>

	<div class="row">
		<div class="col-8">
			<div class="layers bd bgc-white p-15">
				<div class= "row">
					<div class="col-4">
						<div class="layer w-100 mB-10">
							<h6 class="lh-1">ST</h6> </div>
						<div class="peers ai-sb fxw-nw">
							<div class="peer  mr-5 w-20" style="color:cyan; font-size:33px; line-height: 40%;font-weight:600"> {{$st}} </div>
						
						</div>
					</div>	
					<div class="col-4">
						<div class="layer w-100 mB-10">
							<h6 class="lh-1">SC</h6> </div>
						<div class="peers ai-sb fxw-nw">
							<div class="peer  mr-5 w-20" style="color:#ff21ae; font-size:33px; line-height: 40%;font-weight:600"> {{$sc}} </div>
								
							
						</div>
					</div>
					<div class="col-4">
						<div class="layer w-100 mB-10">
							<h6 class="lh-1">Gen</h6> </div>
						<div class="peers ai-sb fxw-nw">
							<div class="peer  mr-5 w-20" style="color:#ff21ae; font-size:33px; line-height: 40%;font-weight:600"> {{$gen}} </div>
						
						</div>
					</div>	
					<div class="col">
						<div class="layer w-100 mB-10">
							<h6 class="lh-1">OBC</h6> </div>
						<div class="peers ai-sb fxw-nw">
							<div class="peer  mr-5 w-20" style="color:#ff21ae; font-size:33px; line-height: 40%;font-weight:600"> {{$obc}} </div>
								
							
						</div>
					</div>
				</div>	
			</div>
		</div>

		<div class="col-4">

		</div>
	</div>


</div>


    <script>
        var christianity = document.getElementById('christianity'); 
        var hinduism = document.getElementById('hinduism');
        var islam = document.getElementById('islam');
        var sikhism = document.getElementById('sikhism');
        var buddhism = document.getElementById('buddhism');
        var jainism = document.getElementById('jainism');
        var zoroastrianism = document.getElementById('zoroastrianism');
        var others = document.getElementById('others');

       var christianityPercent = 100* (  {{$christianity}}/{{$studentCount}} );
	   var hinduismPercent = 100* (  {{$hinduism}}/{{$studentCount}} );
	   var islamPercent = 100* (  {{$islam}}/{{$studentCount}} );
	   var sikhismPercent = 100* (  {{$sikhism}}/{{$studentCount}} );
	   var buddhismPercent = 100* (  {{$buddhism}}/{{$studentCount}} );
	   var jainismPercent = 100* (  {{$jainism}}/{{$studentCount}} );
	   var zoroPercent = 100* (  {{$zoroastrianism}}/{{$studentCount}} );
	   var otherPercent = 100* (  {{$others}}/{{$studentCount}} );
		
		christianity.setAttribute("style","width: " +christianityPercent+ "%;" );
        hinduism.setAttribute("style","width: "+ hinduismPercent+"%;" );
        islam.setAttribute("style", "width: "+ islamPercent+"%;" );
        sikhism.setAttribute("style", "width: "+ sikhismPercent+"%;" );
        buddhism.setAttribute("style", "width: "+ buddhismPercent+"%;" );
        jainism.setAttribute("style", "width: "+jainismPercent +"%;" );
        zoroastrianism.setAttribute("style", "width: "+ zoroPercent+"%;" );
        others.setAttribute("style", "width: "+ otherPercent+"%;" );
        
    </script>  


			<div> SEMESTER STAT </div>
		<div class='row'>
			<div class='col-auto'>
				<div class="card" style="border-radius: 25px;">
					<div class="card-body">
						<h1 style="color:#7030fc; font-size:45px;"> {{$studentCount}} </h1> Total Student
						<!-- <h3>Male:  {{$studentMale}}  Female:  {{$studentFemale}} </h3>  --></div>
				</div>
			</div>
			<div class='col-4'>
				<div class="card" style="border-radius: 25px;">
					<div class="card-body">
						<h2 style="color:#7030fc;font-size:45px;"> {{$studentFemale}} </h2> Total Number of Girls
						<!-- <h5>Semester II   : {{$semester2}} </h5> --></div>
				</div>
			</div>
			<div class='col-4'>
				<div class="card" style="border-radius: 25px;">
					<div class="card-body">
						<h2 style="color:#7030fc;font-size:45px;"> {{$studentMale}} </h2> Total Number of Boys </div>
				</div>
			</div>
			<div class='col-4 mt-3'>
				<div class="card" style="border-radius: 25px;">
					<div class="card-body">
						<h2 style="color:#7030fc;font-size:45px;"> {{$ba}} </h2> Arts Student </div>
				</div>
			</div>
			<div class='col-4 mt-3'>
				<div class="card" style="border-radius: 25px;">
					<div class="card-body">
						<h2 style="color:#7030fc;font-size:45px;"> {{$bcom}} </h2> Commerce Student </div>
				</div>
			</div>
		</div>
		<h5 class="mt-4"> Religion  </h5>
		<div class="row ml-2">
			<div class="card" style="border-radius: 25px;">
				<div class="card-body justify-content-between">
					<div class="row ">
						<div class="col-auto">
							<h1 style="font-size:45px;" class="c-pink-200">{{$christianity}}</h1> Christianity </div>
						<div class="col-auto">
							<h1 style="font-size:45px;" class="c-pink-200">{{$hinduism}}</h1> Hinduism </div>
						<div class="col-auto">
							<h1 style="font-size:45px;" class="c-pink-200">{{$islam}}</h1> Islam </div>
						<div class="col-auto">
							<h1 style="font-size:45px;" class="c-pink-200">{{$sikhism}}</h1> Sikhism </div>
						<div class="col-auto">
							<h1 style="font-size:45px;" class="c-pink-200">{{$buddhism}}</h1> Buddhism </div>
						<div class="col-auto">
							<h1 style="font-size:45px;" class="c-pink-200">{{$jainism}}</h1> jainism </div>
						<div class="col-auto">
							<h1 style="font-size:45px;" class="c-pink-200">{{$zoroastrianism}}</h1> Zoroastrianism </div>
						<div class="col-auto">
							<h1 style="font-size:45px;" class="c-pink-200">{{$others}}</h1> Others </div>
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
							<h1 style="font-size:45px;" class="c-cyan-600">{{$urban}}</h1> Urban </div>
						<div class="col-auto">
							<h1 style="font-size:45px;" class="c-cyan-600">{{$rural}}</h1> Rural </div>
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
							<h1 style="font-size:45px;" class="c-green-600"> {{$bpl}}</h1> BPL </div>
						<div class="col-auto">
							<h1 style="font-size:45px;" class="c-green-600">{{$aay}}</h1> AAY </div>
						<div class="col-auto">
							<h1 style="font-size:45px;" class="c-green-600">{{$apl}}</h1> APL </div>
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
							<h1 style="font-size:45px;" class="c-blue-600"> {{$handicappedYes}}</h1> Handicapped </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> @endsection
<!--  return view('student.dashboard',compact('subjects','studentCount','studentMale','studentFemale',
   'semester1','semester2','semester3','semester4','semester5','semester6',
   'st','sc','obc','gen',
   'christianity','others','zoroastrianism','jainism','buddhism','sikhism','islam','hinduism',
   'urban','rural','handicappedYes','handicappedNo','bpl','aay','apl'  ));
   -->