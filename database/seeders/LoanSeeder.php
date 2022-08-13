<?php

namespace Database\Seeders;

use App\Models\Loan;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class LoanSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();
        $counter = 1;
        $loan_id = 981;
        while( $counter <= 100)
        {

            Loan::create([
                'loan_id' => $loan_id++,
                'user_id'=> 1,
                'firstname'=> $faker->name,
                'last_name'=>  $faker->name,
                'bank_id' => $faker->randomElement([1,2,3,4]),
                'dob'=> Carbon::now(),
                'bank_account' => $faker->numerify('##########'),
                'phone_number' => $faker->numerify('#######'),
                'amount' => $faker->unique()->numberBetween(1000, 10000),
                'status' => 0,
                'bvn' => $faker->numerify('##########'),
                'agent' => $faker->name,
                'date_release'  => Carbon::now(),
                'pay_date' => Carbon::now(),
                'tenor' => $faker->randomElement([90,180,360]),
                'interestrate' => $faker->randomElement([1,2,3,4,5])
            ]);

            $counter++;
        }
    }
}
