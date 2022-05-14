<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ForgetReferralCookie
{
    public function __construct()
    {
        //
    }

 
    public function handle($event)
    {
        cookie()->queue(cookie()->forget('referral'));
    }
}
