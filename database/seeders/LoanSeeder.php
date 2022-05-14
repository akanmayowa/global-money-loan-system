<?php

namespace Database\Seeders;

use App\Models\Loan;
use Illuminate\Database\Seeder;

class LoanSeeder extends Seeder
{

    public function run()
    {
        Loan::create([
            'loan_id' => 1021,
            'user_id'=> 1,
            'firstname'=>'zuma jacob',
            'last_name'=>'multak',
            'bank_id' => '3345',
            'dob'=> '2001-05-11',
            'bank_account' => '0107815122',
            'phone_number' => 23333111,
            'amount' => 10339,
            'status' => 0,
            'bvn' => 1123378996,
            'agent' => 'Admin Boss',
            'date_release'  => '2120-10-10',
            'pay_date' => '2120-10-10',
            'tenor' => 60,
            'interestrate' => 3,
          ]);

    }
}
