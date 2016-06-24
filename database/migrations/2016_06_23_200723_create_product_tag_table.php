<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductTagTable extends Migration {

	public function up()
	{
		Schema::create('product_tag', function(Blueprint $table) {
			$table->integer('product_id')->unsigned();
			$table->integer('tag_id')->unsigned();
			$table->primary(['product_id', 'tag_id']);
		});
	}

	public function down()
	{
		Schema::drop('product_tag');
	}
}