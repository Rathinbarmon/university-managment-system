<?php 

namespace App\Http\Controllers;

use DB;
use Session; 
session_start();
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class AllstudentsController extends Controller{
    
	public function allstudent(){
		$all_student=DB::table('student_tbl')
			->get();
		$manage_student=view('admin.allstudent')
			->with('all_student',$all_student);
		return view('layout')
			->with('allstudent',$manage_student); 
	} 
	// Student View
	public function studentview($student_id){		
		$student_des=DB::table('student_tbl') 
			->select('*')
			->where('student_id',$student_id)
			->first(); 
		
		$manage_student=view('admin.view')
			->with('student_description',$student_des);
		return view('layout')
			->with('view',$manage_student); 
	}
  	// Student Delete
	public function student_delete($student_id){		 
		DB::table('student_tbl')
		->where('student_id',$student_id)
		->delete();
		
		Session::put('message','Student Deleted Successfully!!');
		return Redirect::to('/allstudent');
	}
	
	// Student Edit
	public function studentedit($student_id){		
		$student_edit=DB::table('student_tbl')  
			->select('*')
			->where('student_id',$student_id)
			->first(); 
		
		$manage_student=view('admin.student_edit')
			->with('student_description_edit',$student_edit);
		return view('layout')
			->with('student_edit',$manage_student);	 
		 
	} 
	// Student Update
	public function studentupdate(Request $edit,$student_id){
		
		$data = array();
	    $data['student_name']   		= $edit->student_name;
	    $data['student_roll']   		= $edit->student_roll;
	    $data['student_fathersname']  	= $edit->student_fathersname;
	    $data['student_mathersname']  	= $edit->student_mathersname;
	    $data['student_email']   		= $edit->student_email;
	    $data['student_phone']   		= $edit->student_phone;
	    $data['student_address']  		= $edit->student_address;
	    $data['student_password']  		= $edit->student_password;   
	    $data['student_addmissionyear'] = $edit->student_addmissionyear;
	   
		DB::table('student_tbl')
			->where('student_id',$student_id)
			->update($data); 
		 
		Session::put('message','Data Updated Successfully!!'); 
		return Redirect::to('/allstudent');
	}
	 
	 
}
