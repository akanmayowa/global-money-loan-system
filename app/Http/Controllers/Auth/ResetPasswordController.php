<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Auth;

class ResetPasswordController extends Controller
{
 

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
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

}
