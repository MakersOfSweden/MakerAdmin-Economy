<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEconomyAccountingperiodTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("economy_accountingperiod", function (Blueprint $table)
		{
			$table->increments("economy_accountingperiod_id");
			$table->string("title");
//			$table->text("description")->nullable();

			$table->string("name");
			$table->date("start");
			$table->date("end");

			$table->dateTimeTz("created_at")->default(DB::raw("CURRENT_TIMESTAMP"));
			$table->dateTimeTz("updated_at")->nullable();
			$table->dateTimeTz("deleted_at")->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop("economy_accountingperiod");
	}
}