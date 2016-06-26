<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('category_product', function(Blueprint $table) {
			$table->foreign('category_id')->references('id')->on('categories')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('category_product', function(Blueprint $table) {
			$table->foreign('product_id')->references('id')->on('products')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('product_tag', function(Blueprint $table) {
			$table->foreign('product_id')->references('id')->on('products')
						->onDelete('cascade')
						->onUpdate('restrict');
		});
		Schema::table('product_tag', function(Blueprint $table) {
			$table->foreign('tag_id')->references('id')->on('tags')
						->onDelete('cascade')
						->onUpdate('restrict');
		});


		Schema::table('file_product', function(Blueprint $table) {
			$table->foreign('product_id')->references('id')->on('products')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
		Schema::table('file_product', function(Blueprint $table) {
			$table->foreign('file_id')->references('id')->on('files')
				->onDelete('cascade')
				->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('category_product', function(Blueprint $table) {
			$table->dropForeign('category_product_category_id_foreign');
		});
		Schema::table('category_product', function(Blueprint $table) {
			$table->dropForeign('category_product_product_id_foreign');
		});
		Schema::table('product_tag', function(Blueprint $table) {
			$table->dropForeign('product_tag_product_id_foreign');
		});
		Schema::table('product_tag', function(Blueprint $table) {
			$table->dropForeign('product_tag_tag_id_foreign');
		});

		Schema::table('file_product', function(Blueprint $table) {
			$table->dropForeign('file_product_product_id_foreign');
		});
		Schema::table('file_product', function(Blueprint $table) {
			$table->dropForeign('file_product_file_id_foreign');
		});
	}
}