<?php

namespace App\Http\Controllers;

use App\Models\LoanAgent;
use Illuminate\Http\Request;

class LoanAgentController extends Controller
{

    public function index()
    {
        $loan_agent = LoanAgent::all()->toArray();
        return array_reverse($loan_agent);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ]);
        LoanAgent::create($request->all());
        return response()->json('Agent Created Successfully');
    }

    public function show($id)
    {
        $loan_agent = LoanAgent::find($id);
        return response()->json($loan_agent);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $loan_agent = LoanAgent::find($id);
        $loan_agent->update($request->all());
        return response()->json('Agent updated successfully!');
    }

    public function destroy($id)
    {
        $loan_agent = LoanAgent::find($id);
        $loan_agent->delete();
        return response()->json('Agent deleted successfully!');
    }
}
