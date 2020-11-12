<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showUser extends Controller
{
    public function userRestrict(Request $request)
    {
        echo "Welcome you are $request->name you are a valid User";
    }
}
