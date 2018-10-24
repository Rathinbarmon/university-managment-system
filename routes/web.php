<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('student_login');
});
Route::get('/backend', function () {
    return view('admin/admin_login');
});

//admin controller
Route::post('/adminlogin',		'AdminController@login_dashboard');
Route::get('/admin_dashboard', 	'AdminController@admin_dashboard');
Route::get('/logout',			'AdminController@logout'); 



//student controller
Route::post('/studentlogin', 		'AdminController@student_login_dashboard');
Route::get('/student_dashboard', 	'AdminController@student_dashboard');
Route::get('/studentlogout', 		'AdminController@studentlog_out');

Route::get('/student_setting',		'AddstudentsController@studentsetting'); 
Route::get('/student_profile',		'AddstudentsController@studentprofile'); 



Route::get('/student_registration',		'AddstudentsController@studentregistration'); 
Route::get('/save_course',				'AddstudentsController@savecourse');  
Route::get('/register_student',				'AddstudentsController@registerstudent'); 





//
Route::get('/allstudent',					'AllstudentsController@allstudent'); 
Route::get('/student_delete/{student_id}',	'AllstudentsController@student_delete'); 
Route::get('/student_view/{student_id}',	'AllstudentsController@studentview'); 
Route::get('/student_edit/{student_id}',	'AllstudentsController@studentedit'); 
Route::post('/update_student/{student_id}',	'AllstudentsController@studentupdate'); 


Route::get('/addstudent',	'AddstudentsController@addstudent'); 
Route::get('/save_student',	'AddstudentsController@savestudent'); 


Route::get('/tutionfee',	'TutionController@tutionfee'); 
Route::get('/cse',			'CSEController@CSE'); 
Route::get('/eee',			'EEEController@EEE'); 
Route::get('/ece',			'ECEController@ECE'); 
Route::get('/bba',			'BBAController@BBA'); 
Route::get('/mba',			'MBAController@MBA'); 


Route::get('/viewprofile',	'AdminController@viewprofile'); 
Route::get('/setting',		'AdminController@setting');  


 ////extra coding
 
/* Route::get('/student_registration',	'AllstudentsController@student_registration'); 
Route::get('/subject_list',	'AllstudentsController@subject_list');  */