<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobSearchPageController extends Controller
{
    function showPage(){
        return view('jobSearchPage');
    }
}
