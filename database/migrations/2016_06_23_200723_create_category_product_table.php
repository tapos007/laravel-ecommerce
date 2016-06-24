<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryProductTable extends Migration {

	public function up()
	{
		Schema::create('category_product', function(Blueprint $table) {
			$table->integer('category_id')->unsigned();
			$table->integer('product_id')->unsigned();
			$table->primary(['category_id', 'product_id']);

		});
	}

	public function down()
	{
		Schema::drop('category_product');
	}
}