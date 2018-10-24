 @extends('layout')
 @section('content')
		
	<div class="row-fluid sortable">
		<div class="box ">  	 
			<div class="card-body avatar">
			  <h2 class="card-title">Info</h2>
			  <img src="http://via.placeholder.com/47x47" alt="">
			  <p class="name">{{$student_description->student_name}}</p>
			  <p class="name">{{$student_description->student_fathersname}}</p>
			  <p class="name">{{$student_description->student_mathersname}}</p>
			  <p class="name">{{$student_description->student_phone}}</p>
			  <p class="name">{{$student_description->student_address}}</p>  
			</div> 
		 
		</div>  
	</div> 
		
 
 @endsection