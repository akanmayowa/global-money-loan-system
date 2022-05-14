<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;



class BankController extends Controller
{

    public function index()
    {
   
            return view('admin.bank');
    }


    public function fetchbank()
    {
        $banks = Bank::all();
        return response()->json(['banks' => $banks,]);

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'bankname'=> 'required',
            'sortcode'=>'required',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages() 
            ]);
        }
        else
        {
            $bank = new Bank;
            $bank->bankname = $request->input('bankname');
            $bank->sortcode = $request->input('sortcode');
            $bank->save();
            return response()->json([
                'status'=>200,
                'message'=>'Bank Added Successfully.'
            ]);
        }

    }

    public function edit($id)
    {
        $bank = Bank::find($id);
        if($bank)
        {
            return response()->json([
                'status'=>200,
                'bank'=> $bank,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No Bank Found.'
            ]);
        }

    }


    
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'bankname'=> 'required|max:191',
            'sortcode'=>'required|max:191',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
               'errors'=>$validator->messages()
            ]);
        }
        else
        {

            $bank = Bank::find($id);
            if($bank)
            {
                $bank->bankname = $request->input('bankname');
                $bank->sortcode = $request->input('sortcode');
                $bank->update();

                
                return response()->json([
                    'status'=>200,
                    'message'=>'Student Updated Successfully.'
                ]);
            }
            else
            {
                return response()->json([
                    'status'=>404,
                    'message'=>'No Bank Found.'
                ]);
            }

        }
    }

    public function destroy($id)
    {
        $bank = Bank::find($id);
        if($bank)
        {
            $bank->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Bank Deleted Successfully.'
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No Bank Found.'
            ]);
        }
    }
}