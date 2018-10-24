<?php

namespace App\Http\Controllers; 


use DB;
use Session; 
session_start();
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
   
	//Log In
    public function login_dashboard(Request $request){  
	
			$email = $request->admin_email;
			$password= md5($request->admin_password);
			$result = DB::table('admin_tbl')
			->where('admin_email',$email)
			->where('admin_password',$password)
			->first();  
			
			if($result){
				Session::put('admin_email',$result->admin_email);
				Session::put('admin_id',$result->admin_id);  
				return Redirect::to('/admin_dashboard');  
			}
			else{
				Session::put('exception',' Email or Password Invalid');
				return Redirect::to('/backend');  
			} 
	}  
	
	//Return View
	public function admin_dashboard(){
		return view('admin.dashboard') ;
	}	
	
	// View Profile
	public function viewprofile(){
		return view('admin.view') ;
	}	
	
	// Setting 
	public function setting(){
		return view('admin.setting') ;
	}
	//Log Out
	public function logout(){
			Session::put('admin_email',null);
			Session::put('admin_id',null);
			return Redirect::to('/backend');
	}


	
	
	
	
	
	
	
	
	
		 /*
		 Student log in
		 */
		  
	public function student_login_dashboard(Request $student){   
	
		$email = $student->student_email;
		$password= $student->student_password;
		$result = DB::table('student_tbl')
		->where('student_email',$email)
		->where('student_password',$password)
		->first();  
		
		if($result){
			Session::put('student_email',$result->student_email);
			Session::put('student_id',$result->student_id);  
			return Redirect::to('/student_dashboard');  
		}
		else{
			Session::put('exception',' Email or Password Invalid');
			return Redirect::to('/');  
		} 
	
	}

	public function student_dashboard(){
		return view('student.dashboard') ;
	} 
	//Log Out
	public function studentlog_out(){
			Session::put('admin_email',null);
			Session::put('admin_id',null);
			return Redirect::to('/');
	}
	
	
}
