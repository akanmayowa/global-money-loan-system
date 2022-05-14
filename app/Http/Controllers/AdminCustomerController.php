<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminCustomerController extends Controller
{

    public function index()
    {
        return view('admin.customer.index');

    }

    public function getUsers()
    {
        $customers = User::all();
        return response()->json($customers);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'unique:users'],
            'phone_number' => 'required|numeric',
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->password = Hash::make('password123456');
        $user->save();
        return response()->json('Customer created!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $customer = User::find($id);
        return response()->json($customer);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'unique:users'],
            'phone_number' => 'required|numeric',
        ]);

        $user = User::findOrFail($id);
        $user->username = $request->username;
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->password = Hash::make('password123456');
        $user->save();
        return response()->json('Customer created!');
    }

    public function destroy($id)
    {
        //
    }
}
