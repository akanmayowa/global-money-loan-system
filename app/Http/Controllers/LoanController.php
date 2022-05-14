<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;
use App\Models\Loan;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoanController extends Controller
{
   

    public function index()
    {

    }

    public function create()
    {
        
        return view('user.loan')->with('bank', Bank::all());
    }

 
    public function store(Request $request)
    {
                
        $request->validate([
            'loan_id' => 'required',
             'user_id' => 'required',
            'firstname' => 'required',
            'last_name' => 'required',
            'bank_id' => 'required',
            'dob' => 'required',
            'bank_account' => 'required|numeric|digits_between:1,10||min:10|max:10',
            'phone_number' => 'required|numeric|digits_between:1,10||min:11|max:11',
            'amount' => 'required',
            'status' => 'required',
            'bvn' => 'required|numeric|digits_between:1,10||min:11|max:11',
            'agent' => 'required',
            'date_release' => 'required',
            'pay_date' => 'required',
            'tenor' => 'required',
            'interestrate' => 'required',
              ]);
   
      $loan = new Loan;
      $loan = Loan::create([
          'user_id' => Auth::user()->id,
          'transaction_id'=> random_int(100000, 99999),
          'loan_id' => $request->loan_id,
          'user_id' => $request->user_id,
          'firstname' => $request->firstname,
          'last_name' => $request->last_name,
          'bank_id' => $request->bank_id,
          'dob' => $request->dob,
          'bank_account' => $request->bank_account,
          'phone_number' => $request->phone_number,
          'amount'=> $request->amount,
          'status'=> $request->status,
          'bvn' => $request->bvn,
          'agent'=> $request->agent,
          'date_release' => $request->date_release,
          'pay_date' => $request->pay_date,
          'tenor'=> $request->tenor,
          'interestrate' => $request->interestrate, 
      ]);
     
     Alert::success('Success Title', 'Success Message');
     return redirect()->back();
           
    }


    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
