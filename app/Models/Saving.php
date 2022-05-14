<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saving extends Model
{
    use HasFactory;
    protected $fillables = [
        'user_id',
        'transaction_id',
        'saving_type',
        'saving_package',
        'amount',
        'status',
        'approvedby',
        'interestrate',
        'duration',
        'transactiontype',
        'bankaccount'
    ];


    public function usersavings()
    {

        return $this->hasOne('App\Models\User');

    }

    public function profilesavings()
    {
        return $this->hasOne('App\Models\Profile');
    }
}
