<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmationMail;


Route::get('/', function () {
    return redirect('/home');
});


Route::get('/home', [
    'uses' => 'HotelController@getHotel',
    'as' => 'Index'
]);

Route::get('/rooms', [
    'uses' => 'RoomController@getRoom',
    'as' => 'Rooms'
]);

Route::get('/about', function () {
    return view('home.about');
});


Route::get('/booking', [
	'uses' => 'BookingController@getBookingForm',
    'as' => 'BookingPage'
]);

Route::post('/booking', [
		'uses' => 'BookingController@bookingRoom',
		'as' => 'bookingRoom'
]);


Route::get('/contact', [
	'uses' => 'ContactController@getContactForm',
    'as' => 'ContactPage'
]);

Route::post('/contact', [
		'uses' => 'ContactController@submitFeedback',
		'as' => 'submitFeedback'
]);




// Admin Pages
Route::group([
	'prefix' => 'admin',
	'middleware' => ['auth:admin', 'verified']

], function() {

	Route::get('/users', [
		'uses' => 'UserController@getUsers',
		'as' => 'adminUsers'
	]);

	Route::get('/bookings', [
		'uses' => 'BookingController@getBooking',
		'as' => 'adminIndex'
	]);

	Route::get('/feedbacks', [
		'uses' => 'ContactController@getContact',
		'as' => 'adminFeedbacks'
	]);


	Route::get('/', [
		'uses' => 'AdminController@index',
		'as' => 'adminDashboard'
	]);
});


Route::get('/admin/login', [
	'uses' => 'Auth\AdminLoginController@showLoginForm',
	'as' => 'adminLogin'
]);

Route::post('/admin/login', [
	'uses' => 'Auth\AdminLoginController@login',
	'as' => 'adminLoginSubmit'
]);

Auth::routes();



