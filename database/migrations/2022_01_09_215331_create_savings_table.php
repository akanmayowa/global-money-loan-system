<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavingsTable extends Migration
{

    public function up()
    {
        Schema::create('savings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->biginteger('transaction_id')->unique();
            $table->string('saving_type');
            $table->string('saving_package');
            $table->bigInteger('bankaccount');
            $table->decimal('amount',10,4);
            $table->boolean('status')->default(0);   //Note pending = 0 and approved = 1
            $table->decimal('interestrate', 10,4);
            $table->decimal('duration', 10,4);
            $table->string('approvedby')->nullable(0);
            $table->string('transactiontype')->default('credit');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('savings');
    }
}
