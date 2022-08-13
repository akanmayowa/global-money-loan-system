<?php

namespace Database\Seeders;

use App\Models\LoanAgent;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LoanAgentSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $counter = 1;
        while( $counter <= 5)
        {
            LoanAgent::create([
                'name' => $faker->name,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
            ]);
            $counter ++;
        }
    }
}
