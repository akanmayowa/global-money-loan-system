<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Event;
use App\Events\ReferralCompleted;

class Referral extends Model
{
    use HasFactory;

    
    protected $fillables = [
        'email', 'completed_at', 'token', 'completed', 'user_id'
    ];

    protected $dates = ['completed_at'];

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::creating(function(Referral $referral)
    {
          $referral->token = Str::random(50);
    }
    );

    }


    public function scopeWhereNotCompleted(Builder $builder)
    {

        return $builder->where('completed', false);

    }

    public function scopeWhereNotFromUser(Builder $builder, ?User $user)
    {
        if (!$user)
        {
            return $builder;
        }

        return $builder->where('user_id', '!=', $user->id);
    }

    public function complete()
    {
        $this->update([
            'completed' => true,
            'completed_at' => now()
        ]);
        event(new ReferralCompleted($this));
    }
    
}
