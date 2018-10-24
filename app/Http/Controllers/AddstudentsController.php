<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;  
use Session; 
session_start(); 




class AddstudentsController extends Controller
{		
	public function addstudent(){	 
		return view('/admin.addstudent');   
   } 
   
	public function savestudent(Request $set){
		
		$data = array();
		$data['student_name'] 			= 	$set->student_name;
		$data['student_roll']			= 	$set->student_roll;
		$data['student_fathersname'] 	= 	$set->student_fathersname;
		$data['student_mathersname']	= 	$set->student_mathersname;
		$data['student_email'] 			= 	$set->student_email;
		$data['student_phone'] 			= 	$set->student_phone;
		$data['student_address']		= 	$set->student_address; 
		$data['student_password'] 		=	$set->student_password;
		$data['student_department']		=	$set->student_department;
		$data['student_addmissionyear'] =	$set->student_addmissionyear;
	  
		$image= $set->file('student_image');
		if ($image) {
		$image_name= str_random(20);
		$ext=strtolower($image->getClientOriginalExtension());
		$image_full_name=$image_name.'.'.$ext;
		$upload_path='image/';
		$image_url=$upload_path.$image_full_name;
		$success=$image->move($upload_path,$image_full_name);
		if ($success){
		 $data['student_image']=$image_url;
			DB::table('student_tbl')->insert($data);
			Session::put('message','Student added successfully!!');
			return Redirect::to('/addstudent'); 
			}
		}
		$data['image']=$image_url;
		
		DB::table('student_tbl')->insert($data);
		Session::put('message','successfully without image!!');
		return Redirect::to('/addstudent');
		
	
		DB::table('student_tbl')->insert($data);  
		Session::put('message','Data Added Successfully!!');
		return Redirect::to('/addstudent');  
   }
	 
	public function studentsetting(){ 
		//return view('student.student_view'); 
		echo"Bal";
   }
	 
	public function studentprofile(){ 
		$student_id = Session::get('student_id');
		$student_des=DB::table('student_tbl') 
		->select('*')
		->where('student_id',$student_id)
		->first();
		 
		$manage_student = view('student.student_view')
			->with('student_description',$student_des);
		return view('student_layout') 
			->with('student_view',$manage_student); 
	}  
	public function studentregistration(){  
		return view('student.student_registration');
   } 
	  
	public function savecourse(Request $set){ 
		$data = array();
		$data['student_id'] 			=$set->student_name; 
		$data['student_department']		=$set->student_department; 		
		DB::table('registration_tbl')->insert($data);  
		Session::put('message','Your Registration Successfull!!');
		return Redirect::to('/student_registration');  
   }   
   
	public function registerstudent(Request $set){  
		$all_student=DB::table('registration_tbl') 			 
			->get(); 
		$manage_student =view ('admin.register_student')
			->with('all_student',$all_student);
		return view('layout')
			->with('register_student',$manage_student);  
   }  
}
