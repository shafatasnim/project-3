<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
	function showLogin(){
		return view('login');
	}

	function processLogin(){
		return view('processlogin');
	}

	function logout(){
		return view('logout');
	}

	function registration(){
		return view('registration');
	}

	function forgotPassword(){
		return view('forgotPassword');
	}
}

