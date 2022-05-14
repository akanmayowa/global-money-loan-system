<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Loan;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        \App\Models\User::factory(10)->create();
       //  \App\Models\Loan::factory(10)->create();
       // $this->call(UsersTableSeeder::class);
       //  $this->call(BankSeeder::class);
       //   $this->call(SavingSeeder::class);
       // $this->call(LoanSeeder::class);
       \App\Models\Sms::factory(10)->create();
    }
}
