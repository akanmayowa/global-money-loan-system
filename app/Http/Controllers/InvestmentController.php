<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class InvestmentController extends Controller
{
    
    public function index()
    {
        //
    }

  
    public function create()
    {
        return view('user.investment');
    }


    public function store(Request $request)
    {
        $request->validate([
             'user_id' => 'required',
            'investment_plan' => 'required',
            'investment_duration' => 'required',
            'transaction_id' => 'required',
            'amount' => 'required',
            'status' => 'required',
            'agent' => 'required',
            'interestrate' => 'required',
            'transactiontype' => 'required',
              ]);
   
      $investment = new Investment();
      $investment = Investment::create([
          'user_id' => Auth::user()->id,
          'investment_plan'=> $request->invesment_plan,
          'investment_duration' => $request->investment_duration,
          'transaction_id' => $request->transaction_id,
          'amount' => $request->amount,
          'status'=> $request->status,
          'agent'=> $request->agent,
          'transactiontype' => $request->transactiontype,
          'interestrate' => $request->interestrate, 
      ]);
     
     Alert::success('Success Title', 'Success Message');
     return redirect()->back();
    }

    public function show(Investment $investment)
    {
        //
    }

    public function edit(Investment $investment)
    {
        //
    }


    public function update(Request $request, Investment $investment)
    {
        //
    }

  
    public function destroy(Investment $investment)
    {
        //
    }
}
