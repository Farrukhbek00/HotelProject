<?php

use Illuminate\Database\Seeder;
use App\Hotel;

class HotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $hotel = new Hotel([
        	'name' => 'De Luna',
        	'description' => 'As with the best flight booking sites, there’s no shortage of resources available when you need to book a cheap hotel room. From metasearch engines that send you to company sites, to bookable OTAs (online travel agencies).',
        	'address' => 'The White house, Ulitsa Tereshkovoy, 25, Orenburg, Orenburg Oblast, Russia, 460018'

        ]);
        $hotel->save();

    }
}
