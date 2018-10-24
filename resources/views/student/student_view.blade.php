@extends('student_layout')
@section('content') 
	<div class="row-fluid sortable">
		<div class="box "> 
		 
			<div class="card-body avatar">
			  <h2 class="card-title">Info</h2>
			  <img src="http://via.placeholder.com/47x47" alt="">
			  <p class="name"></p>
			  <p class="designation">
				<td class="center">{{$student_description->student_id}}</td>
				<td class="center">{{$student_description->student_name}}</td>
				<td class="center">{{$student_description->student_fathersname}}</td> 
				<td class="center">{{$student_description->student_mathersname }}</td> 
				<td class="center">{{$student_description->student_phone }}</td> 
				<td class="center">{{$student_description->student_address}}</td></p>
			  <a class="email" href="#">johndoe@gmail.com</a>
			  <a class="number" href="#">+1 9438 934089</a>
			</div> 
		 
		</div>  
	</div> 
@endsection