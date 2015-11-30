<?php

/**
 *
 */
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersPhoneTable extends Migration
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
		Schema::create(cd_config('database.customersPhone.table.name'), function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('customer_id')->unsigned();
			$table->string('phone')->nullable();
			/**
			 * Type of address:
			 * business, residential
			 */
			$table->string('phone_type')->nullable();
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
		Schema::drop(cd_config('database.customersPhone.table.name'));
	}

}
