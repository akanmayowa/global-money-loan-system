<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contacts;
use App\Models\Loan;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;


class ContactController extends Controller
{
    public function index()
    {

        return view('contacts.index')->with('contacts', Contacts::all())
                     ->with('users', User::all());
    }


    public function create()
    {
        return view('contacts.create')
        ->with('users', User::all());
  }


    public function store(Request $request)
    {

        $user = new User;
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
            'sentby' => 'required',
        ]);

        $input = $request->all();
    $input['user_id'] = auth()->user()->id;
        Contacts::create($input);
        Mail::send('contacts.contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'subject' => $input['subject'],
            'message' => $input['message'],
            'sentby' => $input['sentby'],
            'user_id' => auth()->user()->id,
            
        ), function($message) use ($request){
            $message->from('admin@globalinvestment.com.ng');      
            $message->to($request->email, 'Admin')->subject($request->get('subject'));
        });
        Alert::success('Success Title', 'Success Message');
        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}


