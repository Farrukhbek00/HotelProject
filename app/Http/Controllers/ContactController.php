<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Mail\ConfirmationMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Gate;
use App\User;

class ContactController extends Controller
{
    public function getContactForm()
    {
        return view('home.contact');
    }


    public function submitFeedback(Request $req)
    {
    
    	$contact = new Contact([
    		'name' => $req->input('name'),
    		'email' => $req->input('email'),
    		'phone' => $req->input('phone'),
    		'message' =>$req->input('message')
    	]);

    	$contact->save();

        Mail::to($contact->email)->send(new ConfirmationMail());

        return redirect()->route('Index');
    

    	// return redirect()->route('Index')->with([
    	// 	// 'info'=>'Your booked a room successfully! We will wait you in '. $req->input('arrival')
    	// ]);
    }




    // For Admins
    //get
    public function getContact()
    {
        return view('admin.feedbacks', [
            'contacts' => Contact::orderBy('id', 'desc')->get()
        ]);
    }
    
    
}