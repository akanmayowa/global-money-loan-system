<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Profile;
use App\Models\Referral;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'referral',
        'permission',
        'last_name',
        'address',
        'phone'

    ];



    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function profile()
    {

            return $this->hasOne('App\Models\Profile');

    }


     public function savingusers()
     {
         return $this->hasMany('App\Models\Saving');
     }

     public function referrals()

    {
        return $this->hasMany(Referral::class );

    }

    public function contactusers()
    {
        return $this->HasManyvcx('App\Models\Contacts', 'user_id', 'id');
    }

}
