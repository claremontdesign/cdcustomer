<?php

/*
  |--------------------------------------------------------------------------
  | Model Factories
  |--------------------------------------------------------------------------
  |
  | Here you may define all of your model factories. Model factories give
  | you a convenient way to create models for testing and seeding your
  | database. Just tell the factory how a default model should look.
  |
 */

$factory->define(cd_config('database.customers.model.class'), function (Faker\Generator $faker) {
	return [
		'title' => $faker->title,
		'first_name' => $faker->firstName,
		'last_name' => $faker->lastName,
		'middle_name' => $faker->randomLetter,
		'email_address' => $faker->email,
		'gender' => rand(0, 1) == 1 ? 'f' : 'm',
		'dob' => $faker->date('Y-m-d'),
		'age' => $faker->numberBetween(18, 70),
		'updated_at' => $faker->date('Y-m-d')
	];
});
