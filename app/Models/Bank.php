<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Loan;

class Bank extends Model
{
    use HasFactory;
    protected $fillable = [
        'bankname'. 'sortcode',
    ];


    public function loans()
    {
        return $this->belongsToMany(App\Models\Loan::class);
    }

}

