<?php

class ItemsTableSeeder extends Seeder{

	public function run(){

		DB::table('items')->delete();


		$items = array(
				array(
						'owner_id' => '1',
						'email' => 'something@gmail.com',
						'name' => 'Pick up milk',
						'done' => false
					),
				array(
						'owner_id' => '1',
						'email' => 'something@gmail.com',
						'name' => 'Do coding',
						'done' => true
				),
				array(
						'owner_id' => '1',
						'email' => 'something@gmail.com',						
						'name' => 'Walk the dogs',
						'done' => false
				)
			);

		DB::table('items')->insert($items);

	}
}