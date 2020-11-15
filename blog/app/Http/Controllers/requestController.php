<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class requestController extends Controller
{
    public function getrequest(request $request){

        echo "<pre>";
        // print_r($request->all());
         //print_r($request->input());
         //echo $request->input('name');
         print_r($request->path());
        echo "</pre>";

    }

    public function info(request $request)
    {
        echo "You are " . $request->segment(2) . '<br>';
        echo "Your age  " . $request->segment(3) ;
    }


    public function form()
    {
        return view('myform');
    }
    public function process(request $request)
    {   
        //return view('process');
       echo $request->input('name');
    }


    // public function getquery()
    // {
    //     $rows =  DB::table('students')->get();

    //     $data = DB::table('students')->where('id',1)->get();
        
    //     return view('students',['students'=>$rows]);
    // }

   // public function getquery2()
    // {


        //$data = DB::table('students')->where('id',2)->get();
        // $user = DB::table('students')->pluck('name','id');
        
        // return view('students',['data'=>$user]);


    
        //    DB::table('students')->orderBy('id')->chunk(2,function($students){


        //             echo '<pre>';
        //             echo $students;
        //             echo '</pre>';


        //    });


        //    $data= DB::table('students')->avg('id');

    //     //    print_r($data);

        

           
    // }

    // public function getquery2(){
    //     $students = DB::table('students')->select('name')->get();
    //     $table="<table border='1' width='300'";
    //     $table.="<tr><th>Name</th></tr>";
    //     foreach($students as $student){
 
    //     $table.="<tr><td>$student->name</td></tr>";
                 
    //     }
    //     $table.="</table>";
    //     echo $table;
    // }


     public function studentform()
     {
         return view('studentForm');
     }  

     
     public function insert(Request $request)
     {
        
       $data['name']= $request->input('name');
       $data['email']= $request->input('email');

       if(DB::table('students')->insert($data)->uniqid())
       {
           echo "Data has been inserted";
       };
    

     } 
     


     public function getquery3()
     {
            $data=DB::table('students')->insert([['name' => 'Masud Alam', 'email' => 'masud@w3prorammers.com'], ['name' => 'Amena Khatun', 'email' => 'amena@gmail.com']]);
    
            echo $data?"Insert Success":"Data Insert Fail";
     }


     public function insert_getid()
     {  

        $id = DB::table('students')->insertGetId(['name' => 'Zaman','email' => 'zaman@gamil.com']);
 
       echo "Your Last Inserted Id:". $id;
         
     }


     public function updatedata()
     {
         $data = DB::table('students')->delete();


         echo $data?"Updated successfull":"Update Failed";
     }


}

