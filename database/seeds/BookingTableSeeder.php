<?php

use Illuminate\Database\Seeder;
use App\Booking;

class BookingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $booking = new Booking([
		    'arrival' => '2020/12/12',
		    'checkout' => '2020/12/12',
		    'breakfast' => 2,
		    'night' => 2,
		    'comment' => 'I may stay more days in your hoetl',
		    'book_time' => '2020/12/12',
		    'user_id' => 1,
		]);
		$booking->save();
    }
}
