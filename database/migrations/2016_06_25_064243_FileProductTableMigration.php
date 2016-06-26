<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FileProductTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_product', function (Blueprint $table) {
            $table->integer('file_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->primary(['product_id', 'file_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('file_product');
    }
}
