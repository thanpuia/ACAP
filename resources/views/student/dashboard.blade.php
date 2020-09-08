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
	<div class="row ">
    
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
										<th>Eng</th>
										<th> {{$y['English']['1']}}</th>
									</tr>
									<tr>
										<th>Mizo</th>
										<th> {{$y['Mizo']['1']}} </th>
									</tr>
									<tr>
										<th>Hindi</th>
										<th>{{$y['Hindi']['1']}} </th>
									</tr>
									<tr>
										<th>Edu</th>
										<th>{{$y['Education']['1']}} </th>
									</tr>
									<tr>
										<th>Hst</th>
										<th>{{$y['History']['1']}} </th>
									</tr>
									<tr>
										<th>Soc</th>
										<th>{{$y['Sociology']['1']}} </th>
									</tr>
									<tr>
										<th>Pol Sc</th>
										<th>{{$y['Political Science']['1']}} </th>
									</tr>
									<tr>
										<th>Eco</th>
										<th>{{ $y['Economics']['1']}} </th>
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
										<th>Eng</th>
										<th> {{$y['English']['2']}}</th>
									</tr>
									<tr>
										<th>Mizo</th>
										<th> {{$y['Mizo']['2']}} </th>
									</tr>
									<tr>
										<th>Hindi</th>
										<th>{{$y['Hindi']['2']}} </th>
									</tr>
									<tr>
										<th>Edu</th>
										<th>{{$y['Education']['2']}} </th>
									</tr>
									<tr>
										<th>Hst</th>
										<th>{{$y['History']['2']}} </th>
									</tr>
									<tr>
										<th>Soc</th>
										<th>{{$y['Sociology']['2']}} </th>
									</tr>
									<tr>
										<th>Pol Sc</th>
										<th>{{$y['Political Science']['2']}} </th>
									</tr>
									<tr>
										<th>Eco</th>
										<th>{{$y['Economics']['2']}} </th>
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
										<th>Eng</th>
										<th> {{$y['English']['3']}}</th>
									</tr>
									<tr>
										<th>Mizo</th>
										<th> {{$y['Mizo']['3']}} </th>
									</tr>
									<tr>
										<th>Hindi</th>
										<th>{{$y['Hindi']['3']}} </th>
									</tr>
									<tr>
										<th>Edu</th>
										<th>{{$y['Education']['3']}} </th>
									</tr>
									<tr>
										<th>Hst</th>
										<th>{{$y['History']['3']}} </th>
									</tr>
									<tr>
										<th>Soc</th>
										<th>{{$y['Sociology']['3']}} </th>
									</tr>
									<tr>
										<th>Pol Sc</th>
										<th>{{$y['Political Science']['3']}} </th>
									</tr>
									<tr>
										<th>Eco</th>
										<th>{{$y['Economics']['3']}} </th>
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
										<th>Eng</th>
										<th> {{$y['English']['4']}}</th>
									</tr>
									<tr>
										<th>Mizo</th>
										<th> {{$y['Mizo']['4']}} </th>
									</tr>
									<tr>
										<th>Hindi</th>
										<th>{{$y['Hindi']['4']}} </th>
									</tr>
									<tr>
										<th>Edu</th>
										<th>{{$y['Education']['4']}} </th>
									</tr>
									<tr>
										<th>Hst</th>
										<th>{{$y['History']['4']}} </th>
									</tr>
									<tr>
										<th>Soc</th>
										<th>{{$y['Sociology']['4']}} </th>
									</tr>
									<tr>
										<th>Pol Sc</th>
										<th>{{$y['Political Science']['4']}} </th>
									</tr>
									<tr>
										<th>Eco</th>
										<th>{{$y['Economics']['4']}} </th>
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
										<th>Eng</th>
										<th> {{$y['English']['5']}}</th>
									</tr>
									<tr>
										<th>Mizo</th>
										<th> {{$y['Mizo']['5']}} </th>
									</tr>
									<tr>
										<th>Hindi</th>
										<th>{{$y['Hindi']['5']}} </th>
									</tr>
									<tr>
										<th>Edu</th>
										<th>{{$y['Education']['5']}} </th>
									</tr>
									<tr>
										<th>Hst</th>
										<th>{{$y['History']['5']}} </th>
									</tr>
									<tr>
										<th>Soc</th>
										<th>{{$y['Sociology']['5']}} </th>
									</tr>
									<tr>
										<th>Pol Sc</th>
										<th>{{$y['Political Science']['5']}} </th>
									</tr>
									<tr>
										<th>Eco</th>
										<th>{{$y['Economics']['5']}} </th>
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
										<th>Eng</th>
										<th> {{$y['English']['6']}}</th>
									</tr>
									<tr>
										<th>Mizo</th>
										<th> {{$y['Mizo']['6']}} </th>
									</tr>
									<tr>
										<th>Hindi</th>
										<th>{{$y['Hindi']['6']}} </th>
									</tr>
									<tr>
										<th>Edu</th>
										<th>{{$y['Education']['6']}} </th>
									</tr>
									<tr>
										<th>Hst</th>
										<th>{{$y['History']['6']}} </th>
									</tr>
									<tr>
										<th>Soc</th>
										<th>{{$y['Sociology']['6']}} </th>
									</tr>
									<tr>
										<th>Pol Sc</th>
										<th>{{$y['Political Science']['6']}} </th>
									</tr>
									<tr>
										<th>Eco</th>
										<th>{{$y['Economics']['6']}} </th>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>


			<div class="">
			<h6 class="mT-130">COMMUNITY</h6>

				<div class="card" style="">
					<div class="card-body ">
						<div class="row">
							<div class="col-auto mr-5 mB-20">
								<div class="layer w-100 mB-5">
									<h6 class="lh-1">ST</h6>
								</div>
								<div class="peers ai-sb fxw-nw">
									<div class="peer mr-5 w-20" style="color:cyan; font-size:33px; line-height: 40%;font-weight:600"> {{$st}} </div>
								</div>
							</div>
							<div class="col-auto mr-5 mB-20">
								<div class="layer w-100 mB-5">
									<h6 class="lh-1">SC</h6>
								</div>
								<div class="peers ai-sb fxw-nw">
									<div class="peer mr-5 w-20" style="color:cyan; font-size:33px; line-height: 40%;font-weight:600"> {{$sc}} </div>
								</div>
							</div>
							<div class="col-auto mr-5 mB-25">
								<div class="layer w-100 mB-10">
									<h6 class="lh-1">Gen</h6>
								</div>
								<div class="peers ai-sb fxw-nw">
									<div class="peer mr-5 w-20" style="color:cyan; font-size:33px; line-height: 40%;font-weight:600"> {{$gen}} </div>
								</div>
							</div>
							<div class="col-auto mr-5 mB-20">
								<div class="layer w-100 mB-5">
									<h6 class="lh-1">OBC</h6>
								</div>
								<div class="peers ai-sb fxw-nw">
									<div class="peer mr-5 w-20" style="color:cyan; font-size:33px; line-height: 40%;font-weight:600"> {{$obc}} </div>
								</div>
							</div>
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


				<div class="">
					<h6 class="mt-4">HANDICAPPED</h6>
					<div class="card" style="">
						<div class="card-body">
							<div class="row pl-3">
								<div class="layer w-100 mB-10">
									<h6 class="lh-1">Disabiltiy</h6> </div>
								<div class="peers ai-sb fxw-nw">
									<div class="peer mr-5 w-20 " style="color:purple; font-size:33px; line-height: 40%;font-weight:600"> {{$handicappedYes}} </div>
										<div class=""> <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500 pull-right fsz-sm">
											@php 
												$disable = 100 * ($handicappedYes/$studentCount);  
												echo number_format($disable,1).'%';
											@endphp </span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

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

@endsection
