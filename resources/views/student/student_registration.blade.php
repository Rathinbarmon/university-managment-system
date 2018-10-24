 @extends('layout')
 @section('content') 
 
	@php
		$message=Session::get('message');
		if($message){
			echo $message;
			Session::put('message',null);
		}
	@endphp
 
  <form class="forms-sample" action="{{URL::to('/save_course')}}">
  {{csrf_field()}}
  
	  <div class="form-group">
		  <label for="exampleInputEmail1">Name</label>
		  <input name="student_id" class="form-control p-input"  placeholder="Enter Name" type="text"> 
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
	 
	  
	  
	  <button type="submit" class="btn btn-success">Submit</button>
  </form>
        
 @endsection