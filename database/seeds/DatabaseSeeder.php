<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$users = array(
			['name' => 'Mark Sicad', 'email' => 'mark@gmail.com', 'password' => Hash::make('qweasd')],
			['name' => 'Eunice Sicad', 'email' => 'eunice@gmail.com', 'password' => Hash::make('qweasd')],
			['name' => 'Timo Sicad', 'email' => 'timo@gmail.com', 'password' => Hash::make('qweasd')],
		);

		foreach ($users as $user) {
			\App\User::create($user);
		}
		// $this->call('UserTableSeeder');
	}

}
