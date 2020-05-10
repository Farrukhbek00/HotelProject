<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class HotelController extends Controller
{
	public function getHotel() {

		return view('home.index', [

			'hotel' => Hotel::first()

		]);
	}


}