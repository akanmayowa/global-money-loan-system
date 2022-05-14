<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class AdminProfileController extends Controller
{

        public function changePassword($id)
        {
            $user =  User::findOrFail(Auth::user()->id);
            return view('admin.profile.index')->with('user', $user);
        }

        public function index()
        {
            return view('admin.profile.index');
        }

        public function update(Request $request)
        {
            $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|same:confirm_password|min:6',
             'confirm_password' => 'required',
            ]);

            $hashed_password = Auth::user()->password;
            if (Hash::check($request->old_password, $hashed_password))
            {
                if (!Hash::check($request->new_password, $hashed_password))
                {
                    $users = User::find(Auth::user()->id);
                    $users->name = $request->name;
                    $users->password = bcrypt($request->new_password);
                    $users->update();
                    Alert::success('Success', 'password updated successfully');
                    return redirect()->back();
                }
                else
                {
                     Alert::success('Error', 'new password can not be the old password!');
                     return redirect()->back();
                }
            }
            else
            {
                Alert::success('Error', 'old password doesnt matched');
                return redirect()->back();
            }

        }



}




