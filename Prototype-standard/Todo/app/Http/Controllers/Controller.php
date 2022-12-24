<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function  redirect()
    {
        return (Socialite::driver('google')->redirect());
    }

    function callbackGoogle()
    {
        try {
            $google_user = Socialite::driver("google")->user();
            // dd($google_user->getI);
            $user = User::where('google_id', $google_user->getId())->first();

            if (!$user) {
                $Add_user = new User();
                $Add_user->name = $google_user->getName();
                $Add_user->email = $google_user->getEmail();
                $Add_user->google_id = $google_user->getId();
                $Add_user->save();
                Auth::login($Add_user);
                return redirect()->intended('/dashboard');
            } else {
                Auth::login($user);
                return redirect()->intended('/dashboard');
            }
        } catch (\Throwable $th) {
            //throw $th;
            dd('error ' . $th->getMessage());
        }
    }
}
