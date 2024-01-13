<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dummy(){
        return view('user.account', array('title' => 'My Account'));
    }
    public function account()
    {
        return view('user.account', array('title' => 'My Account'));
    }    
    public function logout() {
		return redirect()->route('user.login');
	}
    public function login()
    {
        return view('user.login', array('title' => 'Login'));
    }
    public function register()
    {
        return view('user.register', array('title' => 'Register'));
    }
    public function store(Request $request)
    {
		User::create(array(
						'name' => $request->name, 
						'username' => $request->username, 
						'email' => $request->email,
						'password' => $request->password,
					));

		return redirect()->route('user.login');
    }

    public function authenticate(Request $request)
    {		
        $user = User::where('username',$request->username)->first();
        if($user!=null){
            if ($user->password==$request->password) {
                return view('user.index', array('user' => $user, 'title' => 'User Page'));
            } else {
                return redirect()->route('user.login');
            }		
        }   
    }

    public function index()
    {
		$user = null;
        return view('user.index', array('user' => $user, 'title' => 'User Page'));
    }
}
