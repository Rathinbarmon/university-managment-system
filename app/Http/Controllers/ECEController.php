<?php

namespace App\Http\Controllers;

use DB;
use Session; 
session_start();
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class ECEController extends Controller
{
     public function ECE(){
		$ecestudent_info=DB::table('student_tbl')
			->where(['student_department'=>3])
			->get();
		
		
		$manage_student=view('admin.ece')
			->with('ece_student_info',$ecestudent_info);
		return view('layout')
			->with('ece',$manage_student);
		return view('admin.ece');
	}
}
