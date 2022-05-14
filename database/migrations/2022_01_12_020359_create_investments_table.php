<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestmentsTable extends Migration
{

    public function up()
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->bigInteger('transaction_id');
            $table->string('investment_duration');
            $table->string('investment_plan');
            $table->decimal('amount',10,4);
            $table->boolean('status')->default(0);
            $table->string('agent')->nullable(0);
            $table->decimal('interestrate', 10, 4);
            $table->string('transactiontype')->default('credit');
            $table->timestamps();
        });
    }



    public function down()
    {
        Schema::dropIfExists('investments');
    }
}
