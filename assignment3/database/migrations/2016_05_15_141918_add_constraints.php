<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConstraints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {

            $table->foreign('postnr')->references('postnr')->on('post');
        });

        Schema::table('items', function ($table) {
            $table->foreign('category')->references('categoryId')->on('category');
            $table->foreign('userId ')->references('userId ')->on('users');
        });

        Schema::table('messages', function ($table) {
            $table->foreign('convId')->references('convId')->on('conversations');
        });

        Schema::table('conversations', function ($table) {
            $table->foreign('fromUser')->references('userId')->on('users');
            $table->foreign('toUser')->references('userId')->on('users');
            $table->foreign('itemId')->references('itemId')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
