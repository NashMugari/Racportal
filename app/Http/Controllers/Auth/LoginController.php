<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Chat;
use App\User;
use App\Analytic;


use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

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
//    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
	
	
	
    public function logout(Request $request)
    {

        $userId = Auth::id();
      
        $chat = User::findOrFail($userId);
        $chat->online_status = 0;
        $chat->update();

      $this->guard()->logout();

     $request->session()->invalidate();

     return $this->loggedOut($request) ?: redirect('/');

    }

 public function redirectTo()
    {
        if(Auth::user()->role == 'admin'){

                $save = new Analytic;
              $save->ipAddress = request()->ip();
              $save->source = 'adminPortal';
              $save->save(); 



		$userId = Auth::id();
        $chat = User::findOrFail($userId);
        $chat->online_status = 1;
        $chat->update();
           $this->redirectTo = '/admin';
           return $this->redirectTo;
        }else if(Auth::user()->role == 'user')
		{

                $save = new Analytic;
              $save->ipAddress = request()->ip();
              $save->source = 'userPortal';
              $save->save(); 

			
			$userId = Auth::id();
			$chat = User::findOrFail($userId);
			$chat->online_status = 1;
			 $chat->update();
			$this->redirectTo = '/home';
			return $this->redirectTo;
		}
	
    }
	















}

