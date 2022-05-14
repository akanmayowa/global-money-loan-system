<?php

namespace App\Mail;

use App\Models\Referral;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class ReferralRecieved extends Mailable
{
    use Queueable, SerializesModels;

    public $sender;
    public $referral;

    public function __construct(User $sender, Referral $referral)
    {

        $this->sender = $sender;
        $this->referral = $referral;
    }

   
    public function build()
    {
        return $this
        ->subject($this->sender->name . 'has invited you.')
        ->markdown('emails.referrals.recieved');
    }
}
