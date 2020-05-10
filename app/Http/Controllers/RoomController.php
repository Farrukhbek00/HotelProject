<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Room;

class RoomController extends Controller
{
    public function getRoom() {

		return view('home.rooms', [

			'rooms' => Room::all()

		]);
	}

}
