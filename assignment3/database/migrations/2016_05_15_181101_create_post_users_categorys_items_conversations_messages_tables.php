<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostUsersCategorysItemsConversationsMessagesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->char('postnr', 4);
            $table->string('placeName');

            $table->primary('postnr');
        });

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

        Schema::create('category', function (Blueprint $table) {
            $table->integer('categoryId', true);
            $table->string('catName');
        });

        Schema::create('items', function (Blueprint $table) {
            $table->integer('itemId', true);
            $table->string('title');
            $table->integer('category');
            $table->string('description');
            $table->string('itemImage');
            $table->integer('user');
            $table->timestamp('createdDate');
            $table->boolean('givenAway');

            $table->foreign('category')->references('categoryId')->on('category');
            $table->foreign('user')->references('userId')->on('users');
        });

        Schema::create('conversations', function (Blueprint $table) {
            $table->integer('fromUser', false, false);
            $table->integer('toUser', false, false);
            $table->integer('itemId', false, false);
            $table->integer('convId', true)->unique();

            $table->unique(['fromUser', 'toUser', 'itemId']);

            $table->foreign('fromUser')->references('userId')->on('users');
            $table->foreign('toUser')->references('userId')->on('users');
            $table->foreign('itemId')->references('itemId')->on('items');
        });

        Schema::create('messages', function (Blueprint $table) {
            $table->integer('messagesId', true);
            $table->timestamp('timestamp');
            $table->text('text');
            $table->integer('convId', false, false);

            $table->foreign('convId')->references('convId')->on('conversations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('messages');
        Schema::drop('conversations');
        Schema::drop('items');
        Schema::drop('category');
        Schema::drop('users');
        Schema::drop('post');
    }
}
