<?php

namespace App\Http\Controllers;

use DB;
use Session; 
session_start();
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class CSEController extends Controller
{
    public function CSE(){
		
		$csestudent_info=DB::table('student_tbl')
			->where(['student_department'=>1])
			->get();
		
		
		$manage_student=view('admin.cse')
			->with('cse_student_info',$csestudent_info);
		return view('layout')
			->with('cse',$manage_student);
		return view('admin.cse');
	}
}
