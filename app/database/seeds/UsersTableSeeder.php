<?php

class UsersTableSeeder extends Seeder{

	public function run(){

		DB::table('users')->delete();


		$users = array(
				array(
						'name' => 'Shashi',
						'password' => Hash::make('shashi'),
						'email' => 'shashi.carbon27@gmail.com',

					)
			);

		DB::table('users')->insert($users);

	}
}