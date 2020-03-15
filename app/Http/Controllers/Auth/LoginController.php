<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Charts\firstLineSupportCharts;
use App\Bug;
use App\FirstLineSupport;
use Session;
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

    //! this method is used to redirect the users based on the roles that they have in the application.

    protected function authenticated() {
        if (Auth::check()) {

            //! this is a dummy implementation of the roles and permission that implements 
                    // ! the redirection based on the roles that the user has. 

            if (Auth::user()->id == 2) {
                # code...                                
                return redirect('/supportLanding');

            } else {
                # code...
                return redirect('/');
            }
            


        }
        else{
            return redirect('/');
        }
    }
    
    protected $redirectTo = '/';

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
