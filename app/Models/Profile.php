<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\user;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
       'passport',
        'user_id',
        'nin',
        'id_card',
        'bvn',
    ];

    protected $gender = ['male', 'female'];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function savingprofiles()
    {
        return $this->hasMany('App\Models\Saving');
    }

}
