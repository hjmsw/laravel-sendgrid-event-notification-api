<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        {
//            "email": "example@test.com",
//        "timestamp": 1529959204,
//        "smtp-id": "<14c5d75ce93.dfd.64b469@ismtpd-555>",
//        "event": "processed",
//        "category": "cat facts",
//        "sg_event_id": "M8ciYYFr8lWt6iH4maWgWg==",
//        "sg_message_id": "14c5d75ce93.dfd.64b469.filter0001.16648.5515E0B88.0"
//    },

        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('smtp_id');
            $table->string('event');
            $table->string('category');
            $table->string('sg_event_id');
            $table->string('sg_message_id');
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
        Schema::dropIfExists('events');
    }
}
