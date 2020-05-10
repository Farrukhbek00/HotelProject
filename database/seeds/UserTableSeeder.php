<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User([
		    'name' => 'Islam Akhrarov',
		    'email' => 'islam@gmail.com',
		    'password' => Hash::make('Ii1234567!'),
		    'phone' => '+(998)932-92-34',
		    'birthDate' => '12-12-1999',
		    'postalCode' => '1111111',
		    'city' => 'Bukhoro',
		    'passportNumber' => 'AB2992123'

		]);
		$user->save();
    }
}
