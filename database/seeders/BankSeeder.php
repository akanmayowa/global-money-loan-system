<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bank;

class BankSeeder extends Seeder
{
    
    public function run()
    {
        $bank =  Bank::create([
            'bankname' => 'GTBANK',
            'sortcode'=>'101',
        ]);
        

        $bank =  Bank::create([
        'bankname' => 'Wema Bank',
        'sortcode'=>'102',
         ]);



         $bank =  Bank::create([
        'bankname' => 'Fideliyty Bank',
        'sortcode'=>'103'

]);

}
}