<?php

/**
 *
 */
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/**
		 * Customers
		 */
		Schema::create(cd_config('database.customers.table.name'), function(Blueprint $table)
		{
			$table->increments(cd_config('database.customers.table.primary'));
			$table->integer('user_id')->unsigned()->unique()->nullable();
			$table->string('title')->nullable();
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('middle_name')->nullable();
			$table->string('email_address')->nullable();
			$table->string('gender')->nullable();
			$table->date('dob')->nullable();
			$table->integer('age')->unsigned()->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(cd_config('database.customers.table.name'));
	}

}
