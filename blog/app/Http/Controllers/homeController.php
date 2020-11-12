<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index($n="Monir", $a="15")
    {
        echo "Hello World! This is Laravel <br>";
        echo "Your Name is " . $n . "Your age is ". $a;

    }

    public function getData(Request $request)
    {
        echo $request->name . "<br>";
        echo $request->age . "<br>";

    }
}
