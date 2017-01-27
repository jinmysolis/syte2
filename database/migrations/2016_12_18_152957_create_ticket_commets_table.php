<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketCommetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ticket_commets', function(Blueprint $table)
		{
			$table->increments('id');

			$table->mediumText('comment');
                        $table->string('link')->nullable();

                        $table->integer('user_id')->unsigned();
                        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

                        $table->integer('ticket_id')->unsigned();
                        $table->foreign('ticket_id')->references('id')->on('tickets');


			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ticket_commets');
	}

}
