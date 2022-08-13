<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Models\Saving;
use Carbon\Carbon;
use App\Models\Investment;

class ReportController extends Controller
{

    public function fetchSavingRecord()
    {
        $request = new Request();
        $start_date = $request->date('start_date');
        $end_date = $request->date('end_date');
        if($start_date && $end_date) {
            $start_date = Carbon::parse($start_date)->toDateTimeString();
            $end_date = Carbon::parse($end_date)->toDateTimeString();
               $savings = Saving::whereBetween('created_at',[$start_date,$end_date])->get();
        }
        else {
            $savings = Saving::latest()->get();
        }
        $total_amount = $savings->sum('amount');
        $total_interestrate = $savings->sum('interestrate');
        return view('admin.report.savings', compact('savings', 'total_amount', 'total_interestrate'));
    }



    public function fetchInvestmentRecord()
    {
        $request = new Request();
        $investment_start_date = $request->date('investment_start_date');
        $investment_end_date = $request->date('investment_end_date');
        if($investment_start_date && $investment_end_date)
        {
            $investment_start_date = Carbon::parse($investment_start_date)->toDateTimeString();
            $investment_end_date = Carbon::parse($investment_end_date)->toDateTimeString();
            $investments = Investment::whereBetween('created_at',[$investment_start_date,$investment_end_date])->get();
        }
        else{
              $investments = Investment::latest()->get();
        }
         $investments_total_amount = $investments->sum('amount');
         $investments_total_interestrate = $investments->sum('interestrate');
        return view('admin.report.investment', compact('investments', 'investments_total_amount', 'investments_total_interestrate'));
    }


    public function fetchPaymentRecord()
    {
        $request = new Request();
        $payment_start_date = $request->date('payment_start_date');
        $payment_end_date = $request->date('payment_end_date');
        if($payment_start_date && $payment_end_date)
        {
            $payment_start_date = Carbon::parse($payment_start_date)->toDateTimeString();
            $payment_end_date = Carbon::parse($payment_end_date)->toDateTimeString();
            $payments = Payment::whereBetween('created_at',[$payment_start_date,$payment_end_date])->get();
        }
        else{
            $payments = Payment::latest()->get();
        }
        $payments_total_amount = $payments->sum('amount');
        $payments_total_interestrate = $payments->sum('interestrate');
        return view('admin.report.payment', compact('payments','payments_total_amount', 'payments_total_interestrate'));
    }

    public function fetchProfitLossRecord()
    {
        return view('admin.report.profit-loss');
    }
}
