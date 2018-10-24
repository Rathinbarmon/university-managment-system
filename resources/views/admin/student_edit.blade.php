 @extends('layout')
 @section('content') 
 
	@php
	
		$message=Session::get('message');
		if($message){
			echo $message;
			Session::put('message',null);
		}
	@endphp
 
  <form class="forms-sample" method="post" action="{{URL::to('/update_student',$student_description_edit->student_id)}}">
  {{csrf_field()}}
	  <div class="form-group">
		  <label for="exampleInputEmail1">Name</label>
		  <input name="student_name" class="form-control p-input"  value="{{$student_description_edit->student_name}}" type="text"> 
	  </div> 
	  <div class="form-group">
		  <label for="exampleInputEmail1">Roll</label>
		  <input name="student_roll" class="form-control p-input"  value="{{$student_description_edit->student_roll}}" type="text"> 
	  </div> 
	  <div class="form-group">
		  <label for="exampleInputEmail1">Fathers Name</label>
		  <input name="student_fathersname" class="form-control p-input" value="{{$student_description_edit->student_fathersname}}" type="text"> 
	  </div> 
	  <div class="form-group">
		  <label for="exampleInputEmail1">Mothers Name</label>
		  <input name="student_mathersname" class="form-control p-input" value="{{$student_description_edit->student_mathersname}}" type="text"> 
	  </div> 
	  <div class="form-group">
		  <label for="exampleInputEmail1">Email</label>
		  <input name="student_email" class="form-control p-input"   value="{{$student_description_edit->student_email}}" type="text"> 
	  </div> 
	  <div class="form-group">
		  <label for="exampleInputEmail1">Number</label>
		  <input name="student_phone" class="form-control p-input"   value="{{$student_description_edit->student_phone}}" type="text"> 
	  </div> 
	  <div class="form-group">
		  <label>Address</label>
		  <input name="student_address" class="form-control p-input" value="{{$student_description_edit->student_address}}" type="text"> 
	  </div> 
	  <div class="form-group">
		  <label for="exampleInputEmail1">Password</label>
		  <input name="student_password" class="form-control p-input" value="{{$student_description_edit->student_password}}" type="password"> 
	  </div> 
	  <div class="form-group">
		  <label >Academic year </label>
		  <input name="student_addmissionyear" value="{{$student_description_edit->student_addmissionyear}}" class="form-control p-input" value="Enter Name" type="date"> 
	  </div>
	    
	  
	  <button type="submit" class="btn btn-success">Update</button>
  </form>
        
 @endsection