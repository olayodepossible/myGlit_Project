<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidateManageJobController extends Controller
{
    function showCandidateJobs(){
        return view('candidateManageJob');
    }
}
