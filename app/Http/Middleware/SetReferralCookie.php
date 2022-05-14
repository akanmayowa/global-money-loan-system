<?php

namespace App\Http\Middleware;

use App\Models\Referral;
use Closure;
use Facade\Ignition\DumpRecorder\Dump;
use Illuminate\Http\Request;

class SetReferralCookie
{
  
    public function handle(Request $request, Closure $next)
    {
       
        if($referral = $request->referral($request->referral))
        {
            cookie()->queue(cookie()->forever('referral', $referral->token));
        }
        return $next($request);
    }
}
