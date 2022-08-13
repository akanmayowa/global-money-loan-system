<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillables = [
            'transaction_id',
            'user_id',
            'full_name',
            'amount',
            'loan_id',
            'bank_id',
            'bank_account',
            'pay_date',
            'status'
    ];
}
