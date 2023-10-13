<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;
class MailController extends Controller
{
    public function index(){
        $mailData = [
            'title' => 'Mail from mouliya',
            'body' => 'this is a test using SMTP'
        ];
        Mail::to('info@mouliya.com')->send(new DemoMail($mailData));
        dd('email sent successfully');
    }
}
