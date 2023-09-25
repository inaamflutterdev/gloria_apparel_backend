<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;
use App\Models\User; 
class RequestController extends Controller
{
    public function view(){

        return view('welcome');

    }

    public function store(Request $request)
    {
       
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        
        User::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => $request->input('message'),
        ]);
        $email="inaamulhaq7847@gmail.com";
$useremail=$request->email;
$title="You have a new message from".$request->firstname;
$name=$request->firstname . $request->lastname;
$phone=$request->phone;
        // // Send an email
        // $emailAddress = 'inaamulhaq7847@gmail.com'; // Replace with your email address
        // Mail::to($emailAddress)->send(new ContactFormSubmitted($request->all()));
        mail::send('front.mailbody', ['msg' => strval($request->message)], function ($message) use ($useremail, $name,$phone) {
            $message->bcc($email)->subject($title);
        });

        // Redirect back with a success message
        return response()->json(['message' => 'Email Send successfully'], 201);
    }
}
