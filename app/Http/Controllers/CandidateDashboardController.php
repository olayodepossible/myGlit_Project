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
//        var_dump($data); 'https://jsonblob.com/api/jsonBlob/cd2253ae-d62e-11ea-b785-537521d63268'
        return view('candidateDashboard') -> with(compact('data'));

    }




/*
    public function viewJobs(Request $request){
        $events = Event::orderBy('id', 'desc')->get();
        return response()->json($events);
    }*/



/*
 * composer require guzzlehttp/guzzle
 * $response = Http::get('http://test.com');
$response = Http::post('http://test.com');
$response = Http::put('http://test.com');
$response = Http::patch('http://test.com');
$response = Http::delete('http://test.com');

$response->body() : string;
$response->json() : array;
$response->status() : int;
$response->ok() : bool;
$response->successful() : bool;
$response->serverError() : bool;
$response->clientError() : bool;
$response->header($header) : string;
$response->headers() : array;*/

}

