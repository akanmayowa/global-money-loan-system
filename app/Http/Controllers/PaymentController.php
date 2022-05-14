<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Loan;
use Illuminate\Http\Request;
use app\Models\Payment;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;


class PaymentController extends Controller
{
  
    public function index()
    {
        return view('admin.paymentindex');

    }
  


    public function create()
    {
           $data['loans'] = DB::select("SELECT bank_id, id, bank_account, loan_id FROM loans" );
           return view('admin.payment', $data);
    }


    public function fetchBankName(Request $request)
    {
        $data['banks'] = Bank::where("id",$request->id)->get(["bankname", "id"]);
        return response()->json($data);
    }

    public function fetchBankAccount(Request $request)
    {
        $data['loanaccount'] = Loan::where("id",$request->id)->get(["bank_account", "id"]);
        return response()->json($data);
    }



    public function selectSearch(Request $request)
    {

    	$fullname = [];

        if($request->has('q')){
            $search = $request->q;
            $fullname =Loan::select("id", "firstname", "last_name")
            		->orWhereRaw("concat(firstname, ' ', last_name) LIKE '%$search%' ")
            		->get();
        }
        return response()->json($fullname);
    }



 


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'bankname'=> 'required',
            'sortcode'=>'required',
            'transaction_id' =>'required',
            'user_id' =>'required',
            'fullname' =>'required',
            'amount' =>'required',
            'loan_id' =>'required',
            'pay_date' =>'required',
            'amount_to_pay' =>'required',
            'status' =>'required',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages() 
            ]);
        }
        else
        {
            $payment = new Payment();
            $payment->bankname = $request->input('bankname');
            $payment->sortcode = $request->input('sortcode');
            $payment->transaction_id = $request->input('transaction_id');
            $payment->user_id = $request->input('user_id');
            $payment->fullname  = $request->input('fullname');
            $payment->amount = $request->input('amount');
            $payment->loan_id = $request->input('loan_id');
            $payment->pay_date = $request->input('pay_date');
            $payment->amount_to_pay = $request->input('amount_to_pay');
            $payment->status = $request->input('status');
            $payment->save();
            return response()->json([
                'status'=>200,
                'message'=>'Payment Added Successfully.'
            ]);
        }

    }

    public function edit($id)
    {
        $payment = Payment::find($id);
        if($payment)
        {
            return response()->json([
                'status'=>200,
                'payment'=> $payment,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No Payment Found.'
            ]);
        }

    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'bankname'=> 'required',
            'sortcode'=>'required',
            'transaction_id' =>'required',
            'user_id' =>'required',
            'fullname' =>'required',
            'amount' =>'required',
            'loan_id' =>'required',
            'pay_date' =>'required',
            'amount_to_pay' =>'required',
            'status' =>'required',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
               'errors'=>$validator->messages()
            ]);
        }
        else
        {


            $payment = Payment::find($id);
            if($payment)
            {
                $payment = new Payment();
                $payment->bankname = $request->input('bankname');
                $payment->sortcode = $request->input('sortcode');
                $payment->transaction_id = $request->input('transaction_id');
                $payment->user_id = $request->input('user_id');
                $payment->fullname  = $request->input('fullname');
                $payment->amount = $request->input('amount');
                $payment->loan_id = $request->input('loan_id');
                $payment->pay_date = $request->input('pay_date');
                $payment->amount_to_pay = $request->input('amount_to_pay');
                $payment->status = $request->input('status');
                $payment->update();

                return response()->json([
                    'status'=>200,
                    'message'=>'Payment Updated Successfully.'
                ]);
            }
            else
            {
                return response()->json([
                    'status'=>404,
                    'message'=>'No payment Found.'
                ]);
            }

        }
    }

    public function destroy($id)
    {
        $payment = Payment::find($id);
        if($payment)
        {
            $payment->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Payment Deleted Successfully.'
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No Payment Found.'
            ]);
        }
    }
}
