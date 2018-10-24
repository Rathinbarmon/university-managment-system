<?php

namespace App\Http\Controllers;
use DB;
use Session; 
session_start();
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class BBAController extends Controller
{
     public function BBA(){
		$bbastudent_info=DB::table('student_tbl')
			->where(['student_department'=>4])
			->get();
		
		
		$manage_student=view('admin.bba')
			->with('bba_student_info',$bbastudent_info);
		return view('layout')
			->with('bba',$manage_student);
		return view('admin.bba');
	}
}
