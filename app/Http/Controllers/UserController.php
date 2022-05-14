<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $profile = Profile::all();
      return view('user.index')->with('user', $user)
                                ->with('profile', $profile);
    }


    public function appuser()
    {
        $profile = Profile::all();
        return view('user.profile')->with('user', Auth::user())
                                    ->with('profile', $profile);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
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
