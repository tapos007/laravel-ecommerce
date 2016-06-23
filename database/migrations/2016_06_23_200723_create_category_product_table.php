<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryProductTable extends Migration {

	public function up()
	{
		Schema::create('category_product', function(Blueprint $table) {
			$table->integer('category_id')->primary()->unsigned();
			$table->integer('product_id')->primary()->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('category_product');
	}
}