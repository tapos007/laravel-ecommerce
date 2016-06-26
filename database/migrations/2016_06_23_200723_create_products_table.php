<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->text('description');
			$table->float('buying_price');
			$table->float('sell_price');
			$table->tinyInteger('active')->default('1');
			$table->integer('stock');
			$table->timestamps();
			$table->softDeletes();

		});
	}

	public function down()
	{
		Schema::drop('products');
	}
}