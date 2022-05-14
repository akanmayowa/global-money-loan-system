<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{

    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->integer('loan_id');
            $table->integer('user_id');
            $table->string('firstname');
            $table->string('last_name');
            $table->string('bank_id');
            $table->date('dob');
            $table->bigInteger('bank_account');
            $table->integer('phone_number');
            $table->decimal('amount', 10, 4);
            $table->boolean('status')->default('0');
            $table->bigInteger('bvn');
            $table->string('agent');
            $table->date('date_release')->nullable();
            $table->date('pay_date')->nullable();
            $table->bigInteger('tenor');
            $table->decimal('interestrate', 10,4);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('loans');
    }
}
