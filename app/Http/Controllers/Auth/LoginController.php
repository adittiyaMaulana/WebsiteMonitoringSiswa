<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite; //tambahkan library socialite
use App\Models\User; //tambahkan model user
use Illuminate\Support\Facades\Hash;
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
    protected $redirectTo = RouteServiceProvider::HOME;


    // protected function redirectTo(){
    //     if( Auth()->user()->role == 1 ){
    //         return route('admin.homepage');
    //     }elseif( Auth()->user()->role == 2 ){
    //         return route('orangTua.homepage');
    //     }elseif( Auth()->user()->role == 3 ){
    //         return route('guru.homepage');
    //     }
    // }

    public function login(Request $request){
        $input = $request->all();
       $this->validate($request,[
           'email'=>'required|email',
           'password'=>'required'
       ]);

       if( auth()->attempt(array('email'=>$input['email'], 'password'=>$input['password'])) ){

        if( auth()->user()->role == 1 ){
            return redirect()->route('admin.homepage_admin');
        }
        elseif( auth()->user()->role == 2 ){
            return redirect()->route('orangTua.homepage_ortu');
        }
        elseif( auth()->user()->role == 3 ){
            return redirect()->route('guru.homepage_guru');
        }

       }else{
           return redirect()->route('login')->with('error','Email and password are wrong');
       }
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->redirectTo = route('login');
        // $this->middleware('guest')->except('logout');
    }
    
    public function lupapassword()
    {
        return view('lupapassword');
    }
    
    public function lupapasswordsubmit(Request $request)
    {
    	$this->validate($request, [
		    'password' => 'min:6',
		    'password_confirmation' => 'required_with:password|same:password|min:6'
			]);
    	$email = $request->input('email');
        $user = User::where('email', $email)->firstOrFail();
        $user->password = Hash::make($request->input('password'));
        $user->update();
        return redirect('login');
    }
    
    public function logout(Request $request) {
		  Auth::logout();
		  return redirect('/login');
		}
}
