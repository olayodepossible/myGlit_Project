<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
/*Illuminate\Http\Client\Response;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Event;*/

class CandidateDashboardController extends Controller
{
    public function showDashboard(){
        $data = Http::get('https://jsonblob.com/api/jsonBlob/cd2253ae-d62e-11ea-b785-537521d63268') -> json();
        return view('candidateDashboard') -> with(compact('data'));

    }

}

