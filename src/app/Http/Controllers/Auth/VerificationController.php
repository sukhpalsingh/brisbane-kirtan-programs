<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\{User, VerificationToken};
use Auth;
use App\Events\UserRequestedVerificationEmail;

class VerificationController extends Controller
{
    public function verify(VerificationToken $token)
    {
    	$token->user()->update([
    		'verified' => true
    	]);
        $token->delete();

        //Auth::login($token->user);

    	return redirect('/login')->withInfo('Email verification succesful. Please login again');
    }

    public function resend(Request $request)
    {
    	$user = User::byUserName($request->username)->firstOrFail();
        if($user->hasVerifiedEmail()) {
            return redirect('/home')->withInfo('Your username has already been verified');
        }

        event(new UserRequestedVerificationEmail($user));
        return redirect('/login')->withInfo('Verification email resent. Please check your inbox');
    }
}
