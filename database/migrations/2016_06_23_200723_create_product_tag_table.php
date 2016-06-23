<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductTagTable extends Migration {

	public function up()
	{
		Schema::create('product_tag', function(Blueprint $table) {
			$table->integer('product_id')->primary()->unsigned();
			$table->integer('tag_id')->primary()->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('product_tag');
	}
}