<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->integer('itemId', true);
            $table->string('title');
            $table->integer('category');
            $table->string('description');
            $table->string('itemImage');
            $table->integer('userId', false, false);
            $table->timestamp('createdDate');
            $table->boolean('givenAway');

            $table->foreign('category')->references('categoryId')->on('category');
            $table->foreign('userId ')->references('userId ')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('items');
    }
}
