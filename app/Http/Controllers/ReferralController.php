<?php

namespace App\Http\Controllers;

use App\Mail\ReferralRecieved;
use Illuminate\Http\Request;
use App\Models\Referral;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mailer;
use App\Rules\NotReferringExisiting;
use App\Rules\NotReferringSelf;
use App\Http\Requests\ReferralStoreRequest;

class ReferralController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $referrals = $request->user()->referrals()->orderBy('completed', 'asc')->get();
        return view('referral.index', compact('referrals'));
    }

    public function store(ReferralStoreRequest $request)
    {
      $referral = $request->user()->referrals()->create($request->only('email'));
       Mail::to($referral->email)->send(new ReferralRecieved($request->user(), $referral));
       Alert::success('Success Title', 'Success Message');
        return redirect()->back();
       
    }
}
