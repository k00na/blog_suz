<?php

namespace App\Auth;

use App\User;
use Illuminate\Auth\GenericUser;
use Illuminate\Contracts\Auth\UserProvider; 
use Illuminate\Contracts\Auth\Authenticatable; 

class CustomUserProvider implements UserProvider {

	public function retrieveById($id){

		$user = User::findOrFail($id);

		return $user;
	}


	public function retrieveByToken($id, $token){

		$user = User::where('user_id', '=', $id)->where('remember_token', '=', $token);

		if($user){

			return $user;
		}

		return null;
	}

	public function updateRememberToken(Authenticatable $user, $token)
	{
	    // TODO: Implement updateRememberToken() method.
	    $user->setRememberToken($token);

	    $user->save();

	}

}




?>