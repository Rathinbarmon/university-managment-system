 @extends('layout')
 @section('content')
 	
<div class="row-fluid sortable">
	<div class="box ">
		<div class="box-header">
 			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
			</div>
		</div>
		<p>
		 @php
			$message=Session::get('message');
			if($message){
				echo $message;
				Session::put('message',null);
			}
		 @endphp
		 </p>
		<div class="box-content">
			<table class="table">
				  <thead>
					  <tr>
						  <th> Id</th>
						  <th> Name</th>
						  <th>F. Name</th>
						  <th>M. Name</th>
						  <th>Number</th>
						  <th>Address</th>
						  <th>Image</th>
						  <th>Pass</th>
						  <th>Dep</th>
						  <th>Ac year</th>
						  <th>Action</th>                                          
					  </tr>
				  </thead>   
				  <tbody>  
					@foreach($all_student as $all_student) 
					<tr>
						<td class="center">{{$all_student->student_id}}</td>
						<td class="center">{{$all_student->student_name}}</td>
						<td class="center">{{$all_student->student_fathersname}}</td> 
						<td class="center">{{$all_student->student_mathersname }}</td> 
						<td class="center">{{$all_student->student_phone }}</td> 
						<td class="center">{{$all_student->student_address}}</td> 
						<td class="center">
						<img src="{{ URL::to($all_student->student_image) }}" alt="" />
						</td>  
						<td class="center">
							<a href="{{URL::to('/student_view/'.$all_student->student_id)}}" class="btn btn-danger">view</a>
							<a href="{{URL::to('/student_edit/'.$all_student->student_id)}}" class="btn btn-info">Edit</a>
							<a href="{{URL::to('/student_delete/'.$all_student->student_id)}}" class="btn btn-danger">Delete</a>
						</td>  
						<td class="center">{{$all_student->student_password}}</td> 
						<td class="center">{{$all_student->student_addmissionyear}}</td> 
						<td class="center">  
							@if($all_student->student_department==1)
							<span>{{'CSE'}}</span>
							@elseif($all_student->student_department==2)
							<span>{{'EEE'}}</span>
							@elseif($all_student->student_department==3)
							<span>{{'ECE'}}</span>
							@elseif($all_student->student_department==4)
							<span>{{'BBA'}}</span>
							@elseif($all_student->student_department==5)
							<span>{{'MBA'}}</span>
							@endif
						</td>  
					</tr>   
					@endforeach		
				  </tbody>
			 </table>   
		</div>
	</div>  
</div> 
	
 
 @endsection