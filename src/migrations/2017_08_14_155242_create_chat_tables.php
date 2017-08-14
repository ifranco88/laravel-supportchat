<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('chat_conversations', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('data');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('chat_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('chat_id')->references('id')->on('chats');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat_conversation');
        Schema::dropIfExists('chat');
    }
}
