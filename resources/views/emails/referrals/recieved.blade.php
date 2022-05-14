@component('mail::message')
# Referral

# {{ $sender->name }} has invited you to GlobalInvestment

# You'll get Bonus points on your investment and saving

@component('mail::button', ['url' => route('register', ['referral' => $referral->token])])
Sign up now
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
