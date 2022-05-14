<?php

namespace App\Rules;

use App\Models\User;
use Illuminate\Contracts\Validation\Rule;

class NotReferringExisiting implements Rule
{
   

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

   
    public function passes($attribute, $value)
    {
//        dd($this->user->referrals);
        if($this->user->referrals->contains('email', $value))
        {
            return false;
        }
        return true;
    }

  
    public function message()
    {
        return 'You have already sent a referral to that person .';
    }
}
