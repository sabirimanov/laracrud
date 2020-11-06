<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use Exception;
use App\Models\User;


class SocialGithubController extends Controller
{
    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleCallback()
    {
        try {
            $user = Socialite::driver('github')->user();
            $finduser = User::where('social_id', $user->id)->first();

            if($finduser){
                Auth::login($finduser);
                return redirect('/');
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id'=> $user->id,
                    'social_type'=> 'github',
                    'password' => encrypt('github123456')
                ]);
                Auth::login($newUser);

                return redirect('/');
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
