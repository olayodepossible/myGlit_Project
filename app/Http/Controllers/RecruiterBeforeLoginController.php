<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruiterBeforeLoginController extends Controller
{
    function showBeforeLogin(){
        return view('recruiterBefore_Login');
    }
}
