<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Saving;
use Illuminate\Support\Facades\Auth;



class SavingSeeder extends Seeder
{

    public function run()
    {
        $counter = 450;
      while ($counter <= 800)
      {
               Saving::create([
                    'user_id' => 1,
                    'transaction_id'=> $counter++,
                    'saving_type'=>'Daily saving',
                    'saving_package'=>'2',
                    'bankaccount' => 1234569321,
                    'amount' => 100000,
                    'status' => '1',
                    'approvedby' => 'Agent X',
                    'interestrate' => '2',
                    'duration' => 30,
                    'transactiontype'=> 'credit'
                     ]);

                      Saving::create([
                        'user_id' => 1,
                        'transaction_id'=> $counter++,
                        'saving_type'=>'Weekly saving',
                        'saving_package'=>'3',
                        'bankaccount' => 1234564321,
                        'amount' => 230000,
                        'status' => '0',
                        'approvedby' => 'Agent X',
                        'interestrate' => '2',
                        'duration'=> 90,
                        'transactiontype'=> 'debit'
                         ]);


                    Saving::create([
                            'user_id' => 1,
                            'transaction_id'=> $counter++,
                            'saving_type'=>'Weekly saving',
                            'saving_package'=>'1',
                            'bankaccount' => 1234567321,
                            'amount' => 30000,
                            'status' => '0',
                            'approvedby' => 'Agent X',
                            'interestrate' => '2',
                            'duration' => 180,
                            'transactiontype'=> 'credit'
                             ]);

                       Saving::create([
                            'user_id' => 1,
                            'transaction_id'=> $counter++,
                            'saving_type'=>'Weekly saving',
                            'saving_package'=>'1',
                            'bankaccount' => 1234567321,
                            'amount' => 4000,
                            'status' => '0',
                            'approvedby' => 'Agent X',
                            'interestrate' => '2',
                            'duration' => 180,
                            'transactiontype'=> 'credit'
                        ]);
                  $counter++;
      }
    }
}
