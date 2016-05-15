<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('userId', true);
            $table->string('firstName');
            $table->string('lastName');
            $table->string('address');
            $table->char('postnr', 4);
            $table->integer('phonenumber',false);
            $table->string('mail');
            $table->string('password');
            $table->string('userImage');

            $table->foreign('postnr')->references('postnr')->on('post');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
