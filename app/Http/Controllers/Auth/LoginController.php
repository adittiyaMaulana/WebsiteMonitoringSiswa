<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite; //tambahkan library socialite
use App\Models\User; //tambahkan model user

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


    protected function redirectTo(){
        if( Auth()->user()->role == 1 ){
            return route('admin.homepage');
        }elseif( Auth()->user()->role == 2 ){
            return route('orangTua.homepage');
        }elseif( Auth()->user()->role == 3 ){
            return route('guru.homepage');
        }
    }

    public function login(Request $request){
        $input = $request->all();
       $this->validate($request,[
           'email'=>'required|email',
           'password'=>'required'
       ]);

       if( auth()->attempt(array('email'=>$input['email'], 'password'=>$input['password'])) ){

        if( auth()->user()->role == 1 ){
            return redirect()->route('admin.homepage');
        }
        elseif( auth()->user()->role == 2 ){
            return redirect()->route('orangTua.homepage');
        }
        elseif( auth()->user()->role == 3 ){
            return redirect()->route('guru.homepage');
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
        //$this->middleware('guest')->except('logout');
    }
    public function redirectToProvider()
        {
            return Socialite::driver('google')->redirect();
        }
    public function handleProviderCallback(\Request $request)
        {
            try {
                $user_google    = Socialite::driver('google')->user();
                $user           = User::where('email', $user_google->getEmail())->first();
    
                //jika user ada maka langsung di redirect ke halaman home
                //jika user tidak ada maka simpan ke database
                //$user_google menyimpan data google account seperti email, foto, dsb
    
                if($user != null){
                    \auth()->login($user, true);
                    if( auth()->user()->role == 1 ){
			            return redirect()->route('admin.homepage');
			        }
			        elseif( auth()->user()->role == 2 ){
			            return redirect()->route('orangTua.homepage');
			        }
			        elseif( auth()->user()->role == 3 ){
			            return redirect()->route('guru.homepage');
			        }
                }else{
                    
                    return redirect()->route('home');
                }
    
            } catch (\Exception $e) {
                return redirect()->route('login');
            }
    
    
        }
}
