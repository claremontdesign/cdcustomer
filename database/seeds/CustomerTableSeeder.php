<?php

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		factory(cd_config('database.customers.model.class'), 50)->create()->each(function($u) {
			$u->save();
		});
	}

}
