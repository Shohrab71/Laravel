<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Student extends Controller
{

    public function index(){
    $students= Student:: all();
 
    foreach($students as $student)
    {
     echo $student->name,"<br>";
    }

}
}
