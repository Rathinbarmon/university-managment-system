<?php

namespace App\Http\Controllers;

use DB;
use Session; 
session_start();
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class EEEController extends Controller
{
    public function EEE(){
		$eeestudent_info=DB::table('student_tbl')
			->where(['student_department'=>2])
			->get();
		
		
		$manage_student=view('admin.eee')
			->with('eee_student_info',$eeestudent_info);
		return view('layout')
			->with('cee',$manage_student);
		return view('admin.eee');
	}
}
