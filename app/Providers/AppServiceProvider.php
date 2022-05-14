<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use App\Models\Referral;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

 
    public function boot()
    {
        Request::macro('referral', function($token){
            return Referral::whereToken($token)
            ->WhereNotCompleted() 
            ->WhereNotFromUser(request()->user())
             ->first();
      }  
    );
    }
}
