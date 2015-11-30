<?php

/**
 *
 */
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersAddressesTable extends Migration
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
		Schema::create(cd_config('database.customersAddress.table.name'), function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('customer_id')->unsigned();
			$table->string('line_one')->nullable();
			$table->string('line_two')->nullable();
			$table->string('line_three')->nullable();
			$table->string('city')->nullable();
			$table->string('zip')->nullable();
			$table->string('state')->nullable();
			$table->string('country_iso')->nullable();

			/**
			 * Type of address:
			 * business, residential
			 */
			$table->string('address_type')->nullable();
			$table->timestamps();
//			$table->foreign('customer_id')
//					->references(cd_config('database.customers.table.primary'))
//					->on(cd_config('database.customers.table.name'))
//					->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop(cd_config('database.customersAddress.table.name'));
	}

}
