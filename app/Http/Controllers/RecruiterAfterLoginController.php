<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruiterAfterLoginController extends Controller
{
    public function showAfterLogin(){
        return view('recruiterAfter_Login');
    }
}
