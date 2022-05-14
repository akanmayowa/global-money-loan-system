<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Controller
{


    use VerifiesEmails;

 
    protected $redirectTo;
    //= RouteServiceProvider::HOME;
 
    public function redirectTo()
    {
        switch(Auth::user()->permission)
        {
            case 0:
            $this->redirectTo = '/user/index';
            return $this->redirectTo;
                break;
            case 1:
                    $this->redirectTo = '/admin/index';
                return $this->redirectTo;
                break;
            case 2:
                $this->redirectTo = '/admin/index';
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
            }
        }
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}
