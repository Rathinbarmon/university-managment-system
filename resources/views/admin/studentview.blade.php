 @extends('layout')
 @section('content')
		
	<div class="row-fluid sortable">
		<div class="box "> 
		@foreach($student_description as $single_student) 	 
			<div class="card-body avatar">
			  <h2 class="card-title">Info</h2>
			  <img src="http://via.placeholder.com/47x47" alt="">
			  <p class="name"></p>
			  <p class="designation">
				<td class="center">{{$single_student->student_id}}</td>
				<td class="center">{{$single_student->student_name}}</td>
				<td class="center">{{$single_student->student_fathersname}}</td> 
				<td class="center">{{$single_student->student_mathersname }}</td> 
				<td class="center">{{$single_student->student_phone }}</td> 
				<td class="center">{{$single_student->student_address}}</td></p>
			  <a class="email" href="#">johndoe@gmail.com</a>
			  <a class="number" href="#">+1 9438 934089</a>
			</div> 
		@endforeach	
		</div>  
	</div> 
		
 
 @endsection