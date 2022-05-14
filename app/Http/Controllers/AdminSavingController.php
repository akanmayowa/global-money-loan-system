<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Models\Saving;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminSavingController extends Controller
{

    public function index(Request $request)
      {
        $users = User::get();
        $profiles = Profile::get();
        $savings = Saving::selectRaw('id,bankaccount, user_id, saving_package, saving_type, SUM(amount) as totalamount')
        ->groupBy('bankaccount')
        ->orderBy('id')
        ->get();
        return view('admin.saving.index')
        ->with('savings', $savings)
        ->with('users', $users)->with('profiles', $profiles);
       }

    public function pendingSaving()
        {
            $users = User::get();
            $profiles = Profile::get();
            $savings = Saving::selectRaw('id,bankaccount, user_id, saving_package, saving_type, SUM(amount) as totalamount')
            ->where('status', 0)
            ->groupBy('bankaccount')
            ->orderBy('id')
            ->get();
            return view('admin.saving.pending')
            ->with('savings', $savings)
            ->with('users', $users)->with('profiles', $profiles);
        }


    public function approvedSaving()
      {
        $users = User::get();
        $profiles = Profile::get();
        $savings = Saving::selectRaw('id,bankaccount, user_id, saving_package, saving_type, SUM(amount) as totalamount')
        ->where('status', 1)
        ->groupBy('bankaccount')
        ->orderBy('id')
        ->get();
        return view('admin.saving.approved')
        ->with('savings', $savings)
        ->with('users', $users)->with('profiles', $profiles);
      }




    // public function create($id)
    // {
    //     $savings = Saving::findOrFail($id);
    //     return view('admin.deposit', compact('savings'));
    // }


    public function store(Request $request)
    {

    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
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
