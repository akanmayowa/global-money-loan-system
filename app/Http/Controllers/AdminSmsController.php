<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Sms;


class AdminSmsController extends Controller
{

    public function __construct()
    {

    }



    public function index()
    {
        return view('admin.sms.index')
        ->with('sms', Sms::get())
        ->with('users', User::get());
    }

    public function create()
    {
        $customers = User::get();
        $agent_id = User::where('id', Auth::id())->get();
        return view('admin.sms.create', compact('customers', 'agent_id'));
    }



    public function sendSms(Request $request, Sms $sms)
    {
        $request->validate([
            'agent_id' => 'required',
            'sender' => 'required',
            'reciever' => 'required',
            'message' => 'required',
        ]);

        $encode_reciever_data = [];
    	// $encode_reciever_data['reciever'] = json_encode($request->agent_id);
         $encode_reciever_data = implode(',', $request->reciever);

        $sms->message = $request->message;
        $sms->sender = $request->sender;
        $sms->agent_id = $request->agent_id;
        $sms->reciever =  $encode_reciever_data;



        $sms->save();

        return redirect()->route('admin.sms.index');
        Alert::success('Success Title', 'Success Message');
    }
}
