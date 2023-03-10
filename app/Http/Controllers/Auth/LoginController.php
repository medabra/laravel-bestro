<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
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

    // use AuthenticatesUsers;

    // /**
    //  * Where to redirect users after login.
    //  *
    //  * @var string
    //  */
    // // protected $redirectTo = RouteServiceProvider::HOME;
    // protected $redirectTo ;

    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
       
    //     if(Auth::check() && Auth::user()->role_id == 1){
    //         $this->redirectTo = route('admin.dashboard');
    //     } elseif(Auth::check() && Auth::user()->role_id == 2){
    //         $this->redirectTo = route('user.dashboard');
    //     }
       
    //     $this->middleware('guest')->except('logout');
    // }

    use AuthenticatesUsers;
protected $redirectTo;
public function redirectTo()
{
switch (Auth::user()->role_id) {
case '1':
    $this->redirectTo = '/admin';
    return $this->redirectTo;
    break;

case '2':
    $this->redirectTo = '/user';
    return $this->redirectTo;
    break;
default:
   $this->redirectTo = '/login';
   return $this->redirectTo;
}
// return $next($request);
}

}
