<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Contacts extends Model
{
    use HasFactory;
    public $fillable = [
        'name', 'email', 'sentby', 'subject', 'message', 'user_id'
    ];


    public function usercontacts()
    {
        return $this->BelongsTo('App\Models\User', 'user_id', 'id');
    }
}
