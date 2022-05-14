<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Bank;
class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'loan_id',
        'user_id',
        'bank_id',
        'bank_account',
        'amount',
        'status',
        'bvn',
        'agent',
        'date_release',
        'pay_date',
        'tenor',
        'dob',
       'firstname',
       'last_name',
        'dob',
       'phone_number',
       'interestrate'
    ];

    public function banks()
    {
        return $this->hasMany(App\Models\Bank::class);
    }

}
