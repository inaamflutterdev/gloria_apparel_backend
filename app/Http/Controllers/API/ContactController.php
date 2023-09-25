<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;
use App\Models\User;
class ContactController extends Controller
{
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
    
       
        $emailAddress = 'you@example.com'; // Replace with your email address
        $data = $request->all();
    
        try {
            Mail::to($emailAddress)->send(new ContactFormSubmitted($data));
    
            return response()->json(['message' => 'Form submitted successfully']);
        } catch (\Exception $e) {
        
            return response()->json(['message' => 'Error sending email'], 500);
        }
    }
}
