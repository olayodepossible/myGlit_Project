<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageJobController extends Controller
{
    function showManageJobs(){
        return view('manageJob');
    }
}
