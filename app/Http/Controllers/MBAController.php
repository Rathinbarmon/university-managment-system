<?php

namespace App\Http\Controllers;


use DB;
use Session; 
session_start();
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class MBAController extends Controller
{
     public function MBA(){
		$mbastudent_info=DB::table('student_tbl')
			->where(['student_department'=>5])
			->get();
		
		
		$manage_student=view('admin.mba')
			->with('mba_student_info',$mbastudent_info);
		return view('layout')
			->with('mba',$manage_student);
		return view('admin.mba');
	}
}
