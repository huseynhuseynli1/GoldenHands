<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\PostMail;

class PostController extends Controller
{
    public function index(Request $request)
    {
       $subject = $request->subject;
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $mes    = $request->msg;

        \Mail::send('auth.emails.send',['name'=> $name,'subject'=> $subject, 'email'=>$email, 'phone' => $phone , 'mes' => $mes],function($message) use ($email,$subject){
                 $message->from( $email, 'Qizil Eller');
                 $message->sender(   $email, 'Qizil Eller');
                 $message->to( 'huseyn.huseynli95@bk.ru' , 'Receiver')->subject($subject);
        });
        return 200;

    }
}
