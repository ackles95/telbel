<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserFBController;
use App\Http\Controllers\UserGController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\User;
use App\User_FB;
use App\User_G;
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
    }


    public function redirectToProvider($provider)
    {
        if ($provider == 'google') {

            return Socialite::driver($provider)->redirect();

        } else {

            return Socialite::driver($provider)->redirect();
        }


    }

    public function handleProviderCallback($provider)
    {
        $user = $this->chooseProvider($provider);

        Auth::login($user);

        return view('components.loginTransition');

    }

    public function chooseProvider($the_provider) {

        if ($the_provider == 'google') {
            $user = Socialite::driver($the_provider)->stateless()->user();
        } else {
            $user = Socialite::driver($the_provider)->fields(['first_name', 'last_name', 'email', 'gender'])->user();
        }

        $authUSR = $this->insertSocialUser($user, $the_provider);

        return $authUSR;

    }

    public function insertSocialUser($user, $provider) {

        switch ($provider) {
            case 'google':
                $insertedUSR = UserGController::checkAndInsert($user);
                return $insertedUSR;
                break;

            case 'facebook':
                $insertedUSR = UserFBController::checkAndInsert($user);
                return $insertedUSR;
                break;

            default:
                echo "provider not specified";

        }

    }




}
