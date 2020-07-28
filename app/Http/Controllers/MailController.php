<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(){
        $to_name = 'Akin';
        $to_email = "olayodepossible@gmail.com";
//        $to_email = "mayuresh@gratitudeindia.com";
//        $to_email = "siddhanta@gratitudeindia.com";
        $details =[
            'title' => 'Melayne',
            'body' => 'Firstsource'
        ];

        Mail::send("emails.interviewMail", $details, function($message) use ($to_name, $to_email) {
            $message->to($to_email)
                ->subject('MyGlit Interview Details');
            $message->from("abayomi.gratitudeindia@gmail");
        });
        echo "Mail sent successfully to {$to_email}";

    }

};
