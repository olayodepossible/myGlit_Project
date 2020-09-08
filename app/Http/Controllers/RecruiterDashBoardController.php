<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruiterDashBoardController extends Controller
{
    function showDashboard(){
        return view('recruiter-dashboard');
    }
}
