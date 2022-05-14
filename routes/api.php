<?php

use App\Http\Controllers\AdminCustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankController;
use App\Http\Controllers\LoanAgentController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('api')->group(function () {
    Route::resource('loan_agents', LoanAgentController::class);
    Route::resource('customers', AdminCustomerController::class);
});


