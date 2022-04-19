<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Where to redirect users after login.
     * 
     * @var string
     */
//    protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo()
    {
        if (Auth::user()->hasAnyRole(['Admin', 'Super Admin', 'Manager'])) {
            return route('index');
        }

      return route('profile-client', ['id' => Auth::user()->id]);

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

    public function login(Request $request){
        $input  = $request->all();

        $this->validateLogin($request);

        if(auth()->attempt(array('email' => $input['email'], 'password'=> $input['password']))){
            if(Auth::user()->hasAnyRole(['Admin', 'Super Admin', 'Manager'])) {
                return redirect()->route('index');
            }else{
                return redirect()->route('profile-client', ['id' => Auth::user()->id]);
            }
        }else{
            Session()->flash('error', 'Invalid Email or Password');
            return redirect()->route('login');
        }
    }



    // custom logout function
    // redirect to login page
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new Response('', 204)
            : redirect('/login');
    }
}
