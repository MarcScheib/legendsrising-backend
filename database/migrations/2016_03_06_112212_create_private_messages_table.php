<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('private_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sender_id', false, true);
            $table->integer('recipient_id', false, true);
            $table->string('subject', 255);
            $table->text('private_message');
            $table->boolean('read');
            $table->integer('parent_id', false, true);
            $table->integer('folder_id', false, true);
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
        Schema::drop('private_messages');
    }
}
