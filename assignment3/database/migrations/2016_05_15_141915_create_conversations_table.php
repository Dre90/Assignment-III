<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConversationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversations', function (Blueprint $table) {
            $table->integer('fromUser', false, false);
            $table->integer('toUser', false, false);
            $table->integer('itemId', false, false);
            $table->integer('convId', true)->unique();

            $table->primary(array('fromUser', 'toUser', 'itemId'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('conversations');
    }
}
