<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:saccomanager')->except('logout');
        $this->middleware('guest:systemadmin')->except('logout');
    }

    public function showSaccoManagerLoginForm(){
        return view('login',['url'=>'saccomanager']);
    }

    //Show SystemAdmin Page
    public function showSystemAdminLoginForm(){
        return view('accounts.admin-login',['url'=>'systemadmin']);
    }

    public function saccoManagerLogin(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:6'

        ]);

        if (Auth::guard('saccomanager')->attempt(['email'=>$request->email,'password'=>$request->password],$request->get('remember'))){

            return redirect()->intended('/SaccoManager');
        }
        return back()->withInput($request->only('email','remember'));
    }



    //Login System Administrator;
    public function systemAdministratorLogin(Request $request){
        $this->validate($request,[
            'username'=>'required|max:20',
            'password'=>'required|min:6'

        ]);

        if (Auth::guard('systemadmin')->attempt(['username'=>$request->username,'password'=>$request->password],$request->get('remember'))){

            return redirect()->intended(route('systemadmindashboard'));
        }
        return back()->with('error','Login Details are wrong');
    }
 //Logout User;
    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->invalidate();
        return $this->loggedOut($request)?:redirect('/login/saccomanager');
    }
}
