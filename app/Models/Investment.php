<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;
    protected $fillables = [

        'user_id',
        'transaction_id',
        'investment_duration',
        'investment_plan',
        'amount',
        'status',
        'agent',
        'interestrate',
        'transactiontype',
    ];
}
