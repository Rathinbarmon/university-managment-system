@extends('layout')
@section('content') 	
<div class="row-fluid sortable">
	<div class="box ">
	 	<div class="box-content">
			<table class="table">
				  <thead>
					  <tr>
						  <th> Id</th> 
						  <th>Department</th>                                   
					  </tr>
				  </thead>   
				  <tbody>  
					@foreach($all_student as $all_student) 
					<tr>
						<td class="center">{{$all_student->student_id}}</td> 
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