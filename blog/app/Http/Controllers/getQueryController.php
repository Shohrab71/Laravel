<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class getQueryController extends Controller
{


    // // public function index(){
    // // 	$data = DB::table('students')->get();
    // // 	return view('form/students', ['students'=> $data]);

    // // }

    // //  public function edit(){
     	
    // // 	$data = DB::table('students')->get();
    // // 	$data = DB::table('students')->get();
    // // 	return view('form/students', ['students'=> $data]);

	// // }
	
	
	// public function index(){
	// 	// $rows = DB::table('students')->distinct()->get(['name']);
	// 	// foreach($rows as $row){
	// 	// 	echo $row->name . "<br>";
	// 	// }

	
     
	// 		$query = DB::table('students')->join('contacts','students.id','=','contacts.student_id')->select('students.id','name','email','phone');
	// 		$students = $query->get();
	 
	// 		$table="<table border='1' width='300'";

	// 		$table.="<tr><th>Name</th><th>Email</th><th>Phone</th><th>Action</th></tr>";
	// 		foreach($students as $student){
	 
	// 		$table.="<tr><td>$student->name</td><td>$student->email</td><td>$student->phone</td><td><a href='/edit/$student->id'>Edit</a></td></tr>";
					 
	// 		}
	// 		$table.="</table>";
	// 		echo $table;
		
	// }

	// public function studentForm(){
	// 	return view('form/studentForm');
	// }

	// public function insert(Request $req){

	
	// 	$id = DB::table('students')->insertGetId([
	// 		'name' => $req->stname,
	// 		'email' => $req->email
	// 		]);


	// 	if(DB::table('contacts')->insert([
	// 		'email' => $req->email,
	// 		'phone' => $req->phone,
	// 		'student_id' => $id,
	// 	])){
	// 		echo "Inserted";
	// 	}
	
	// }

	// public function edit(){
	// 	return view('form/student_edit');
	
	// }

	public function showstudentdata()
	{
		$data = DB::table('students')->get();


		print_r($data);


		
	}	



}
