<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bank;

class BankSeeder extends Seeder
{

    public function run()
   {
         Bank::create([
            'bankname' => 'GTBANK',
            'sortcode'=>'101',
        ]);


         Bank::create([
        'bankname' => 'Wema Bank',
        'sortcode'=>'102',
         ]);



         Bank::create([
        'bankname' => 'Fideliyty Bank',
        'sortcode'=>'103'
         ]);

          Bank::create([
              'bankname' => 'Union Bank',
              'sortcode'=>'104'
          ]);
}
}
