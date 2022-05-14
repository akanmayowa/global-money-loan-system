<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmsTable extends Migration
{

    public function up()
    {
        Schema::create('sms', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('agent_id');
            $table->string('sender');
            $table->string('reciever');
            $table->text('message');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sms');
    }
}
