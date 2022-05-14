<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\NotReferringSelf;
use App\Rules\NotReferringExisiting;

class ReferralStoreRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => ['required', 'email', 
            new NotReferringExisiting($this->user()), 
            new NotReferringSelf($this->user())
        ]];
    }
}
