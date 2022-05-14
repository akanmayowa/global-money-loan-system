<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Referral;

class SubscriptionController extends Controller
{
    public function index()
    {
        return view('subscriptions.index');
    }


    public function store(Request $request, Referral $referral)
    {
        if($referral = $request->referral(request()->cookie('referral')));
        {
            $referral->complete();
        }
        return redirect()->route('user.index');
    }
}
