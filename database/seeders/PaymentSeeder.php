<?php

namespace Database\Seeders;

use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    public function run()
    {
        $counter = 1;
        $amount = 9000;
        $loan_id = 1234;
        $bank_account = 5678;
        while( $counter <= 1000)
        {
            Payment::create([
                'user_id' => 1,
                'transaction_id'=> $counter++,
                'full_name' => 'johnex Darey',
                'loan_id' => $loan_id++,
                'bank_id' => 1,
                'amount' => $amount++,
                'bank_account' => $bank_account++,
                'pay_date' => Carbon::now(),
                'status' => 0,
            ]);

            Payment::create([
                'user_id' => 1,
                'transaction_id'=> $counter++,
                'full_name' => 'nonky hugges',
                'loan_id' => $loan_id++,
                'bank_id' => 2,
                'amount' => $amount++,
                'bank_account' => $bank_account++,
                'pay_date' => Carbon::now(),
                'status' => 0,
            ]);


            Payment::create([
                'user_id' => 1,
                'transaction_id'=> $counter++,
                'full_name' => 'monica ushie',
                'loan_id' => $loan_id++,
                'bank_id' => 2,
                'amount' => $amount++,
                'bank_account' => $bank_account++,
                'pay_date' => Carbon::now(),
                'status' => 0,
            ]);


            Payment::create([
                'user_id' => 1,
                'transaction_id'=> $counter++,
                'full_name' => 'koko cherry',
                'loan_id' => $loan_id++,
                'bank_id' => 4,
                'amount' => $amount++,
                'bank_account' => $bank_account++,
                'pay_date' => Carbon::now(),
                'status' => 0,
            ]);



            $counter++;
        }
    }
}
