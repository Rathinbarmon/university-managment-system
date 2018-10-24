 @extends('layout')
 @section('content') 
 
	@php
		$message=Session::get('message');
		if($message){
			echo $message;
			Session::put('message',null);
		}
	@endphp
 
  <form class="forms-sample" action="{{URL::to('/save_student')}}">
  {{csrf_field()}}
	  <div class="form-group">
		  <label for="exampleInputEmail1">Name</label>
		  <input name="student_name" class="form-control p-input"  placeholder="Enter Name" type="text"> 
	  </div> 
	  <div class="form-group">
		  <label for="exampleInputEmail1">Roll</label>
		  <input name="student_roll" class="form-control p-input"  placeholder="Enter Name" type="text"> 
	  </div> 
	  <div class="form-group">
		  <label for="exampleInputEmail1">Fathers Name</label>
		  <input name="student_fathersname" class="form-control p-input" placeholder="Enter Name" type="text"> 
	  </div> 
	  <div class="form-group">
		  <label for="exampleInputEmail1">Mothers Name</label>
		  <input name="student_mathersname" class="form-control p-input" placeholder="Enter Name" type="text"> 
	  </div> 
	  <div class="form-group">
		  <label for="exampleInputEmail1">Email</label>
		  <input name="student_email" class="form-control p-input"  placeholder="Enter Name" type="text"> 
	  </div> 
	  <div class="form-group">
		  <label for="exampleInputEmail1">Number</label>
		  <input name="student_phone" class="form-control p-input" placeholder="Enter Name" type="text"> 
	  </div> 
	  <div class="form-group">
		  <label>Address</label>
		  <input name="student_address" class="form-control p-input" placeholder="Enter Name" type="text"> 
	  </div> 
	  <div class="form-group">
		  <label for="exampleInputEmail1">Password</label>
		  <input name="student_password" class="form-control p-input" placeholder="Enter Name" type="password"> 
	  </div>
	  <div class="form-group">
		  <label>Department </label>
		   
		  <select name="student_department" id="">
			<option value="1">CSE</option>
			<option value="2">EEE</option>
			<option value="3">ECE</option>
			<option value="4">BBA</option>
			<option value="5">MBA</option>
		  </select>
	  </div> 
	  
	  <label>Upload Image</label>
	  <div class="row">
		<div class="col-12">
			<label for="exampleInputFile2" class="btn btn-outline-primary btn-sm">
				<i class="mdi mdi-upload btn-label btn-label-left"></i>  
				<input name="student_image" class="mdi mdi-upload btn-label btn-label-left" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp" type="file">
			</label>
		</div>
	  </div>  
	  <div class="form-group">
		  <label >Academic year </label>
		  <input name="student_addmissionyear" class="form-control p-input" placeholder="Enter Name" type="date"> 
	  </div>
	    
	  
	  <button type="submit" class="btn btn-success">Submit</button>
  </form>
        
 @endsection