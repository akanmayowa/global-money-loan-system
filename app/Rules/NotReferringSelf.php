<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\User;


class NotReferringSelf implements Rule
{
    
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

   
    public function passes($attribute, $value)
    {

        if($value == $this->user->email)
        {
            return false;
        }
        return true;
    }

    public function message()
    {
        return 'You cant sent a referral to your self .';
    }
}
