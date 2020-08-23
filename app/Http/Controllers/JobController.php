<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class JobController extends Controller
{
    public function showJobs(){
//        $data = Http::get('https://jsonblob.com/api/jsonBlob/cd2253ae-d62e-11ea-b785-537521d63268') -> json();
        return view('jobsBoard');
//         -> with(compact('data')

    }
}
