<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin([
		    'name' => 'admin',
		    'email' => 'admin@gmail.com',
		    'password' => Hash::make('password')
		]);
		$admin->save();
    }
}
