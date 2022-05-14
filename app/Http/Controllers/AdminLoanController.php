<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Loan;
use App\Models\User;
use App\Models\LoanAgent;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AdminLoanController extends Controller
{

    public function index()
    {
        return view('admin.loan.index')
        ->with('loans', Loan::all());
    }

    public function pendingLoan()
    {
        $loans = Loan::where('status', '=', 0)->get();
         return view('admin.loan.pending')
        ->with('loans', $loans);
    }


    public function approvedLoan()
    {
        $loans = Loan::where('status', '=', 1)->get();
        return view('admin.loan.approved')
        ->with('loans', $loans);
    }


    public function create()
    {
        return view('admin.loan.create')
        ->with('loanAgent', LoanAgent::all())
        ->with('bank', Bank::all())
        ->with('customers', User::all());
    }

    public function getCustomer($id)
    {
        $customers = User::where('id', '=' ,$id)->get();
        return response()->json($customers);
    }


    public function loanAgent()
    {
        return view('admin.loan.agent');
    }


    public function store(Request $request, Loan $loan)
    {

          $request->validate([
            // 'loan_id' => 'required',
            'firstname' => 'required',
            'last_name' => 'required',
            'bank_id' => 'required',
            'dob' => 'required',
            'bank_account' => 'required|numeric|digits_between:1,10',
            'phone_number' => 'required|numeric|digits_between:1,10',
            'amount' => 'required',
            // 'status' => 'required',
            'bvn' => 'required|numeric',
            // 'agent' => 'required',
            // 'date_release' => 'required',
            // 'pay_date' => 'required',
            'tenor' => 'required',
            'interestrate' => 'required',
              ]);


            // $loan->transaction_id = random_int(1000, 9999999999);
            $loan->loan_id = random_int(2, 888888888888);
            $loan->user_id = auth()->user()->id;
            $loan->firstname = $request->firstname;
            $loan->last_name = $request->last_name;
            $loan->bank_id = $request->bank_id;
            $loan->dob = $request->dob;
            $loan->bank_account = $request->bank_account;
            $loan->phone_number = $request->phone_number;
            $loan->amount = $request->amount;
            $loan->bvn = $request->bvn;
            $loan->agent = auth()->user()->name;
            $loan->date_release = now();
            $loan->pay_date = now();
            $loan->tenor = $request->tenor;
            $loan->interestrate = $request->interestrate;
            $loan->status = 0;
            $loan->save();

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
