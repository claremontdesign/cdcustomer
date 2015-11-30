<?php

return [
	'database' => [
		'customers' => [
			'table' => [
				'name' => 'customers',
				'primary' => 'id',
			],
			'model' => [
				'class' => Claremontdesign\Cdcustomer\Model\Customer::class,
				'fillable' => ['title', 'user_id', 'first_name', 'last_name', 'middle_name', 'email_address', 'gender', 'dob', 'age'],
			],
			'repository' => [
				'class' => Claremontdesign\Cdcustomer\Model\Repository\Customer::class
			]
		],
		'customersAddress' => [
			'table' => [
				'name' => 'customers_address',
				'primary' => 'id'
			],
			'model' => [
				'class' => Claremontdesign\Cdcustomer\Model\Addresses::class,
				'fillable' => [],
			],
			'repository' => [
				'class' => Claremontdesign\Cdcustomer\Model\Repository\Addresses::class
			]
		],
		'customersPhone' => [
			'table' => [
				'name' => 'customers_phone',
				'primary' => 'id'
			],
			'model' => [
				'class' => Claremontdesign\Cdcustomer\Model\Phone::class,
				'fillable' => [],
			],
			'repository' => [
				'class' => Claremontdesign\Cdcustomer\Model\Repository\Phone::class
			]
		],
	],

];
