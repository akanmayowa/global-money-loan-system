<?php

namespace App\Http\Controllers;

use App\Models\Saving;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\Validator;
use App\Services\Validators\PageValidator;
use Input, Notification, Redirect, Sentry, Str, Session;



class SavingController extends Controller
{
    public function index()
    {
 
    }

   
    public function create()
    {
        
        return view('user.saving');
    }



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

    }

    public function destroy($id)
    {
    }
}
