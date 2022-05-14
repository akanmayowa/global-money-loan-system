<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{

    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('transaction_id');
            $table->bigInteger('user_id');
            $table->string('fullname');
            $table->decimal('amount', 10, 4);
            $table->bigInteger('loan_id');
            $table->bigInteger('bank_id');
            $table->bigInteger('bank_account');
            $table->date('pay_date');
            $table->decimal('amount_to_pay',10,5);
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
