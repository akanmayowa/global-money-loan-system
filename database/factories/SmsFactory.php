<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\Factory;

class SmsFactory extends Factory
{

    public function definition()
    {

       if (Auth::check()) { $user_id = Auth::id(); }else{ $user_id = User::get()->first(); }
        return [
            'sender' => 'GLOBAL MONEY',
            'reciever' => 2347064973701,
            'message' => $this->faker->text(30),
            'agent_id' => $user_id,
        ];
    }
}
