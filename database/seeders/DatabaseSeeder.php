<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
            //\App\Models\User::factory(10)->create();
           //  \App\Models\Loan::factory(10)->create();
           $this->call(UsersTableSeeder::class);
         $this->call(BankSeeder::class);
          $this->call(SavingSeeder::class);
          \App\Models\Sms::factory(10)->create();
          $this->call(InvestmentSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(LoanSeeder::class);
        $this->call(LoanAgentSeeder::class);
    }
}
