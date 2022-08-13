<?php

namespace Database\Seeders;

use App\Models\Investment;
use Illuminate\Database\Seeder;

class InvestmentSeeder extends Seeder
{

    public function run()
    {
        $counter = 200;
        $amount = 9000;
        while( $counter <= 1000)
        {
            Investment::create([
                'user_id' => 1,
                'transaction_id'=> $counter++,
                'amount' => $amount++,
                'investment_duration' => '90',
                'investment_plan' => 'global spread',
                'status' => 0,
                'agent' => 'timothy',
                'interestrate' => 2.0,
            ]);

            Investment::create([
                'user_id' => 1,
                'transaction_id'=> $counter++,
                'amount' => $amount++,
                'investment_duration' => '180',
                'investment_plan' => 'invest shares',
                'status' => 0,
                'agent' => 'jackie',
                'interestrate' => 3.0,
            ]);

            Investment::create([
                'user_id' => 1,
                'transaction_id'=> $counter++,
                'amount' => $amount++,
                'investment_duration' => '360',
                'investment_plan' => 'agriculture',
                'status' => 0,
                'agent' => 'timothy',
                'interestrate' => 10.0,
            ]);

            Investment::create([
                'user_id' => 1,
                'transaction_id'=> $counter++,
                'amount' => $amount++,
                'investment_duration' => '90',
                'investment_plan' => 'transportation',
                'status' => 0,
                'agent' => 'timothy',
                'interestrate' => 4.0,
            ]);


            Investment::create([
                'user_id' => 1,
                'transaction_id'=> $counter++,
                'amount' => $amount++,
                'investment_duration' => '180',
                'investment_plan' => 'fixed deposit',
                'status' => 0,
                'agent' => 'koko',
                'interestrate' => 15.0,
            ]);
            $counter++;
        }
    }
}
