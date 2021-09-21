<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    #protected $redirectTo = '/home';
    public function authenticated()
    {
        $role = \Auth::user()->role;
        
            switch ($role) {
                
                case 'superadmin':
                    return redirect()->intended('/sp-admin');
                case 'admin':
                    return redirect()->intended('/adm');
                case 'petugasech':
                    return redirect()->intended('/pet-ech');
                case 'petit':
                    return redirect()->intended('/pet-it');
                case 'petugaskeb':
                    return redirect()->intended('/pet-keb');
                case 'satpam':
                    return redirect()->intended('/pet-security');
                default:
                    return abort(403);

            }
        
        return abort(403);
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}