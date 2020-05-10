<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Mail\BookingConfirmationMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Gate;
use App\User;

class BookingController extends Controller
{
    public function getBookingForm()
    {
        return view('home.room_order');
    }


    public function bookingRoom(Request $req)
    {
        if(Auth::check()) {

        $user = Auth::user();
    

        $booking = new Booking([
            'arrival' => $req->input('arrival'),
            'book_time' => $req->input('book_time'),
            'checkout' => $req->input('checkout'),
            'breakfast' =>$req->input('breakfast'),
            'night' => $req->input('night'),
            'comment' => $req->input('comment')
        ]);

        $user->bookings()->save($booking);

        Mail::to($user->email)->send(new BookingConfirmationMail());

        return redirect()->route('Index');

        }

        return redirect()->route('login');
    	// return redirect()->route('Index')->with([
    	// 	// 'info'=>'Your booked a room successfully! We will wait you in '. $req->input('arrival')
    	// ]);
    }




    // For Admins
    //get
    public function getBooking()
    {
        return view('admin.bookings', [
            'bookings' => Booking::orderBy('id', 'desc')->get()
        ]);
    }
    
    
}
