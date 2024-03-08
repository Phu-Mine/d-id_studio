<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Auth\RegisterController;

class SocialController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $getInfo = Socialite::driver($provider)->stateless()->user();

        $registerController = new RegisterController();
        $user = $registerController->createUser($getInfo, $provider);

        auth()->login($user);
        return redirect()->to('/');

    }
}
