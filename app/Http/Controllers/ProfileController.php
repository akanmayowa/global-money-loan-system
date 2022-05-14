<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{




    
    public function index()
    {
        return view('user.profile')->with('user', Auth::user());



    }

  
    public function create()
    {
        
    }

 
    public function store(Request $request)
    {
        
    }


    public function show($id)
    {
        
    }

 
    public function edit($id)
    {
        
    }


    public function update(Request $request)
    {
        $request->validate([
              'name' => 'required',
              'email' => 'required|email',
              'username' => 'required',
       //       'passport' => 'required',
         //     'id_card' => 'required',
              'bvn' => 'required',
              'nin' => 'required',
              'gender' => 'required',
        ]);


      //  dd($request->all());
        $user = Auth::user();

        if($request->hasFile('passport') && $request->hasFile('id_card'))
        {
            $passport = $request->passport;
            $passport_new_name = time(). $passport->getClientOriginalName();
            $passport->move('uploads/passport', $passport_new_name);
            $user->profile->passport = 'uploads/passport/' . $passport_new_name;

            $id_card = $request->id_card;
            $id_card_new_name = time(). $id_card->getClientOriginalName();
            $id_card->move('uploads/id_card', $id_card_new_name);
            $user->profile->id_card = 'uploads/id_card/' . $id_card_new_name;
            $user->profile()->save();

        }

        

        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = $request->username;
        //$user->profile->user_id = Auth::user();
        $user->profile->gender  = $request->gender;
        $user->profile->bvn = $request->bvn;
        $user->profile->nin  = $request->nin;

        $user->save();
        $user->profile->save();
        
        Alert::success('Success Title', 'Success Message');
        //alert()->success('Title','Lorem Lorem Lorem');
        return redirect()->back();
    }


    public function destroy($id)
    {
        
    }
}
