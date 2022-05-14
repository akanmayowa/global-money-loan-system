<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;

class UsersTableSeeder extends Seeder
{



    public function run()
    {
       $user =  User::create([

                'username' => 'akanmayowa01',
                'name'=>'akan ekpoma',
                'email'=>'akanmayowa@outlook.com',
                'permission'=>'2',
                'referral' => 'akanmayowa',
                'password'=> bcrypt('12345678'),
        ]);

         Profile::create([
            'user_id' => $user->id,
            'nin' =>'231434',
            'bvn' => '1255',
            'passport' => 'uploads/id_card/01.JPG',
            'id_card' => 'uploads/id_card/01.JPG',
            'gender' => 'male',
         ]);


         

    }
}
