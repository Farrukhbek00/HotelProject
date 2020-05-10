<?php

use Illuminate\Database\Seeder;
use App\Contact;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = new Contact([
		    'name' => 'Islam Akhrarov',
		    'email' => 'islam@gmail.com',
		    'phone' => '(99)932-92-34',
		    'message' => 'Your hotel do lovely'

		]);
		$contact->save();

		$contact = new Contact([
		    'name' => 'Masrur Bekmirzayev',
		    'email' => 'masrur@gmail.com',
		    'phone' => '(99)882-12-54',
		    'message' => 'Thank you so much. My 10 days with your hotel was awesome.'

		]);
		$contact->save();

		$contact = new Contact([
		    'name' => 'Abduvohid Isroilov',
		    'email' => 'abduvohid@gmail.com',
		    'phone' => '(99)712-21-76',
		    'message' => 'I had a very good vacation'

		]);
		$contact->save();
    }
}
