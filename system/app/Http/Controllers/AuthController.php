<?php

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller
{
	function showLogin(){
		return view('login');
	}

	function loginProcess(){
		return view('login');
		if(Auth::attempt(['email' => request('email'), 'password' =>request('password')])){
			return redirect('beranda')->with('success', 'Login Berhasil');
		}else{
			return back()->with('warning', 'Login Gagal, Silahkan cek email dan password anda');
		}
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

